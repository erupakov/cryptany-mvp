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
@endsection
@section('add-js')
@endsection