@extends('layouts.app')

@section('content')
<main class="content">
            <div class="inner">
                <div class="breadcrumbs">
                    <a href="javascript:history.go(-1);">Back</a>
                </div>

                <h2>Create cryptopayment button</h2>
                <form method="post" action="{{ url('/merchant/unibutton') }}" class="fstyled formbtn">
                {{ csrf_field() }}
                    <p class="info"><span class="ipd">Complete the following fields to create your Cryptopayment button:</span></p>

                    <div class="clearfix">
                        <div class="fc2">
                            <input placeholder="Merchant ID (from email)*" type="text" id="inputMerchId" name="inputMerchId" required tabindex="1">
                            <input type="text" id="inputItemName" name="inputItemName" required placeholder="Item name*" tabindex="3">
                            <input type="number" id="inputItemPrice" name="inputItemPrice" placeholder="Item price*" tabindex="5">
                        </div>
                        <div class="fc2 right clearfix">
                            <input type="text" id="inputMerchSecret" name="inputMerchSecret" required placeholder="Merchant Pass Code (from email)*" tabindex="2">
                            <input type="text" id="inputItemID" name="inputItemID" placeholder="Item ID" tabindex="4">
                            <span class="lbl">Sale currency</span>
                            <select class="sel right curr clearfix" id="inputItemCurrency" name="inputItemCurrency" required tabindex="6">
						<option value="USD" selected>US dollars</option>
						<option value="EUR">EUR</option>
						<option value="GBP">GBP</option>
					</select>
                        </div>
                    </div>
                    <ul class="f3c clearfix">
                        <li class="c1"><input type="text" name="inputButtonText" class="itxt js-butcng" placeholder="Button text" tabindex="7"></li>
                        <li class="c2"><span class="lbl">Choose button size</span>
                            <select class="sel xsize right js-butcng" id="inputButtonSize" name="inputButtonSize" required tabindex="8">
						<option value="medium" selected>Medium</option>
						<option value="small">Small</option>
						<option value="large">Large</option>
					    </select>
                        </li>
                        <li class="c3">
                            <span class="lbl">Choose button color</span>
                            <div class="rel right rrcb">
                                <div class="colorbox" style="background-color: #55288c;"></div>
                            </div>
                        </li>
                    </ul>
                    <hr>
                    <div class="butprv" id="buttonPreview">Button preview
                    <button id="cbtn" class="cc cryptbutton" type="button"></button>
                    </div>
					<input type="hidden" name="inputButtonColor" id="inputButtonColor" value="#55288c" tabindex="9">
                    <button class="btn-green" type="submit">Create button</button>
                </form>
            </div>
        </main>
        <!-- .content -->

@endsection
@section('add-js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{ url('js/colpick.js') }}"></script>
<script src="{{ url('js/button.js') }}"></script>
<link href="{{ url('css/mvp.css') }}" rel="stylesheet">
<link href="{{ url('css/colpick.css') }}" rel="stylesheet">
@endsection