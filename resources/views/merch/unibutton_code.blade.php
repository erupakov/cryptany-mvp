@extends('layouts.app')

@section('content')
        <main class="content">
            <div class="inner">
                <div class="breadcrumbs">
                    <a href="">Back</a>
                </div>

                <h2>Your payment button is ready</h2>
                <p class="grayed">Please copy the HTML button code below and insert it into your site between &lt;body&gt; tags</p>
                <div class="formrow fstyled">
                    <textarea name="formButtonCode" id="formButtonCode" cols="80" rows="10">{{ $buttonCode }}</textarea>
                </div>
                <button class="btn-green" id="btnCopyAddress" data-clipboard-target="#formButtonCode" name="CopyAddress">Copy code to clipboard</button>
            </div>
        </main>
        <!-- .content -->
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