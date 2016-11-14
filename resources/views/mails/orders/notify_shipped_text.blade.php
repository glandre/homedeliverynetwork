@extends('mails.template_text')

@section('title')
    Notification: Order Shipped
@endsection

@section('subject')
    Notification: Order Shipped
@endsection

@section('body')

    The following order was just shipped:
    {{ $orderInfo }}

    Cheers!

@endsection