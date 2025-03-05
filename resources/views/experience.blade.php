@extends('layout')

@section('admin')

        <!-- Toggle Buttons for Projects and Experience -->
        <!-- <div class="toggle-buttons">
            <button id="showProjectsBtn" class="active">Show Projects</button>
            <button id="showExperienceBtn">Show Experience</button>
        </div> -->

        <h1 class="animate__animated animate__zoomInDown  animate__delay-0.1s">My Experience</h1>

        <!-- Experience Section
        <div id="experienceSection" class="experience-section" style=""  
            
            >
            <div class="experience-title">My Experience</div>
            <ul class="experience-list">
               @foreach ( @$experiences as $item )
<div data-aos="fade-up">
                    <li class="experience-item ">
                        <h5>{{ $item->heade }}</h5>
                        <p>{{ $item->description }}.</p>
                    </li>
                    </div>
                @endforeach

            </ul>
        </div>
    </div> -->

    <!-- Bootstrap JS and dependencies -->

    <!-- Experience Section with Terminal Theme -->
<div id="experienceSection" class="experience-section">
    <div class="terminal-header">~ Terminal: Experience.log</div>
    <div class="terminal-body">
        <div class="experience-title">
            <span id="typing-title"></span><span class="cursor">|</span>
        </div>

        <ul class="experience-list">
            @foreach ( @$experiences as $item )
            <div data-aos="fade-up">
                <li class="experience-item">
                    <h5>> {{ $item->heade }}</h5>
                    <p>{{ $item->description }}.</p>
                </li>
            </div>
            @endforeach
        </ul>
    </div>
</div>

<!-- Styles for Terminal Effect -->
<style>
    /* Terminal Container */
    .experience-section {
        font-family: "Courier New", monospace;
        background-color: #000;
        color: #00ff00;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px #00ff00;
        width: 80%;
        margin: auto;
    }

    /* Terminal Header */
    .terminal-header {
        background-color: #111;
        color: #0f0;
        padding: 8px;
        font-weight: bold;
        border-bottom: 2px solid #00ff00;
    }

    /* Typing Effect for Section Title */
    .experience-title {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Terminal Cursor Blinking */
    .cursor {
        display: inline-block;
        width: 8px;
        height: 18px;
        background-color: #00ff00;
        margin-left: 3px;
        animation: blink 0.8s infinite;
    }

    @keyframes blink {
        50% { opacity: 0; }
    }

    /* Experience List */
    .experience-list {
        list-style-type: none;
        padding-left: 20px;
    }

    .experience-item h5 {
        color: #0f0;
        font-size: 18px;
        margin-bottom: 5px;
    }

    .experience-item p {
        color: #aaa;
        font-size: 14px;
    }

    /* AOS Animation */
    [data-aos="fade-up"] {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    [data-aos="fade-up"].aos-animate {
        opacity: 1;
        transform: translateY(0);
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
                setTimeout(typeEffect, 100);
            }
        }
        typeEffect();
    });
</script>

<!-- AOS Library for Scroll Animations -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

 @endsection
