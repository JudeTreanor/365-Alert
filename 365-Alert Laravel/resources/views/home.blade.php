
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
</section>

<section class="my-alerts">
    <div class="icon-block icon-alert-red">
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
    </div>


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

    <h2>My Alerts</h2>
</section>
@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection

