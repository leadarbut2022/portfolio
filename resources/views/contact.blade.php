@extends('layout')

@section('admin')

<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Contact Section with Terminal Theme -->
<div id="contactSection" class="contact-section animate__animated animate__fadeInUp animate__delay-0.5s">
    <div class="terminal-header">~ Terminal: Contact.Me</div>
    <div class="terminal-body">
        <div class="contact-content">
            <h2>Contact Me</h2>
            <p>If you would like , please feel free to contact me via the following channels:</p>
            <ul>
            @foreach ($contacts as $contact)
            <li>Email: <a href="mailto:{{ $contact->email }}" style="color:#00ff00;">{{ $contact->email }}</a></li>
            <li>Phone: <a href="tel:{{ $contact->phone }}" style="color:#00ff00;">{{ $contact->phone }}</a></li>
            <li>LinkedIn: <a href="{{ $contact->linkedin }}" target="_blank" style="color:#00ff00;">LinkedIn Profile</a></li>
            <li>GitHub: <a href="{{ $contact->github }}" target="_blank" style="color:#00ff00;">GitHub Profile</a></li>
            <li>WhatsApp: <a href="https://wa.me/{{ $contact->whatsapp }}" target="_blank" style="color:#00ff00;">Chat on WhatsApp</a></li>
        @endforeach
            </ul>
        </div>
    </div>
</div>

<!-- Styles for Terminal Effect -->
<style>
    .contact-section {
        max-width: 800px;
        background-color: #000;
        color: #00ff00;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px #00ff00;
        margin: 100px auto;
        border: 1px solid #00ff00;
        font-family: 'Courier New', monospace;
    }
    .terminal-header {
        background-color: #111;
        color: #0f0;
        padding: 10px 15px;
        font-weight: bold;
        border-bottom: 2px solid #00ff00;
        text-align: left;
    }
    .terminal-body {
        padding: 20px;
    }
    .contact-content h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .contact-content p, .contact-content li {
        font-size: 16px;
        line-height: 1.5;
    }
    .contact-content ul {
        list-style: none;
        padding: 0;
    }
    .contact-content ul li {
        margin-bottom: 10px;
    }
    .contact-content a {
        text-decoration: none;
    }
</style>

@endsection
