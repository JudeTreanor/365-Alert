{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Register')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/register.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
<img src="{{URL::asset('../css/logos/house.svg')}}" class="icon_365" alt="">
<h3>Sign up</h3>


{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form  action="" method="post" id="register" >
    <!-- Security token for Laravel : Mandatory in forms -->
    @csrf
    {{-- @if ($errors->any())
    @foreach ($errors->all() as $error) --}}
    <input type="text" name="firstname" placeholder="First name" class="input-first"><br>
    <p>{{ $errors->first('firstname') }}</p>
    <input type="text" name="lastname" placeholder="Last name" class="input-last"><br>
    <p>{{ $errors->first('lastname') }}</p>
    <input type="email" name="email" placeholder="Email" class="input-email"><br>
    <p>{{ $errors->first('email') }}</p>
    <input type="password" name="password" placeholder="Password" class="input-password" ><br>
    <p>{{ $errors->first('password') }}</p>
    <input type="password" name="password_confirmation" placeholder="Confirm password" class="input-password"><br>
    <p>{{ $errors->first('password-confirmation') }}</p>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input type="number" name="contact" placeholder="Phone number"class="input-phone"><br>
    <p>{{ $errors->first('contact') }}</p>
    <div class="container_legal">
        <input type="checkbox" name="checkbox" value="check" id="agree" />
        <p>I have read and accept the <span><a href="terms"> Terms and Conditions</a></span></p>
    </div>
    <input type="submit" value="Register" id="submit">
    {{-- @endforeach
    @endif --}}
</form>
<div id="log">
    <p>Already a member?<span><a href="login">Login Here</a></span></p>
</div>
@endsection

{{-- Footer Section --}}
@section('footer')


@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
