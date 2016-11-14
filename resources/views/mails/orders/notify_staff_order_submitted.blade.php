@extends('mails.template')

@section('title')
    Notification: Order Submitted
@endsection

@section('subject')
    Notification: Order Submitted
@endsection

@section('body')

    <p>
        A new Oder was submitted:
    </p>

    <p>
        {{ $orderInfo }}
    </p>

    <p>Cheers!</p>

@endsection