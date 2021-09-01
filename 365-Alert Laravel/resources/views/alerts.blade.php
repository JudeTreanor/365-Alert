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

@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <div id="results_container"></div>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {

            // Ajax call
            $.ajax({
                    url: 'AlertsController.php',
                    method: 'get'
                })
                .done(function(result) {
                    // If AJAX call worked
                    $('#results_container').html(result);
                })
                .fail(function(result) {
                    console.log('AJAX FAILED');
                });
        });
    </script>
</body>

</html>
