{{-- Extending the template --}}
@extends('layouts.mytemplate')

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

<img src="{{URL::asset('../css/logos/house.svg')}}" alt="">
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


    <input type="text" name="username" placeholder="Username" class="input-username" onfocus="this.placeholder=''"
    onblur="this.placeholder='enter your text'" >

    <input type="password" name="password" placeholder="Password" class="input-password" ><br>
<p><span><a href="forgot-password">Forgot your password?</a></span></p><br>
    <input type="submit" value="login" id="submit2">
</form>

@endsection

</main>
</body>
{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
