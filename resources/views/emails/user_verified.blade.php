<h3>New merchant was registered</h3>

You need to approve it by visiting the following link:

<a href="{{ $url }}">{{ $url }}</a>

<h4>Details:</h4>
<ul>
<li>Merchant name: {{ $user->merchantName }}</li>
<li>Project URL: {{ $user->projectURL }}</li>
<li>Wallet address: {{ $user->walletAddress }}</li>
<li>Contact email: {{ $user->email }}</li>
<li>Contact person: {{ $user->contactPerson }}</li>
</ul>

Thanks,<br>
Cryptany team
