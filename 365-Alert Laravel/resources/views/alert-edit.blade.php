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
<form action="" method="post">
    @csrf
    <label for="water_caution_level">Caution Alert Level</label>
    <input type="text" name="water_caution_level" value="{{$alert->water_caution_level}}"><br>
    <label for="water_prealert_level">Pre-Alert Level</label>
    <input type="text" name="water_prealert_level" value="{{$alert->water_prealert_level}}"><br>
    <label for="water_alert_level">Alert Level</label>
    <input type="text" name="water_alert_level" value="{{$alert->water_alert_level}}"><br>
    <input type="submit" value="Submit Modifications">
</form>
@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection