@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="jumbotron">
    <h1>Integrate Cryptany into your E-Commerce store</h1>    
    <p>A unique payment processing platform with a Decentralised Trust and Reputation System.</p>
    <p>We're proud to present our products that help the community to make next step in cryptoeconomy evolution</p>
    <p><a class="btn btn-primary btn-lg" href="{{ url('/faq') }}" role="button">Learn more</a></p>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>Supported e-commerce platforms</h1>
<p>Monetha payment gateway is integrated with the following e-commerce platforms and extensions. Please select your platform to view the steps needed for integration.</p>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>“Buy now” button</h1>
<p>Let your clients easily purchase one item at a time: put a “Buy Now” button on your store. We provide the HTML code, which you simply copy and paste to your e-commerce store. Your customers can then press the button to buy an item.</p>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>Decentralised Trust and Reputation</h1>
<p>Cryptany's Smart Contract stores and updates this information for every transaction: merchant address and his latest trust rate; Buyer address and his latest trust rate; Order ID; Product delivery and warranty.
</p>
<img class="img-responsive" src="/img/decentralized_trust.png" alt="Decentralized trust and reputation">
</div>
</div>
</div>
@endsection