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

        <body>


            <img src="{{ URL::asset('../css/logos/User_WhiteStroke_Circle.svg') }}" alt="">
            <h1 id="client">My Account</h1>

            <section id="settings-bar">
                <h2>Personal Details</h2>
            </section>

            <section id="user-details">
                @foreach ($users as $user)


                    <div class="user-username">
                        <h2>Username</h2>
                        <p>
                            {{ $users->firstname }}
                        </p>
                    </div>
                    <div class="user-email">
                        <h2>Email</h2>
                        <p>
                            {{ $user->email }}
                        </p>
                    </div>
                    <div class="user-phone">
                        <h2>Phone</h2>
                        <p>
                            {{ $user->contact }}
                        </p>
                    </div>

                    <div id="change-buttons">
                        <div class="red-buttons">
                            <button type="submit">Change Username</button>
                            <button type="submit">Change Email</button>
                            <button type="submit">Change Phone</button>
                        </div>
                    </div>
                    </div>

                @endforeach
            </section>
            <section id="settings-bar">
                <h2>Change Password</h2>
            </section>
            <section id="change-password">
                <form class="row" action="sumbit">
                    <div class="col current-password">
                        <label for="current_password">Current Password</label>
                        <input type="text" name="current_password" id="current_password"
                            placeholder="Enter Current Password">
                    </div>
                    <div class="col new-password">
                        <label for="new_password">New Password</label>
                        <input type="text" name="new_password" id="new_password" placeholder="Enter New Password">
                    </div>
                    <div class="col confirm-password">
                        <label for="confirm_password">Confirm New Password</label>
                        <input type="text" name="confirm_password" id="confirm_password" placeholder="Confirm New Password">
                    </div>
                    <div class="col">
                        <input class="sub-button" value="Send" type="submit">
                    </div>

                </form>
            </section>
            <section id="settings-bar">
                <h2>Alert Notifications</h2>
            </section>

            <section id="user-details">
                <div class="user-username">
                    <h2>Favorites</h2>
                </div>
                <div class="user-email">
                    <h2>Add New Region</h2>
                    <select name="regions" id="">
                        <option value="Region1"></option>
                        <option value="Region2"></option>
                        <option value="Region3"></option>
                    </select>
                </div>
            </section>
            <section id="settings-bar">
                <h2>Unsubscribe</h2>

            </section>
            <section id="user-details">
                <div class="checkbox">
                    <input id="cbox" type="checkbox">
                    <p id="cbox">Lmao box gang</p>
                </div>
            </section>
        </body>
    </main>
@endsection
