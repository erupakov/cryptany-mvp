@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>Blog section</h1>
<p>Here should be pasted all of our blog articles</p>
</div>
</div></div></div>
@endsection
@section('add-js')
<script>
$(document).ready(function() {
    $('ul.navbar-nav li#nav-li-blog').addClass('active');
});    
</script>
@endsection