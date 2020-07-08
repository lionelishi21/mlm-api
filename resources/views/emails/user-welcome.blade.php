@component('mail::message')
# Welcome

Hello {{$details['name']}}, and thank you for your purchase! Please download your
MCC eBook <a href="https://majesticaring.com/download-ebook/{{$details['token']}}">(download link here)</a>, and file it in a safe, accessible place.

To access your Affiliate Back Office, go to <a href="https://majesticares.com/login">majesticares.com</a>, and "Login" using
your email and the temporary password: "enter4now",
and be sure to change your password once you are logged in.

On behalf of MCC, we wholeheartedly, Welcome You!

Thanks,
Majestic Cares Community (MCC)
@endcomponent
