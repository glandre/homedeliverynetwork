@extends('mails.template_text')

@section('title')
    Registration
@endsection

@section('subject')
    Welcome to {{ config('app.name') }}
@endsection

@section('body')
This e-mail is a confirmation of your registration. Our team will contact soon.In the meantime, feel free to surf our web store.
{{ url('/store') }}

Cheers!
@endsection