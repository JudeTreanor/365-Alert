{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Reset Password')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/reset-password.css'); }}">
@endsection
{{-- Main Content Section --}}
@section('content')
<img src="{{URL::asset('../css/logos/house.svg')}}" alt="">

<h3>Reset password</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('password.request', ['token' => $token]) }}" method="post" id="PassReset" >
    @csrf
    <input type="hidden" name="token" value="{{$token}}">
    <input type="password" name="password" placeholder="New password" class="input-email" onfocus="this.placeholder=''" onblur="this.placeholder='email'">
    <input type="password" name="password_confirmation" placeholder="Confirm password" class="input-password"><br>


    <input type="submit" value="Send" id="send4">
    @endsection
{{-- Footer Section --}}
@section('footer')


@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
