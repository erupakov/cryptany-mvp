@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<img class="img-responsive center-block" src="/img/transaction_icon.png" alt="transaction logo"/>
<p>{{ __('transaction.instruction', ['srcAmount'=>$srcAmount]) }}</p>
<p id="txStatus_1">Transaction Id: {{ $walletHash }}</p>
<p id="txStatus_2">Wallet address: 0x{{ $address }}&nbsp;<button class="btn btn-success" id="btnCopyAddress" data-clipboard-text="0x{{ $address }}" name="CopyAddress">{{ __('transaction.copy_button') }}</button></p>
<p id="txStatus_3">Transaction status: {{ $statusText }} [{{ $statusCode }}], renewed on {{ $statusDate }}</p>
<div class="center-block" id="qrcode" style="width: 200px; margin-top: 2em; margin-bottom: 2em;"></div>
<a class="btn btn-success btn-block btn-green" id="btnSupport" href="mailto:support@cryptany.io?subject=Payment button support">{{ __('transaction.support_text') }}</a>
</div>
</div>
</div>
</div>
@endsection

@section('add-js')
<script>
var walletAddress = '{{ $address }}';
var walletId = '{{ $walletHash }}';
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
<script src="/js/transaction.js"></script>
@endsection