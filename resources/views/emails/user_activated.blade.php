@component('mail::message')
# Congratulations! Your merchant was activated by Cryptany team.

Hi {{ $user->contactPerson }}! We've verified your merchant application form and activated it. Feel free to try Cryptany's premium products at:

* Magento 1.x plugin:
* Buy button:
* Android wallet app:

##Details:

Merchant name: {{ $user->merchantName }}

Merchant ID: {{ $user->hash }}

Merchant secret: {{ $user->secret }}

Project URL: {{ $user->projectURL }}

Thanks,<br>
Cryptany team
@endcomponent
