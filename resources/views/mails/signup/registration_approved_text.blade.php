@extends('mails.template_text')

@section('title')
    Registration Approved
@endsection

@section('subject')
    Your Registration is Approved
@endsection

@section('body')
Dear {{$user->name}},

Your registration is now approved. You can start shopping.

Cheers!
@endsection