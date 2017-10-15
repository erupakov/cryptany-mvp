<p>Dear merchant,</p>

<p>Your merchant account has been successfully activated.</p>

<p>Details:</p>

<ul>
<li>Merchant name: {{ $user->merchantName }}</li>
<li>Merchant ID: {{ $user->hash }}</li>
<li>Merchant Pass Code: {{ $user->secret }}</li>
<li>Project URL: {{ $user->projectURL }}</li>
</ul>

<p>Please open this link to create a Cryptopayment button for your website:<a href="{{ url('/merchant/unibutton') }}">Payment button</a></p>

Thanks,<br>
the Cryptany team
