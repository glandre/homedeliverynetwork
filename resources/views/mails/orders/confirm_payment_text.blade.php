@extends('mails.template_text')

@section('title')
    Notification: Payment Received
@endsection

@section('subject')
    Notification: Payment Received
@endsection

@section('body')

    The payment of the following order was successfully received:
    {{ $orderInfo }}

    Cheers!

@endsection