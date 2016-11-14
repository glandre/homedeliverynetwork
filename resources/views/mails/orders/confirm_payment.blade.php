@extends('mails.template')

@section('title')
    Notification: Payment Received
@endsection

@section('subject')
    Notification: Payment Received
@endsection

@section('body')

    <p>
        The payment of the following order was successfully received:
    </p>

    <p>
        {{ $orderInfo }}
    </p>

    <p>Cheers!</p>

@endsection