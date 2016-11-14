@extends('mails.template')

@section('title')
    Congratulations! Your Order Was Submitted
@endsection

@section('subject')
    Congratulations! Your Order Was Submitted
@endsection

@section('body')

    <p>
        Here is the details of your order:
    </p>

    <p>
        {{ $orderInfo }}
    </p>

    <p>Cheers!</p>

@endsection