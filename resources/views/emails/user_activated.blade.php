<p>Dear merchant,</p>

<p>We have successfully activated your merchant account.</p>

<p>Details:</p>

<ul>
<li>Merchant name: {{ $user->merchantName }}</li>
<li>Merchant ID: {{ $user->hash }}</li>
<li>Merchant secret: {{ $user->secret }}</li>
<li>Project URL: {{ $user->projectURL }}</li>
</ul>

<p>Please open <a href="https://mvp.brusnika.biz/merchant/unibutton">this link</a> to create the new payment button.</p>

Thanks,<br>
Cryptany team
