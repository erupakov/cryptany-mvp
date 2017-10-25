@extends('layouts.app')

@section('content')
	<h3>Register new merchant: Success</h3>
    <p>Please check your email and click verification link to activate your merchant account.</p>
@endsection
@section('add-js')
<script>
  ga('send', 'event', {
    eventCategory: 'Merchant',
    eventAction: 'registered'
  });
</script>
@endsection