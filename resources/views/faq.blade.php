@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>FAQ section</h1>
<p>We'll provide our investors with clear and helpful answers to possible questions here</p>
</div>
</div></div></div>
@endsection
@section('add-js')
<script>
$(document).ready(function() {
    $('ul.navbar-nav li#nav-li-faq').addClass('active');
});    
</script>
@endsection