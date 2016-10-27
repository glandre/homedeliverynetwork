@extends('mails.template')

@section('title')
    Registration
@endsection

@section('subject')
    Welcome to {{ config('app.name') }}
@endsection

@section('body')

    <p>
        This e-mail is a confirmation of your registration. Our team will contact soon.
        In the meantime, feel free to surf our <a href="{{ url('/store') }}">web store</a>
    </p>

    <p>Cheers!</p>
    
@endsection