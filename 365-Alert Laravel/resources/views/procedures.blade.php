{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Procedures')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/procedures.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
<main>
    <section class="emergency">
        <div id="emergency">
            <img src="{{URL::asset('pictures/Emergency.jpg')}}" alt="">
        </div>
    </section>

    <section class="danger">
        <div id="danger">
            <h2>Danger levels</h2>
            <br>
            <p>Permanent provision of measured water levels
                and forecasts of watercourses in Luxembourg,
                as well as additional information during flood
                warning times.</p>
        </div>

        <div class="icon-block icon-alert-red">
            <h3>Extreme danger</h3>
            <br>
            <p>The flood prediction center is in alert
                status. Flood reports are updated at
                least once a day or in case of a change
                of situation. Water levels are updated
                up to every 15 minutes.</p>
        </div>
    </section>
</main>
@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection