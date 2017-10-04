@component('mail::message')

Thank you for registering the new merchant in the Cryptany system!

Please click here to verify your account

@component('mail::button', ['url' => route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) ])
Click here to verify your account
@endcomponent

After we complete all required checks we will confirm your registration and send you Merchant ID and Merchant Secret.

Thanks,<br>
Cryptany team
@endcomponent
