@extends('mails.template_text')

@section('title')
    Registration Rejected
@endsection

@section('subject')
    Your Registration is Rejected
@endsection

@section('body')

    Dear {{$user->name}},

    Your registration was rejected. Please take a look at the reason{{count($reasons) > 1 ? 's' : ''}}:
    {{ collect($reasons)->reduce(function ($carry, $item) { return (empty($carry)) ? $item : $carry . "\n" . $item; }) }}
    Please, consider this instruction when you resubmit your registration.

    Cheers!

@endsection