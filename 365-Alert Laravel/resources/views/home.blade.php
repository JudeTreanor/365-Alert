{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Home')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/home.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
<section class="flood-map">
    <h2>Luxembourg Flood Map</h2>
    <div class="map">
        <img src="{{URL::asset('pictures/Map2.PNG')}}" alt="">
    </div>
</section>

<section class="my-alerts">
    <h2>My Alerts</h2>
    <div class="icon-block icon-alert-red">
        <div class="red-alert">
            <h3>Echternach</h3>
            <br>
            <p id="extreme">Extreme Danger</p>
            <p>The flood predicition center is in</p>
        </div>
        <div class="red-buttons">
            <button type="submit">Water Chart</button>
            <button type="submit">Comments</button>
            <button type="submit">Add To List</button>
        </div>
    </div>

    <div class="icon-block icon-alert-orange">
        <div class="orange-alert">
            <h3>Bissen</h3>
            <br>
            <p id="extreme">Danger</p>
            <p>The flood predicition center is in</p>
        </div>
        <div class="orange-buttons">
            <button type="submit">Water Chart</button>
            <button type="submit">Comments</button>
            <button type="submit">Add To List</button>
        </div>
    </div>

    <div class="icon-block icon-alert-yellow">
        <div class="yellow-alert">
            <h3>Bissen</h3>
            <br>
            <p id="extreme">Potential Danger</p>
            <p>The flood predicition center is in</p>
        </div>
        <div class="yellow-buttons">
            <button type="submit">Water Chart</button>
            <button type="submit">Comments</button>
            <button type="submit">Add To List</button>
        </div>
    </div>

</section>
<!-- <section class="my-alerts">
<h2>My Alerts</h2>
<article class="alert">
    <img id="danger" src="../pictures/Alert_Warning_Red.svg" alt="">
    <div class="red-alert">
        <h3>Echternach</h3>
        <br>
        <p>Extreme Danger</p>
        <p>The flood predicition center is in</p>
    </div>
    <div class="red-buttons">
        <button type="submit">Water Chart</button>
        <button type="submit">Comments</button>
        <button type="submit">Add To List</button>
    </div>
</article>
</section> -->

<section class="need-help">
    <h2>Need Help?</h2>
    <div class="container">
        <img src="{{URL::asset('pictures/CGDIS_3 copie.jpg')}}" alt="">
        <div id="bottom-text">
            <div class="bottom-left">112</div>
            <div class="bottom-center"><a href="url" style="color:white">WWW.112.PUBLIC.LU</a></div>
            <div class="bottom-right">GOUVALERT</div>
        </div>
    </div>

</section>
@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection