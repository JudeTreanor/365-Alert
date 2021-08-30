{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Client Settings')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
@endsection
{{-- Main Content Section --}}
@section('content')
    <img src="{{ URL::asset('../css/logos/User_WhiteStroke_Circle.svg') }}" alt="">
    <h3>Client Settings</h3>
@endsection
