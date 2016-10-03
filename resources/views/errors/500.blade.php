@extends('layouts.error')
@section('title')
    Internal Server Error
@endsection
@section('message')
    Why not try refreshing your page? or you can contact
    <a href="mailto:{{config('app.email')}}" class="text-white text-uppercase"><b>support</b></a>
@endsection