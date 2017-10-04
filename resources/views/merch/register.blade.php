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
    <h3 class="panel-title">Please provide the following information to register a new merchant</h3>
  </div>
  <div class="panel-body">
  <form method="post" action="/merchant/register">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="inputProjectName">Merchant Name *</label>
    <input type="text" class="form-control" id="inputProjectName" name="inputProjectName" placeholder="Merchant name" required>
        @if ($errors->get('inputProjectName'))
            <p class="text-danger">
				@php echo $errors->get('inputProjectName')[0];
				@endphp
			</p>
        @endif    
  </div>
  <div class="form-group">
    <label for="inputProjectWeb">URL *</label>
    <input type="text" class="form-control" id="inputProjectWeb" name="inputProjectWeb" placeholder="Project web URL" required>
        @if ($errors->get('inputProjectWeb'))
            <p class="text-danger">
				@php echo $errors->get('inputProjectWeb')[0];
				@endphp
			</p>
        @endif
  </div>
  <div class="form-group">
    <label for="inputWalletAddress">Wallet address *</label>
    <input type="text" class="form-control" id="inputWalletAddress" name="inputWalletAddress" placeholder="Wallet address" required>
        @if ($errors->get('inputWalletAddress'))
            <p class="text-danger">
				@php echo $errors->get('inputWalletAddress')[0];
				@endphp
			</p>
        @endif    
  </div>
  <div class="form-group">
    <label for="contactEmail">Contact email *</label>
    <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Contact email" required>
        @if ($errors->get('contactEmail'))
            <p class="text-danger">
				@php echo $errors->get('contactEmail')[0];
				@endphp
			</p>
        @endif
  </div>
  <div class="form-group">
    <label for="inputFirstName">Contact person *</label>
    <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First name" required>
        @if ($errors->get('inputFirstName'))
            <p class="text-danger">
				@php echo $errors->get('inputFirstName')[0];
				@endphp
			</p>
        @endif
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