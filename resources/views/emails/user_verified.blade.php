@component('mail::message')
# New merchant was registered

You need to approve it by visiting the following link:

@component('mail::button', ['url' => 'https://mvp.brusnika.biz/merchant/updateStatus87561?hash={{ $user->hash }}'])
Review merchant
@endcomponent

##Details:

Merchant name: {{ $user->merchantName }}

Project URL: {{ $user->projectURL }}

Wallet address: {{ $user->walletAddress }}

Contact email: {{ $user->email }}

Contact person: {{ $user->contactPerson }}

Thanks,<br>
Cryptany team
@endcomponent
