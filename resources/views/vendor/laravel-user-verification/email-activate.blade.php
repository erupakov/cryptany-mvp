@component('mail::message')

Thank you for registering the new merchant in the Cryptany system!

Please click here to verify your account

@component('mail::button', ['url' => route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) ])
Click here to verify your account
@endcomponent

## Please find your details below

Merchant ID: {{ $user->hash }}

Merchant Secret: {{ $user->secret }}

Name: {{ $user->merchantName }}

Wallet address: {{ $user->walletAddress }}

Project URL: {{ $user->projectURL }}

Contact person: {{ $user->contactPerson }}

Thanks,<br>
Cryptany team
@endcomponent
