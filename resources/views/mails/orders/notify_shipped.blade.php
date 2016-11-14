@extends('mails.template')

@section('title')
    Notification: Order Shipped
@endsection

@section('subject')
    Notification: Order Shipped
@endsection

@section('body')

    <p>
        The following order was just shipped:
    </p>

    <p>
        {{ $orderInfo }}
    </p>

    <p>Cheers!</p>

@endsection