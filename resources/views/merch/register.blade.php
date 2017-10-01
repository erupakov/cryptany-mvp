@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
<div class="page-header center-block">
<h1>Register new merchant</h1>
<div class="alert alert-warning" role="alert">
В настоящий момент сервис Cryptany позволяет принимать платежи в одной криптовалюте - Ether.
Если у вас еще нет кошелька для приема Ether, получите его по адресу <a href="https://github.com/ethereum/mist/releases">https://github.com/ethereum/mist/releases</a>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">To register new merchant please fill in fields below</h3>
  </div>
  <div class="panel-body">
  <form method="post" action="/merchant/register">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputProjectName">Project name</label>
    <input type="text" class="form-control" id="inputProjectName" name="inputProjectName" placeholder="Project name" required>
        @if ($errors->get('inputProjectName'))
            <p class="text-danger">
				@php echo $errors->get('inputProjectName')[0];
				@endphp
			</p>
        @endif    
  </div>
  <div class="form-group">
    <label for="inputProjectWeb">Project Web URL</label>
    <input type="text" class="form-control" id="inputProjectWeb" name="inputProjectWeb" placeholder="Project web URL" required>
        @if ($errors->get('inputProjectWeb'))
            <p class="text-danger">
				@php echo $errors->get('inputProjectWeb')[0];
				@endphp
			</p>
        @endif
  </div>
  <div class="form-group">
    <label for="contactEmail">Contact email</label>
    <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Contact email" required>
        @if ($errors->get('contactEmail'))
            <p class="text-danger">
				@php echo $errors->get('contactEmail')[0];
				@endphp
			</p>
        @endif
  </div>
  <div class="form-group">
    <label for="inputFamilyName">Your family name</label>
    <input type="text" class="form-control" id="inputFamilyName" name="inputFamilyName" placeholder="Family name" required>
        @if ($errors->get('inputFamilyName'))
            <p class="text-danger">
				@php echo $errors->get('inputFamilyName')[0];
				@endphp
			</p>
        @endif
  </div>
  <div class="form-group">
    <label for="inputFirstName">Your first name</label>
    <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First name" required>
        @if ($errors->get('inputFirstName'))
            <p class="text-danger">
				@php echo $errors->get('inputFirstName')[0];
				@endphp
			</p>
        @endif
  </div>
  <div class="form-group">
  <p class="help-block">Please select which cryptocurrencies you want to operate with?</p>
  <div class="checkbox">
    <label class="checkbox-inline">
      <input type="checkbox" name="currencyEth" checked required> Ethereum
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="currencyBTC" disabled value="0"> Bitcoin
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="currencyWVS" disabled value="0"> Waves
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="currencyDASH" disabled value="0"> Dash
    </label>
</div>
</div>
<div class="form-group">
{!! Recaptcha::render() !!}
</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
  </div>
</div>
</div>
</div></div></div>
@endsection
@section('add-js')
@endsection