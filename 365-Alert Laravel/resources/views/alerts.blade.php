{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Alerts')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/alerts.css') }}">
@endsection

{{-- Main Content Section --}}
@section('content')
<section class="flood-map">
    <h1>Luxembourg Flood Map</h1>
    <div class="map">
        <img src="{{URL::asset('pictures/Map2.PNG')}}" alt="">
    </div>
</section>
<h2 class="alerts_title">Alerts</h2>
<section>
    @foreach ($alerts as $alert)
    <article class="alert_container">
        <div id="sidebar_color"></div>
        <img src="{{URL::asset('pictures/Alert_Warning_Red.svg')}}" alt="">
        <div class="alert">
            <h3 id="location">{{$alert->location}}</h3>
            <p id="alert_type">{{$alert->type}}</p>
            <p id="description">Description {{$alert->description}}</p>
            <p id="river">River: {{$alert->river}}</p>
            <p id="water_level">Water Level: {{$alert->water_level . " cm"}}</p>
            <p id="updated">Last updated: {{$alert->updated_at}}</p>
            <div class="buttons_container">
                <button type="submit">Add To List</button>
            </div>
        </div>
        
    </article>
    
    
    @endforeach
</section>
@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script>
        $(function (){
            $('form').submit(function(e) {
                e.preventDefault();

                // AJAX call
                $.ajax({
                    url: 'AlertsController.php',
                    method: 'post',
                    data: $("form").serialize(),
                    dataType: 'json'
                })

                .done(function(result){
                    console.log(result);
                })
                .fail(function(result) {
                        console.log('AJAX FAILED');
                })
            })
        })
    </script>
@endsection
