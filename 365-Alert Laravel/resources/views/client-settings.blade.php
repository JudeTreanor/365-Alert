{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Client Settings')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/client-settings.css') }}">
@endsection
{{-- Main Content Section --}}
@section('content')
    <main>
        <img src="{{ URL::asset('../css/logos/User_WhiteStroke_Circle.svg') }}" alt="">
        <h1 id="client">Client Settings</h1>

        <section id="settings-bar">


        </section>
    </main>
@endsection
