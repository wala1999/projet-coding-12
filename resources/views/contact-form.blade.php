@component('mail::message')
# Introduction

Vous avez recu un mail de la part de {{$data['name']}} 

Email:<br>
{{$data['email']}}

Message:
{{$data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
