@extends('layout')

@section('admin')

<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- About Me Section with Terminal Theme -->
<div id="aboutSection" class="about-section animate__animated animate__fadeInUp animate__delay-0.5s">
    <div class="terminal-header">~ Terminal: About.Me</div>
    <div class="terminal-body">
        <div class="about-content">
            <h2>Welcome to My Terminal</h2>
            @foreach ($contacts as $contact)
            <li>Email: <a href="mailto:{{ $contact->email }}" style="color:#00ff00;">{{ $contact->email }}</a></li>
            <li>Phone: <a href="tel:{{ $contact->phone }}" style="color:#00ff00;">{{ $contact->phone }}</a></li>
            <li>LinkedIn: <a href="{{ $contact->linkedin }}" target="_blank" style="color:#00ff00;">LinkedIn Profile</a></li>
            <li>GitHub: <a href="{{ $contact->github }}" target="_blank" style="color:#00ff00;">GitHub Profile</a></li>
            <li>WhatsApp: <a href="https://wa.me/{{ $contact->whatsapp }}" target="_blank" style="color:#00ff00;">Chat on WhatsApp</a></li>
        @endforeach
            <!-- <p>Hello, I'm [Your Name]. I'm a passionate developer with expertise in web development, software engineering, and creative design. I love turning ideas into innovative solutions and continuously learning new technologies.</p> -->
            <!-- <p>This page is a glimpse into my world, showcasing my skills, projects, and experiences. Stay tuned for more updates and insights about my journey!</p> -->
        </div>
    </div>
</div>

<!-- Styles for Terminal Effect -->
<style>
    .about-section {
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
    .about-content h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .about-content p {
        font-size: 16px;
        line-height: 1.5;
    }
</style>

@endsection
