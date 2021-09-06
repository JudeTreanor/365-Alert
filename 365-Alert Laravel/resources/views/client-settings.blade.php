{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Client Settings')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/client-settings.css') }}">
@endsection
{{-- Main Content Section --}}
@section('content')
<main>
    <section class="intro_container">
        <img src="{{ URL::asset('../css/logos/User_WhiteStroke_Circle.svg') }}" alt="" id="image_user">
        <h1 id="client">My Account</h1>
    </section>
    <section id="settings-bar">
        <h2>Personal Details</h2>
    </section>
    <section id="user-details">
        <div class="user-username">
            <h2>Username</h2>
            <p>{{ $user->firstname }}</p>
        </div>
        <div class="user-email">
            <h2>Email</h2>
            <p>{{ $user->email }}</p>
        </div>
        <div class="user-phone">
            <h2>Phone</h2>
            <p>{{ $user->contact }}</p>
        </div>
        <div id="change-buttons">
            <a href="{{ route('client-settings-edit', ['id' => $user->id]) }}" class="buttons_container">
                <button class="buttons_container" type="submit">Edit User</button>
            </a>
        </div>
    </section>
    <section id="settings-bar">
        <h2>Change Password</h2>
    </section>
    <section id="change-password">
        <form class="row" action="sumbit">
            <div class="col_current-password">
                <label for="current_password">Current Password</label><br>
                <input type="text" name="current_password" id="current_password"placeholder="Enter Current Password">
            </div>
            <div class="col new-password">
                <label for="new_password">New Password</label><br>
                <input type="text" name="new_password" id="new_password" placeholder="Enter New Password">
            </div>
            <div class="col confirm-password">
                <label for="confirm_password">Confirm New Password</label><br>
                <input type="text" name="confirm_password" id="confirm_password" placeholder="Confirm New Password">
            </div>
            <div class="col">
                <input class="sub-button" value="Update Password" type="submit">
            </div>
        </form>
    </section>
    <section id="settings-bar">
        <h2>Alert Notifications</h2>
    </section>
    <section class="container_alert">
        @foreach ($alerts as $alert)
        @foreach ($alert as $a)
        <article class="alert_container">
            <div id="sidebar_color"></div>
            <div id="alert_icon"></div>
            {{-- <img src="{{URL::asset('pictures/Alert_Warning_Red.svg')}}" alt=""> --}}
            <div class="alert">
                <h4 id="location">{{$a->location}}</h4>
                <p id="river">River {{$a->river}}</p>
                <a href="{{ route('add-alert', ['alert_id' => $a->id]) }}">
                    <button class="buttons_container" type="submit">Delete Alert</button>
                </a>
            </div>
        </article>
    </section>
    @endforeach
    @endforeach
    <section id="unsub_container">
        <h3>Unsubscribe</h3>
        <div class="container_checkbox">
            <input type="checkbox" name="checkbox_unsub" id="checkbox_unsub">
            <label for="checkbox">Unsubscribe from 365Alert services, I no longer wish to be contacted.</label>
        </div>
    </section>
</main>
@endsection
