@extends('mails.template_text')

@section('title')
    Notification: Order Submitted
@endsection

@section('subject')
    Notification: Order Submitted
@endsection

@section('body')

    A new Oder was submitted:
    {{ $orderInfo }}

    Cheers!

@endsection