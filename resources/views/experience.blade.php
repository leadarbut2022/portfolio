@extends('layout')

@section('admin')

        <!-- Toggle Buttons for Projects and Experience -->
        <!-- <div class="toggle-buttons">
            <button id="showProjectsBtn" class="active">Show Projects</button>
            <button id="showExperienceBtn">Show Experience</button>
        </div> -->

        <h1 class="animate__animated animate__zoomInDown  animate__delay-0.1s">My Experience</h1>

        <!-- Experience Section -->
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
    </div>

    <!-- Bootstrap JS and dependencies -->
 @endsection
