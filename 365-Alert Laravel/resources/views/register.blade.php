{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Register')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/register.css'); }}">
@endsection
<body>


{{-- Main Content Section --}}
@section('content')
<h3>Register</h3>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="post" id="register" >
    <!-- Security token for Laravel : Mandatory in forms -->
    @csrf
    <input type="text" name="username" placeholder="Username"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm password"><br>
    <input type="number" name="contact" placeholder="Phone number"><br>

    <div id="checkbox">
    <input type="checkbox" name="checkbox" value="check" id="agree" />
    <p> I have read and accept the <span><a href="terms"> Terms and Conditions</a></span></p>
    </div>
    <input type="submit" value="Register" id="submit">

</form>
<div id="log">
    <p>Already a member?<span><a href="login">Login Here  </a></span></p>
</div>
@endsection

</body>


{{-- Footer Section --}}
@section('footer')


@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
