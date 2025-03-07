@extends('layout')

@section('admin')

<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<!-- AOS Library for Scroll Animations -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

<!-- Experience Section with Terminal Theme -->
<div id="experienceSection" class="experience-section animate__animated animate__fadeInUp animate__delay-0.5s">
    <div class="terminal-header">~ Terminal: Experience.log</div>
    <div class="terminal-body">
        <div class="experience-title">
            <span id="typing-title"></span><span class="cursor">|</span>
        </div>

        <ul class="experience-list">
            @foreach (@$experiences as $item)
                <li class="experience-item" data-aos="fade-up">
                    <h5>> {{ $item->heade }}</h5>
                    <p>{{ $item->description }}.</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- Styles for Terminal Effect -->
<style>
    body {
        font-family: 'Courier New', monospace;
        background: radial-gradient(circle, #001f3f, #000);
    }
    .experience-section {
        max-width: 800px;
        background-color: #000;
        color: #00ff00;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px #00ff00;
        margin: 100px auto;
        border: 1px solid #00ff00;
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
    .experience-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .cursor {
        display: inline-block;
        width: 10px;
        height: 24px;
        background-color: #00ff00;
        margin-left: 3px;
        animation: blink 0.8s infinite;
    }
    @keyframes blink {
        50% { opacity: 0; }
    }
    .experience-list {
        list-style-type: none;
        padding: 0;
    }
    .experience-item {
        margin-bottom: 15px;
        text-align: left;
    }
    .experience-item h5 {
        color: #0f0;
        font-size: 18px;
        margin-bottom: 5px;
    }
    .experience-item p {
        color: #aaa;
        font-size: 14px;
        margin: 0;
    }
</style>

<!-- Typing Effect Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const text = "My Experience";
        let index = 0;
        function typeEffect() {
            if (index < text.length) {
                document.getElementById("typing-title").innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 150);
            }
        }
        typeEffect();
    });
</script>

<!-- AOS Library for Scroll Animations -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

@endsection
