@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-header center-block">
                <h1>New merchant verification: Success</h1>
                <div class="alert alert-success" role="alert">
                <p>Your have successfully confirmed your email address</p>
                <p style="margin-bottom: 2em;">
After we complete all required checks we will confirm your registration and send you Merchant ID and Merchant Secret.
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add-js')
@endsection