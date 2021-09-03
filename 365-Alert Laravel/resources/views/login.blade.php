{{-- Extending the template --}}
@extends('layouts.simpletemplate')

{{-- Setting the Page title --}}
@section('title', 'Login')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/login.css'); }}">

@endsection
<body>

<main>
{{-- Main Content Section --}}
@section('content')

<img src="{{URL::asset('../css/logos/house.svg')}}" alt="" class="icon_365" >
<h3>Login</h3>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="post">
    <!-- Security token for Laravel : Mandatory in forms -->
    @csrf
    <section class="flex_container">
        <input type="email" name="email" placeholder="Email" class="input-email" onfocus="this.placeholder=''"
        onblur="this.placeholder='Email'" >
        <input type="password" name="password" placeholder="Password" class="input-password" >
    </section>
    <p><span><a href="forgot-password">Forgot your password?</a></span></p><br>
    <input type="submit" value="login" id="submit2">
</form>

@endsection


{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')
</main>
</body>
@endsection
