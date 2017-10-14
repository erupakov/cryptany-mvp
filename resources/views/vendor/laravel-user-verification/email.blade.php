<p>Dear merchant!</p>

<p>Thank you for registering in the Cryptany system!</p>

<p>
Please click here to verify your account: <a href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}">{{ $link }}</a>
</p>

<p>After we complete all required checks we will confirm your registration and send you Merchant ID and Merchant Secret.</p>

Thanks,<br>
Cryptany team
