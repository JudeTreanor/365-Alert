{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Home')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/home1.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')


<section class="home">
    <div class="register-box">
        <p class="intro-text">Be alert 365 days if potential flood appears</p>
        <p>
            <a class="btn btn-register" href="{{ route('register') }}">Sign up</a>
        </p>
        <p>
            <a class="btn btn-login" href="{{ route('login') }}">Login</a>
        </p>
    </div>
    <ul>
        <li>
            <img src="" alt="">
            <img class="img" src="{{URL::asset('../pictures/Flood_Alert_Email_Main.svg')}}" id="img1" alt=""><br>
            <span>Receive an email alert <br> with possible floods</span>
            <img class="img" src="{{URL::asset('../pictures/Check_Water_Level_Main.svg')}}" id="img2" alt=""><br>
            <span>Check the water level <br>of any location</span>
            <img class="img" src="{{URL::asset('../pictures/Procedures_Main.svg')}}" id="img3" alt=""><br>
            <span id="procedures">Follow important safest <br>procedures</span>
        </li>
    </ul>
</section>


@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
