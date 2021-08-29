{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Forgot Password')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/forgot-password.css'); }}">
@endsection
{{-- Main Content Section --}}
@section('content')
<img src="{{URL::asset('../css/logos/house.svg')}}" alt="">
<h3>Forgot password</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="" method="post" id="PassForget" >
    @csrf
    <input type="email" name="email" placeholder="Email" class="input-email" onfocus="this.placeholder=''"
    onblur="this.placeholder='enter your text'">

    <input type="submit" value="Send" id="send1">
    @endsection
{{-- Footer Section --}}
@section('footer')


@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
