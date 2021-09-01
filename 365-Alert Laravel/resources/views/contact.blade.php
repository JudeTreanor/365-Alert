{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Contact')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/contact.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
<main>
    <section class="contact_image">
        <img src="{{URL::asset('pictures/Contact_Page.jpg')}}" alt="contact_image">
    </section>
    <h2 id="contact_title">Contact Us</h2>

    <form action="" method="POST" id="form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="10" rows="5"></textarea><br>
        <input type="submit" name="submit_button" id="submit_button" value="Send Message">
    </form>
</main>

@endsection

{{-- Footer Section --}}
@section('footer')
    
@endsection

{{-- Scripts links --}}
@section('scripts')
    
@endsection
