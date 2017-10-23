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
                            <input placeholder="Merchant ID (from email)*" type="text" id="inputMerchId" name="inputMerchId" required>
                            <input type="text" id="inputItemName" name="inputItemName" required placeholder="Item name*">
                            <input type="number" id="inputItemPrice" name="inputItemPrice" placeholder="Item price*">
                        </div>
                        <div class="fc2 right clearfix">
                            <input type="text" id="inputMerchSecret" name="inputMerchSecret" required placeholder="Merchant Pass Code (from email)*">
                            <input type="text" id="inputItemID" name="inputItemID" placeholder="Item ID">
                            <span class="lbl">Sale currency</span>
                            <select class="sel right curr clearfix" id="inputItemCurrency" name="inputItemCurrency" required>
						<option value="USD" selected>US dollars</option>
						<option value="EUR">EUR</option>
						<option value="GBP">GBP</option>
					</select>
                        </div>
                    </div>
                    <ul class="f3c clearfix">
                        <li class="c1"><input type="text" name="itxt" class="itxt js-butcng" placeholder="Button text"></li>
                        <li class="c2"><span class="lbl">Choose button size</span>
                            <select class="sel xsize right js-butcng" id="inputButtonSize" name="inputButtonSize" required>
						<option value="M" selected>Medium</option>
						<option value="S">Small</option>
						<option value="L">Large</option>
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
                    <button id="cbtn" class="cc cryptbutton"></button>
                    </div>
                    <button class="btn-green" type="submit">Create button</button>
                </form>
            </div>
        </main>
        <!-- .content -->

@endsection
@section('add-js')
<script>
$(document).ready(function() {
    $( ".form-control" ).change(function() {
        var complexStyle = 'font-family: Helvetica, arial; font-weight: bold; border: none; text-align: center; text-decoration: none; display: inline-block; box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2), 0 8px 10px 0 rgba(0,0,0,0.19); padding: 1em;';
	    var buttonText = $('#inputButtonText').val();

	    complexStyle += 'background-color: ' + $('#inputButtonColor').val() + '; color: white;';
	    if ($('#inputButtonSize').val()=='L') {
	        complexStyle += 'font-size: 20px; border-radius: 6px;';
	    } else if ($('#inputButtonSize').val()=='M') {
	        complexStyle += 'font-size: 16px; border-radius: 5px;';
	    } else {
	        complexStyle += 'font-size: 14px; border-radius: 3px;'
	    }

	    var frame = $('#buttonPreview iframe'),
	        body = frame.contents().find('body');

	    body.html('<div style="width: 100%; text-align: center; margin: auto;"><button style="'+complexStyle+'">'+buttonText+'</button></div');
    });

    $( "#inputButtonSize" ).change();
});
</script>
@endsection