@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-header center-block">
                <h1>New merchant verification: Success</h1>
                <div class="alert alert-success" role="alert">
                <p>Your verification was successful.</p>
                <p style="margin-bottom: 2em;">
                Now your can proceed and create buy now button to start receiving cryptopayments right away!
                </p>
                <a class="btn btn-primary" href="{{ url('/merchant/unibutton') }}">Create buybutton now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add-js')
@endsection