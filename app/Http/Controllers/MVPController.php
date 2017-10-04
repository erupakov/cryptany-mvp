<?php
/**
 * MVP actions controller
 * PHP Version 7
 *
 * @category Controller
 * @package  App\Http\Controllers
 * @author   Eugene Rupakov <eugene.rupakov@gmail.com>
 * @license  Apache Common License 2.0
 * @link     http://moblie.cryptany.io
 */
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use \Log;
use Carbon\Carbon;
use \UserVerification;

/**
 * All page actions controller
 *
 * @category Controller
 * @package  App\Http\Controllers
 * @author   Eugene Rupakov <eugene.rupakov@gmail.com>
 * @license  Apache Common License 2.0
 * @link     http://cgw.cryptany.io
 */
class MVPController extends Controller
{
    const AUTH_TOKEN = "button:GlTAohP33j";

    const TX_STATUS = [
    1 => 'Transaction is created and waiting for payment',
    2 => 'Transaction is registered in blockchain and waiting for confirmation',
    3 => 'Transaction is confirmed in blockchain',
    4 => "We're processing transaction in our service center",
    5 => "We've processed transaction successfully and preparing bank payment order",
    6 => "We've sent funds to your bank account, waiting for destination arrival confirmation",
    7 => "Transaction completed successfully and is currently marked as closed on our side",
    1000 => 'There was an error during transaction processing, reverting charges'
    ];

    /**
     * Method for rendering Magento-1 plugin screen
     *
     * @param Request $request Http request to parse
     *
     * @method indexMagento1
     *
     * @return View Magento-1 view
     */
    public function indexMagento1(Request $request)
    {
        return view('magento1');
    }

    /**
     * Method for rendering Magento-2 plugin screen
     *
     * @param Request $request Http request to parse
     *
     * @method indexMagento2
     *
     * @return View Magento-2 view
     */
    public function indexMagento2(Request $request)
    {
        return view('magento2');
    }

    /**
     * Method for rendering UniButton initial screen
     *
     * @param Request $request Http request to parse
     *
     * @method indexRegisterMerchant
     *
     * @return View Unitbutton initial view
     */
    public function indexRegisterMerchant(Request $request)
    {
        return view('merch.register');
    }

    /**
     * Method for rendering UniButton initial screen
     *
     * @param Request $request Http request to parse
     *
     * @method indexUniButton
     *
     * @return View Unitbutton initial view
     */
    public function proceedRegisterMerchant(Request $request)
    {
        $request->validate(
            [
            'contactEmail' => 'required|unique:users|email',
            'currencyEth'=>'required',
            'g-recaptcha-response' => 'required|recaptcha'
            ]
        );

        Log::debug('Input data validated, going to create merchant');

        $user = new \App\User;
        $user->firstName = $request->input('inputFirstName');
        $user->familyName = $request->input('inputFamilyName');
        $user->projectName = $request->input('inputProjectName');
        $user->projectURL = $request->input('inputProjectWeb');
        $user->hash = str_random(8);
        $user->secret = str_random(12);
        $user->email = $request->input('contactEmail');
        $user->save();

        UserVerification::generate($user);
        UserVerification::send($user, 'Cryptany merchant registration verification');

        return view('merch.registered');
    }

    /**
     * Method for rendering UniButton initial screen
     *
     * @param Request $request Http request to parse
     *
     * @method indexUniButton
     *
     * @return View Unitbutton initial view
     */
    public function indexCreateButton(Request $request)
    {
        return view('merch.unibutton');
    }

    /**
     * Method for processing button payment
     *
     * @param Request $request Http request to parse
     *
     * @method proceedPaymentButton
     *
     * @return View New Transfer view
     */
    public function proceedPaymentButton(Request $request)
    {
        $request->validate(
            [
            'm_s' => 'required',
            'i_p' => 'required',
            'i_c' => 'required',
            'i_n' => 'required'
            ]
        );

        Log::debug('Input data validated, going to create wallet');

        // get merchant
        $merch = \App\User::where(['secret'=>$request->input('m_s')])->first();
        if (!isset($merch)) {
            Log::error('Merchant not found: '.$request->input('m_s'));
            abort(403,'Merchant not found');
        }

        $contents = file_get_contents(
            "https://api.coinmarketcap.com/v1/ticker/ethereum/?convert=USD"
        );
        $eth_data = json_decode($contents, true);
            
        // create new wallet
        $addressArr = $this->_call_cryptany_service(
            'data/addr', [
                'email'=>$merch->email,
                'srcAmount'=>number_format((float)$request->input('i_p')/(float)$eth_data[0]['price_usd'], 6),
                'dstAmount'=>$request->input('i_p'),
                'plastic_card'=>'',
                'validity_date'=>''
            ]
        );

        if ($addressArr===false) {
            Log::error('Error calling cgw service');
            abort(403,'Error processing payment');
        }

        return redirect()->route(
            'showTransaction', 
            [
                'id'=>$addressArr['walletHash'],
            ]
        );
    }

    /**
     * Method for rendering UniButton code screen
     *
     * @param Request $request Http request to parse
     *
     * @method proceedCreateButton
     *
     * @return View Unitbutton code view
     */
    public function proceedCreateButton(Request $request)
    {
        // verify parameters
        $request->validate(
            [
            'inputMerchId' => 'required|exists:users,hash',
            'inputMerchSecret' => 'required|exists:users,secret',
            'inputItemName' => 'required',
            'inputItemCurrency'=>'required',
            'inputItemPrice'=>'required',
            'inputButtonText'=>'required'
            ]
        );
        $user = \App\User::where(['hash'=>$request->input('inputMerchId'),'secret'=>$request->input('inputMerchSecret')])->first();
        if (!isset($user) || !$user->isVerified()) {
            Log::error('Cannot find merchant, error');
            return view('merch.notfound');
        }

        Log::debug('Input data validated, going to create button');
        
        $buttonRnd = random_int(0, PHP_INT_MAX);
        $u_secret = $request->input('inputMerchSecret');
        $i_name = $request->input('inputItemName');
        $i_price = $request->input('inputItemPrice');
        $i_curr = $request->input('inputItemCurrency');
        $i_id = $request->input('inputItemID');
        $b_size = $request->input('inputButtonSize');
        $b_color = $request->input('inputButtonColor');
        $b_text = $request->input('inputButtonText');

        $complexStyle = 'font-family: Helvetica, arial; font-weight: bold; border: none; text-align: center; text-decoration: none; display: inline-block; box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2), 0 8px 10px 0 rgba(0,0,0,0.19); padding: 1em;';
        $complexStyle .= 'background-color: '.$b_color.'; color: white;';

        if ($b_size=='L') {
            $complexStyle .= 'font-size: 20px; border-radius: 6px;';
        } elseif ($b_size=='M') {
            $complexStyle .= 'font-size: 16px; border-radius: 5px;';
        } else {
            $complexStyle .= 'font-size: 14px; border-radius: 3px;';
        }

        $buttonText = <<< BUTTON_TEXT
<div id='cryptany-button-$buttonRnd'></div><script>(function(){var div = document.getElementById('cryptany-button-$buttonRnd');var b = document.createElement('a');b.href='https://mvp.brusnika.biz/payment/new?m_s=$u_secret&i_p=$i_price&i_c=$i_curr&i_i=$i_id&i_n=$i_name';b.innerText='$b_text';b.setAttribute('style','$complexStyle');div.appendChild(b);})();</script>
BUTTON_TEXT;
        Log::debug('Button code generated:'.$buttonText);
        return view('merch.unibutton_code')->with('buttonCode',$buttonText);
    }

    /**
     * Method for handling transaction page
     *
     * @param Illuminate\Http\Request $request request to process
     * @param string                  $id      Id of transaction to show
     *
     * @method showTransaction
     * @return View transaction view
     */
    public function showTransaction(Request $request, $id)
    {
        $txStatus = $this->_call_cryptany_service(
            'txs/checkAddress', [
                'wallet'=>$id
            ]
        );

        if ($txStatus===false) {
            Log::error('Wrong wallet Id passed or error calling CGW service');
            return view('notfound');
        }

        $transactionDate = new Carbon($txStatus['statusDate']);

        return view(
            'payment.transaction',
            [
                    'address'=>$txStatus['address'],
                    'walletHash'=>$txStatus['walletHash'],
                    'srcAmount'=>$txStatus['srcAmount'],
                    'dstAmount'=>$txStatus['dstAmount'],
                    'statusCode'=>$txStatus['status'],
                    'statusText'=>$this::TX_STATUS[$txStatus['status']],
                    'statusDate'=>$transactionDate->toDateTimeString(),
/*
					'i_price'=>,$i_price,
					'i_name'=>$i_name,
					'i_cur'=>$i_cur,
					'm_project'=>$merch->projetName
*/
            ]
        );
    }

    /**
     * Method for calling cryptogateway service
     *
     * @param string $url  URI part of the REST method to call
     * @param Array  $data data to pass to REST method
     *
     * @method _call_cryptany_service
     *
     * @return View faq page view
     */    
    private function _call_cryptany_service( $url, $data=null )
    {
        $authCode = base64_encode(self::AUTH_TOKEN);
        Log::debug('Start service request, authCode:'.$authCode);

        $client = new \GuzzleHttp\Client(
            [
                'base_uri' => 'https://cgw.cryptany.io/', 
                    'headers' => [
                        'Authorization' => 'Basic '.$authCode
                    ],
                'verify' => false
            ]
        );

        try 
        {
            $res = $client->request(
                'POST', $url, 
                [
                    'form_params' => $data 
                ]
            );

            Log::debug('Called service, got:'.$res->getStatusCode().':'.$res->getBody());

            if ($res->getStatusCode()==200) { // request succeeded
                return json_decode($res->getBody(), true);
            } else {
                return false;
            }
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            Log::error('Error calling CGW service not found error: '.$ex->getResponse()->getStatusCode());
            return false;
        } catch (\GuzzleHttp\Exception\TransferException $ex) {
            Log::error('Other error occured calling CGW service: ['.$ex->getResponse()->getStatusCode().']: '.$ex->getResponse()->getBody());
            return false;
        }
    }
}
