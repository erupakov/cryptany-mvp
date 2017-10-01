@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>Create new buy now button</h1>
<div class="alert alert-warning" role="alert">
В настоящий момент сервис Cryptany позволяет принимать платежи в одной криптовалюте - Ether.
Если у вас еще нет кошелька для приема Ether, получите его по адресу <a href="https://github.com/ethereum/mist/releases">https://github.com/ethereum/mist/releases</a>
</div>

<form method="post" action="/merchant/register" class="form-horizontal">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">To register new buy now button please fill in fields below</h3>
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
    <label for="inputItemPrice" class="col-sm-2 control-label">Item price</label>
    <div class="col-sm-4">
    <input type="number" class="form-control" id="inputItemPrice" name="inputItemPrice" placeholder="Item price" >
    </div>
    <label for="inputItemCurrency" class="col-sm-2 control-label">Item sell currency</label>
    <div class="col-sm-4">
    <select class="form-control" id="inputItemCurrency" name="inputItemCurrency" required>
        <option value="USD" selected>US dollars</option>
        <option value="EUR">Euro</option>
        <option value="RUB">Russian roubles</option>
        <option value="CHF">Swiss franc</option>
        <option value="CAD">Canada dollars</option>
        <option value="CNY">Chinese yuan</option>
        <option value="JPY">Japan yen</option>
        <option value="AUD">Australia dollars</option>
        <option value="INR">Indian rupee</option>
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
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title">Button preview</h3>
  </div>
<div class="panel-body">
<button class="btn btn-primary">Buy now with Ether</button>
</div>
</div>
  <button type="submit" class="btn btn-default">Create button</button>
</form>
</div>
</div></div></div>
@endsection