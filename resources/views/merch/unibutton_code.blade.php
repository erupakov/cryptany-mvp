@extends('layouts.app')

@section('content')
<h3>Your payment button is ready</h3>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Please copy the HTML button code below and insert it into your site between &lt;body&gt; tags</h3>
    </div>
    <div class="panel-body">
    <textarea name="formButtonCode" id="formButtonCode" cols="80" rows="10">
    {{ $buttonCode }}
    </textarea>
	<div class="center-block">
    <button class="btn btn-success" id="btnCopyAddress" data-clipboard-target="#formButtonCode" name="CopyAddress">Copy code to clipboard</button>
	</div>
    </div>
</div>
@endsection
@section('add-js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
<script>
$(document).ready(function() {
    new Clipboard('#btnCopyAddress');
	ga('send', 'event', {
	    eventCategory: 'Button',
	    eventAction: 'created'
	});
});
</script>
@endsection