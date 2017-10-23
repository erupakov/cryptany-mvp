@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<img class="img-responsive center-block" src="/img/transaction_icon.png" alt="transaction logo"/>
<h3>Please, enter your email to get receipt for transaction</h3>

<form method="post" action="{{ url('/payment/new') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputEmail">Your email:</label>
    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email address" required>
        @if ($errors->get('inputEmail'))
            <p class="text-danger">
				@php echo $errors->get('inputEmail')[0];
				@endphp
			</p>
        @endif    
  </div>
	<input type="hidden" name="m_s" value="{{ $m_s }}">
	<input type="hidden" name="i_c" value="{{ $i_c }}">
	<input type="hidden" name="i_n" value="{{ $i_n }}">
	<input type="hidden" name="i_p" value="{{ $i_p }}">
  <button class="btn btn-success btn-block btn-green" type="submit" id="btnSubmit">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection

@section('add-js')
@endsection