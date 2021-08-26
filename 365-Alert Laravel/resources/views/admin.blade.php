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
    <h1>User List</h1>
    <table border=1 style="margin: 0 auto; text-align:center; text-transform:capitalize" id="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody style="font-size:30px"> 
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->contact }}</td>
                <td class="no-border"><a href="{{ url('edit/' . $user->id)}}">Edit User</a></td>
                <td class="no-border"><a href="{{ url('delete/' . $user->id)}}" style="color: red">Delete User</a></td>
            </tr><br>
            @endforeach
        </tbody>
    </table>
@endsection

{{-- Footer Section --}}
@section('footer')
    
@endsection

{{-- Scripts links --}}
@section('scripts')
    
@endsection
