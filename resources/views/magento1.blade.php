@extends('layouts.app')

@section('content')
<main class="content txt">
<div class="inner">
    <div class="breadcrumbs">
        <a href="javascript:history.go(-1);">Back</a>
    </div>

    <h2>Cryptopayment button plugin setup for Magento 1.x CE</h2>

	<h4>1. Setup requirements</h4>

    <p>To set up your Cryptopayment plugin for Magento 1.x CE, you will need to provide Cryptany with the following
	information:
	<ul>
		<li>the address of your Ethereum wallet</li>
		<li>a completed <a href="{{ url('/merchant/register') }}">registration form</a></li>
	</ul>
	<p>Note: if you do not already have an Ethereum wallet, you can create one <a href="https://www.myetherwallet.com">here</a>.</p>
	<p>Upon completing the registration form, you will receive an email at the indicated address with a
	link to verify that the information is correct. When your merchant account is successfully
	activated, you will receive another email with your Merchant ID and Merchant Pass Code that
	you can use to set up a Cryptopayment button for your Magento store.</p>
    <p>
        <img src="{{ url('img/ht1.jpg') }}" alt="">
    </p>

	<h4>2. Install the Cryptopayment plugin for Magento 1.x CE</h4>
    <p>To install the plugin, simply unzip the contents of the package in the root directory of the Magento 1.x CE installation. 
	No existing files will be overwritten.</p>
    <p>
        <img src="{{ url('img/ht2.jpg') }}" alt="">
    </p>

    <h4>3. Configure the Cryptopayment plugin for Magento 1.x CE</h4>
    <p>3.1. Open the store admin panel and go to System -> Configuration menu.</p>
	<p>3.2. Open Sales -> Payment methods section</p>
	<p>3.3. Locate the Cryptany Payment Gateway section, open it and copy and paste your Merchant ID and Merchant Pass Code 
	from the merchant activation email (1,2) in the appropriate fields and press the Save config button (3).</p>
    <p>
        <img src="{{ url('img/ht5.jpg') }}" alt="">
    </p>
    <h4>4. Your Cryptopayment button is ready.</h4>
    <p>Congratulations! Your online store is now ready to receive payments in Ethereum utilizing the Cryptany Trusted Payment Network 
	for real time cryptocurrency payments!</p>

</div>
</main>
<!-- .content -->

@endsection
@section('add-js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{ url('/js/lightbox.min.js') }}"></script>
@endsection