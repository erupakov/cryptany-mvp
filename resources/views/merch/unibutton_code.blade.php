@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>Your button is ready</h1>
<div class="alert alert-warning" role="alert">
В настоящий момент сервис Cryptany позволяет принимать платежи в одной криптовалюте - Ether.
Если у вас еще нет кошелька для приема Ether, получите его по адресу <a href="https://github.com/ethereum/mist/releases">https://github.com/ethereum/mist/releases</a>
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