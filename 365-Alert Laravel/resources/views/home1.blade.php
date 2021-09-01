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

<h1>THIS IS OUR HOME</h1>
<section>
    <img src="{{URL::asset('../pictures/Home_Register_Cropped.jpg')}}" alt="">

    <ul>
        <li>
            <img src="" alt="">
            <img src="{{URL::asset('../pictures/Flood_Alert_Email_Main.svg')}}" alt=""><br>
            <span>Receive an email alert <br> with possible floods</span>
            <img src="{{URL::asset('../pictures/Check_Water_Level_Main.svg')}}" alt=""><br>
            <span>Check the water level <br>of any location</span>
            <img src="{{URL::asset('../pictures/Procedures_Main.svg')}}" alt=""><br>
            <span>Follow important safest <br>procedures</span>


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
