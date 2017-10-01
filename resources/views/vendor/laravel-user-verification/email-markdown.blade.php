@component('mail::message')

One last step left!

@component('mail::button', ['url' => route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) ])
Click here to verify your account
@endcomponent

## Please find your details below
Merchant ID: {{ $user->hash }}
Merchant Secret: {{ $user->secret }}
Name: {{ $user->firstName }} {{ $user->familyName }}
Project: {{ $user->projectName }}
Project URL: {{ $user->projectURL }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
