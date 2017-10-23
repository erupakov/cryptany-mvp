@extends('layouts.app')

@section('content')
<main class="content">
            <div class="inner">
                <div class="breadcrumbs">
                    <a href="browser.history.back();">Back</a>
                </div>

                <h2>Register as merchant</h2>
                <p class="grayed">Currently the Cryptany payment gateway only takes payment in Ethers.
                <br>If you do not have a wallet for this cryptocurrency, you can get one <a href="https://www.mytherwallet.com">here</a>.</p>

                <form method="post" action="{{ url('/merchant/register') }}" class="fstyled formnew">
                    <p class="info"><span class="ipd">The following information is required to register as a merchant in the Cryptany payment system:</span></p>
                    <input type="text" placeholder="Merchant Name" id="inputProjectName" name="inputProjectName" required value="{{ old('inputProjectName') }}">
                    @if ($errors->get('inputProjectName'))
                    <p class="text-danger">
				        @php echo $errors->get('inputProjectName')[0];
				        @endphp
			        </p>
                    @endif
                    <input type="text" placeholder="URL" id="inputProjectWeb" name="inputProjectWeb" required value="{{ old('inputProjectWeb') }}">
                    @if ($errors->get('inputProjectWeb'))
                    <p class="text-danger">
				        @php echo $errors->get('inputProjectWeb')[0];
				        @endphp
			        </p>
                    @endif
                    <input type="text" placeholder="Wallet address" id="inputWalletAddress" name="inputWalletAddress" required value="{{ old('inputWalletAddress') }}">
                    @if ($errors->get('inputWalletAddress'))
                    <p class="text-danger">
				        @php echo $errors->get('inputWalletAddress')[0];
				        @endphp
			        </p>
                    @endif
                    <input type="email" placeholder="Contact email" id="contactEmail" name="contactEmail" required value="{{ old('contactEmail') }}">
                    @if ($errors->get('contactEmail'))
                    <p class="text-danger">
				        @php echo $errors->get('contactEmail')[0];
				        @endphp
			        </p>
                    @endif
                    <input type="text" name="name" placeholder="Contact person" id="inputFirstName" name="inputFirstName" required value="{{ old('inputFirstName') }}">
                    @if ($errors->get('inputFirstName'))
                    <p class="text-danger">
				        @php echo $errors->get('inputFirstName')[0];
				        @endphp
			        </p>
                    @endif                    
                    <div class="check">
                        <input type="checkbox" name="read"><span class="small grayed">I have read and agree with the <a href="#">Cryptant Terms of Use</a></span><br>
                    </div>
                    {!! Recaptcha::render() !!}
                    <button type="submit" class="btn-green">Submit</button>
                </form>
            </div>
        </main>
        <!-- .content -->

@endsection
@section('add-js')
@endsection