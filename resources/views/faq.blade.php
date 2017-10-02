@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>FAQ section</h1>
<p>We'll provide our investors with clear and helpful answers to possible questions here</p>
<div id='cryptany-button-1817047764'></div><script>(function(){var div = document.getElementById('cryptany-button-1817047764');var b = document.createElement('a');b.href='https://mvp.brusnika.biz/payment/new?m_s=RrhfAaVAw7rh&i_p=100&i_c=USD&i_i=112&i_n=Baz';b.innerText='Buy with Ether';b.setAttribute('style','font-family: Helvetica, arial; font-weight: bold; border: none; text-align: center; text-decoration: none; display: inline-block; box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2), 0 8px 10px 0 rgba(0,0,0,0.19); padding: 1em;background-color: #ff0000; color: white;font-size: 16px; border-radius: 5px;');div.appendChild(b);})();</script>
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