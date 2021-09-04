{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Admin')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/admin.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
    <h1 id="section-title">Users</h1>
    <section id="users-list">
        @foreach ($users as $user)
        <article id="user-article">    
            <div id="names">
                <p class="label">First Name</p>
                <p class="user-data">{{ $user->firstname }}</p>
                <p class="label">Last Name</p>
                <p class="user-data">{{ $user->lastname}}</p>
            </div>
            <div id="contact">
                <p class="label">Email</p>
                <p class="user-data">{{ $user->email }}</p>
                <p class="label">Passwrod</p>
                <p class="user-data">{{ $user->password }}</p>
                <p class="label">Phone Number</p>
                <p class="user-data">{{ $user->contact }}</p>
            </div>
        </article>
        @endforeach
    </section>

    <section id="alerts-list">
        @foreach ($alerts as $alert)
        <article id="alert-article">
            <div id="alerts">
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
    
@endsection
