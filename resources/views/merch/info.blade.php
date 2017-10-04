@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-header center-block">
                <h1>Review merchant</h1>
                <div class="alert alert-success" role="alert">
                <p>Please review merchant and activate it if you found it suitable</p>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">New merchant</h3>
  </div>
  <div class="panel-body">
  <form method="post" action="/merchant/register">
  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item"><strong>Merchant name:</strong>{{ $user->merchantName }}</li>
    <li class="list-group-item"><strong>URL:</strong>{{ $user->projectURL }}</li>
    <li class="list-group-item"><strong>Wallet address:</strong>{{ $user->walletAddress }}</li>
    <li class="list-group-item"><strong>Contact email:</strong>{{ $user->email }}</li>
    <li class="list-group-item"><strong>Contact person:</strong>{{ $user->contactPerson }}</li>
  </ul>
  <input type="hidden" name="hash" value="{{ $user->hash }}">
  <button type="submit" value="submit" class="btn btn-lg btn-success">Approve</button>
  </form>
</div>
</div>

               </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add-js')
@endsection