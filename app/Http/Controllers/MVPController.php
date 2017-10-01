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

use Illuminate\Http\Request;
use \Log;

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
            'contactEmail' => 'required|email',
            'currencyEth'=>'required',
            'g-recaptcha-response' => 'required|recaptcha'
            ]
        );

        Log::debug('Input data validated, going to create merchant');

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
}
