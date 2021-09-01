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
