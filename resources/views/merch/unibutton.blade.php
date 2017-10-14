@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>Create new payment button</h1>

<form method="post" action="{{ url('/merchant/unibutton') }}" class="form-horizontal">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">To create new payment button please fill in fields below</h3>
  </div>
  <div class="panel-body">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputMerchId" class="col-sm-2 control-label">Merchant ID (from email) *</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="inputMerchId" name="inputMerchId" placeholder="Merchant ID" required>
    </div>
    <label for="inputMerchSecret" class="col-sm-2 control-label">Merchant secret (from email) *</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="inputMerchSecret" name="inputMerchSecret" placeholder="Merchant secret" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputItemName" class="col-sm-2 control-label">Item name *</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="inputItemName" name="inputItemName" placeholder="Item name" required>
    </div>
    <label for="inputItemID" class="col-sm-2 control-label">Item ID</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="inputItemID" name="inputItemID" placeholder="Item ID" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputItemPrice" class="col-sm-2 control-label">Item price *</label>
    <div class="col-sm-4">
    <input type="number" class="form-control" id="inputItemPrice" name="inputItemPrice" placeholder="Item price" >
    </div>
    <label for="inputItemCurrency" class="col-sm-2 control-label">Item sell currency</label>
    <div class="col-sm-4">
    <select class="form-control" id="inputItemCurrency" name="inputItemCurrency" required>
        <option value="USD" selected>USD</option>
        <option value="EUR">EUR</option>
        <option value="RUR">RUR</option>
        <option value="CHF">CHF</option>
        <option value="CAD">CAD</option>
        <option value="CNY">CNY</option>
        <option value="JPY">JPY</option>
        <option value="AUD">AUD</option>
        <option value="INR">INR</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputButtonText" class="col-sm-1 control-label">Button text</label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputButtonText" name="inputButtonText" placeholder="Button text" value="Buy with Ether">
    </div>
    <label for="inputButtonSize" class="col-sm-1 control-label">Button size</label>
    <div class="col-sm-3">    
    <select class="form-control" id="inputButtonSize" name="inputButtonSize" required>    
        <option value="S">Small</option>
        <option value="M" selected>Medium</option>
        <option value="L">Large</option>        
    </select>
    </div>
    <label for="inputButtonColor" class="col-sm-2 control-label">Button color</label>
    <div class="col-sm-2">
    <input type="color" class="form-control" id="inputButtonColor" name="inputButtonColor" value="#ff0000">
    </div>
  </div>  
</div>
<p class="bg-danger">
@if (count($errors)>0)
<ul>
@foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
@endforeach
</ul>
@endif
</p>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title">Button preview</h3>
  </div>
<div class="panel-body center-block" id="buttonPreview">
<iframe frameborder="0" width="100%" height="90px"></iframe>
</div>
</div>
  <button type="submit" class="btn btn-success">Create button</button>
</form>
</div>
</div></div></div>
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