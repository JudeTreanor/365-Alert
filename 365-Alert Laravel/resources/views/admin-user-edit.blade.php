{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Admin User Edit')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/admin.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
   <form action="" method="post">
    @csrf
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Username" value="{{$user->username}}"><br>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" value="{{$user->email}}"><br>
    <label for="Phone Number">Phone Number</label>
    <input type="number" name="contact" placeholder="Phone number" value="{{$user->contact}}"><br>
    <label for="Password">Password</label>
    <input type="text" name="password" placeholder="Password" value="{{$user->password}}"><br>
    <input type="submit" value="Submit">
   </form>
@endsection

{{-- Footer Section --}}
@section('footer')
    
@endsection

{{-- Scripts links --}}
@section('scripts')
    
@endsection
