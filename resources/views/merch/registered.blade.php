@extends('layouts.app')

@section('content')
        <main class="content">
            <div class="inner">
                <div class="breadcrumbs">
                    <a href="">Back</a>
                </div>

                <h2>Register new merchant: <span class="hl">Success</span></h2>
                <p class="grayed">Please check your email and click verification link to activate your merchant account</p>
            </div>
        </main>
        <!-- .content -->
@endsection
@section('add-js')
<script>
  ga('send', 'event', {
    eventCategory: 'Merchant',
    eventAction: 'registered'
  });
</script>
@endsection