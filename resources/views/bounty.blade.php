@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <div class="page-header center-block">
                <h1>Bounty section</h1>
                <p>Here we'll describe our bounty policy</p>
<div id='cryptany-button-128634845'></div><script>(function(){var div = document.getElementById('cryptany-button-128634845');var b = document.createElement('a');b.href='https://mvp.cryptany.io/payment/new?m_s=W0cK2NKu&i_p=100&i_c=RUR&i_i=&i_n=HUY';b.innerText='IDITE NA HUY';b.setAttribute('style','font-family: Helvetica, arial; font-weight: bold; border: none; text-align: center; text-decoration: none; display: inline-block; box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2), 0 8px 10px 0 rgba(0,0,0,0.19); padding: 1em;background-color: #2dbad2; color: white;font-size: 20px; border-radius: 6px;');div.appendChild(b);})();</script>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add-js')
<script>
$(document).ready(function() {
    $('ul.navbar-nav li#nav-li-bounty').addClass('active');
});    
</script>
@endsection