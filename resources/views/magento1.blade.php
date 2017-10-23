@extends('layouts.app')

@section('content')
<main class="content txt">
<div class="inner">
    <div class="breadcrumbs">
        <a href="javascript:history.go(-1);">Back</a>
    </div>

    <h2>Merchant signup</h2>
    <p>1. You need to have a crypto wallet that accepts Ether currency.<br>If not, please create one on <a href="https://www.myetherwallet.com">https://www.myetherwallet.com</a>
    </p>
    <p>
        <img src="{{ url('img/ht1.jpg') }}" alt="">
    </p>


    <p>2. Contact us and provide this information in order to be verified:</p>
    <ul>
        <li>Website</li>
        <li>Main contact name and email address</li>
        <li>Wallet address (public key)</li>
    </ul>

    <p>If verified, we will provide you with the “Client ID”, “Client Secret” required<br>to setup “Buy now” button integration as described below.</p>

    <hr>

    <h2>Setup "Buy now" button</h2>
    <p>1. Visit "Buy now" button creation page</p>
    <p>2. Set "Client ID", "Client pass code" that were provided to you by our team in the first step.<br> You can also define "Return URL" where users should be redirected when purchase is completed.</p>
    <p>
        <img src="{{ url('img/ht2.jpg') }}" alt="">
    </p>

    <p>3. Set product information that you are going to sell via Monetha "Buy now" button</p>
    <ul>
        <li>Product name</li>
        <li>Price and Taxes</li>
        <li>Item ID (your internal id, for order tracking)</li>
    </ul>
    <p>
        <img src="{{ url('img/ht3.jpg') }}" alt="">
    </p>

    <p>4. Customze button text and size.<br>Cick "Create button" after you add all required information.</p>
    <p>
        <img src="{{ url('img/ht4.jpg') }}" alt="">
    </p>
    <hr>

    <h2>Add button to your site</h2>
    <p>1. After you click "Create button" HTML code and required Javascript code will be generated.</p>
    <p>
        <img src="{{ url('img/ht5.jpg') }}" alt="">
    </p>
    <p>2. Place this code in your site depending on configuration.<br> E.g. in Wordpress you can simply put button and javascript code on the same page.</p>

</div>
</main>
<!-- .content -->

@endsection
@section('add-js')
<script src="{{ url('/js/lightbox.min.js') }}"></script>
@endsection