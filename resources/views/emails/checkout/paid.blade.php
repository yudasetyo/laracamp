@component('mail::message')
# Your Transaction Has Been Confirmed

Hi {{ $checkout->User->name }}
<br>
Your transaction has been completed, now you can enjoy benefit by join {{ $checkout->Camp->title }} camp

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
