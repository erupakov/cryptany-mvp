<p>Dear merchant!</p>

<p>Thank you for registering in the Cryptany payment gateway system!</p>

<p>
Please click here to verify your account: <a href="{{ $link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email) }}">{{ $link }}</a>
</p>

<p>Cryptany is now completing a series of required verifications before confirming your registration. When this is
complete, you will get an email from Cryptany with your Merchant ID and Merchant Pass Code.</p>

Thanks,<br>
the Cryptany team
