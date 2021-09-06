{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Client Settings Edit')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset(''); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
   <form action="" method="post">
    @csrf
    <label for="username">First Name</label>
    <input type="text" name="firstname" placeholder="Username" value="{{$user->firstname}}"><br>
    <label for="username">Last Name</label>
    <input type="text" name="lastname" placeholder="Username" value="{{$user->lastname}}"><br>
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