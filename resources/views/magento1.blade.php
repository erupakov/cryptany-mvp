@extends('layouts.app')

@section('content')
<div style="margin: 2em 3em;">
            <div class="page-header center-block">
                <h2>Magento 1.x CE plugin installation</h2>
                <p>Please follow this steps to install and configure Magento 1.x Community Edition payment plugin</p>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">1. Register merchant</h4>
                </div>
                <div class="panel-body center-block">
                <ol>
                    <li>Click <a href="{{ url('/merchant/register') }}">this link</a> to go to the merchant registration page.</li>
                    <li>Fill in all required fields in registration form
                    <a href="{{ url('/img/reg_merch_1.png') }}" data-lightbox="image-5" data-title="Registration step 1"><img src="{{ url('/img/reg_merch_1.png') }}" class="img-responsible" width="120px;"></a>
                    </li>
                    <ol>
                        <li>Merchant name (for example, your store name)</li>
                        <li>Site URL</li>
                        <li>Your Ethereum wallet address to receive crypto to</li>
                        <li>Contact email (it will be validated, it should be unique througout our system)</li>
                        <li>Contact person</li>
                    </ol>
                    <li>Press Submit button and get a successfull registration message:
                    <a href="{{ url('/img/reg_merch_2.png') }}" data-lightbox="image-5" data-title="Registration step 2"><img src="{{ url('/img/reg_merch_2.png') }}" class="img-responsible" width="120px;"></a>
                    </li>
                    <li>After a few minutes you'll receive an email address validation message to you mailbox.
                    You may need to look into Spam folder in case email provider filters it out</li>
                    <li>Click the verification link you received in an email
                    <a href="{{ url('/img/reg_merch_3.png') }}" data-lightbox="image-5" data-title="Registration step 3"><img src="{{ url('/img/reg_merch_3.png') }}" class="img-responsible" width="120px;"></a>
                    </li>
                    <li>After you verified your email address we will performs some KYC and ALM checks that can take some time.
                    <a href="{{ url('/img/reg_merch_4.png') }}" data-lightbox="image-5" data-title="Registration step 4"><img src="{{ url('/img/reg_merch_4.png') }}" class="img-responsible" width="120px;"></a>
                    </li>
                    <li>
                    After checks successfully passed we will activate the account and you will receive an email with 
                    Merchant ID and Merchand Pass Code you will use in all our products.
                    <a href="{{ url('/img/reg_merch_5.png') }}" data-lightbox="image-5" data-title="Registration step 5"><img src="{{ url('/img/reg_merch_5.png') }}" class="img-responsible" width="120px;"></a>
                    </li>
                </ol>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">2. Install Magento 1.x CE plugin</h4>
                </div>
                <div class="panel-body center-block">
                <p>To install plugin simply unzip the contents of the package into root directory of the Magento 1.x CE installation. 
                None of the existing files will be overwritten.
                <a href="{{ url('/img/mag1_config_4.png') }}" data-lightbox="image-7" data-title="Installation"><img src="{{ url('/img/mag1_config_4.png') }}" class="img-responsible" width="120px;"></a>
                </p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">3. Configure Magento 1.x CE plugin</h4>
                </div>
                <div class="panel-body center-block">
<ol>
<li>Open store admin panel and go to System -> Configuration menu
<a href="{{ url('/img/mag1_config_1.png') }}" data-lightbox="image-8" data-title="Configuration step 1"><img src="{{ url('/img/mag1_config_1.png') }}" class="img-responsible" width="120px;"></a>
</li>8
<li>Open Sales -> Payment methods section
<a href="{{ url('/img/mag1_config_2.png') }}" data-lightbox="image-8" data-title="Configuration step 2"><img src="{{ url('/img/mag1_config_2.png') }}" class="img-responsible" width="120px;"></a>
</li>
<li>Locate Cryptany Payment Gateway section, open it and fill in Merchant ID and Merchant Pass Code (1,2) fields with values from merchant activation email and press Save config button (3).
<a href="{{ url('/img/mag1_config_3.png') }}" data-lightbox="image-8" data-title="Configuration step 3"><img src="{{ url('/img/mag1_config_3.png') }}" class="img-responsible" width="120px;"></a>
</li>
</ol>
                </div>
            </div>

            <div>
                <h4 class="panel-title">4. You are ready</h4>
                <p>Congratulations! Now you're ready to receive payments in your store using Ethereum and decentralized trust management and escrow from Cryptany!</p>
            </div>
			<div style="padding-bottom: 4em;">&nbsp;</div>
</div>
@endsection
@section('add-js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{ url('/js/lightbox.min.js') }}"></script>
@endsection