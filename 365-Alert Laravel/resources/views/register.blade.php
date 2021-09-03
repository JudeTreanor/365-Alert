{{-- Extending the template --}}
@extends('layouts.simpletemplate')

{{-- Setting the Page title --}}
@section('title', 'Register')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/register.css'); }}">
@endsection
<body>


{{-- Main Content Section --}}
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/login.css'); }}">
<img src="{{URL::asset('../css/logos/house.svg')}}" class="icon_365" alt="">
<h3>Sign up</h3>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  action="" method="post" id="register" >
    <!-- Security token for Laravel : Mandatory in forms -->
    @csrf
    <input type="text" name="firstname" placeholder="First name" class="input-first"><br>
    <input type="text" name="lastname" placeholder="Last name" class="input-last"><br>
    <input type="email" name="email" placeholder="Email" class="input-email"><br>
    <input type="password" name="password" placeholder="Password" class="input-password" ><br>
    <input type="password" name="password_confirmation" placeholder="Confirm password" class="input-password"><br>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input type="number" name="contact" placeholder="Phone number"class="input-phone"><br>
    <div class="container_legal">
        <input type="checkbox" name="checkbox" value="check" id="agree" />
        <p>I have read and accept the <span><a href="terms"> Terms and Conditions</a></span></p>
    </div>
    <input type="submit" value="Register" id="submit">
</form>
<div id="log">
    <p>Already a member?<span><a href="login">Login Here</a></span></p>
</div>
@endsection

</body>


{{-- Footer Section --}}
@section('footer')


@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
