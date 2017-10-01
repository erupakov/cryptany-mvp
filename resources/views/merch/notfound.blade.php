@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>Merchant not found</h1>
<div class="alert alert-warning" role="alert">
Sorry, it seems that Merchant credentials you provided coundn't be found. Please check Merchant Id and Merchant Secret you entered on previous page.
Or, maybe you forgot to validate merchant account? Simply cick verification link you received in registration email.
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Please copy the button code below</h3>
    </div>
    <div class="panel-body">
    <<textarea name="formButtonCode" id="formButtonCode" cols="30" rows="10">
    {{ $buttonCode }}
    </textarea>
    <button class="btn btn-success" id="btnCopyAddress" data-clipboard-target="#formButtonCode" name="CopyAddress">Copy code to clipboard</button>
    </div>
</div>
@endsection
@section('add-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
<script>
$(document).ready(function() {
    new Clipboard('#btnCopyAddress');
});
</script>
@endsection