@extends('mails.template_text')

@section('title')
    Congratulations! Your Order Was Submitted
@endsection

@section('subject')
    Congratulations! Your Order Was Submitted
@endsection

@section('body')

    Here is the details of your order:
    {{ $orderInfo }}

    Cheers!

@endsection