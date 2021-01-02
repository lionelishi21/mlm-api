@component('mail::message')
# Welcome

Hello {{$details['name']}}, and thank you for your purchase! Please download your
MCC eBook <a href="https://majesticaring.com/download-ebook/{{$details['token']}}">(download link here)</a>, and file it in a safe, accessible place.

To access your Affiliate Back Office, go to <a href="https://app.majesticares.com">majesticares.com</a>, and "Login" using
your email and the temporary password: "enter4now",
and be sure to change your password once you are logged in.

We like to keep all of our affiliates updated with MCC news, so if you wish to be on MCC's email list, please contact us at admin@majesticares.com

On behalf of MCC, we wholeheartedly, Welcome You!

Thanks,
Majestic Cares Community (MCC)
@endcomponent
