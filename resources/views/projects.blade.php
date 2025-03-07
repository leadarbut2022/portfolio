






    @extends('layout')

@section('admin')

<h1 class="animate__animated animate__zoomInDown animate__delay-0.1s">My Projects</h1>

<!-- Swiper Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

<!-- Projects Section with Swiper -->
<div id="projectsSection" class="projects-container">
    <div class="swiper">
        <div class="swiper-wrapper">
            @if(isset($pros) && count($pros) > 0)
                @foreach ($pros as $pro)
                    <div class="swiper-slide phone-frame">
                        <img src="{{ url('public/storage/' . ($pro->img1 ?? 'default_image.jpg')) }}" alt="Project Image">
                        <div class="project-content">
                    <div class="project-title">{{ $pro->name }}</div>
                    <div class="project-description">
                        {{ $pro->des }}
                    </div>

                    @php
                        $data = [];
                        if ($pro->playstore_stat) {
                            $data['play'] = ['link' => $pro->playstore, 'icon' => '<i class="ri-play-store-fill"></i>'];
                        }
                        if ($pro->appstore_stat) {
                            $data['app'] = ['link' => $pro->appstore, 'icon' => '<i class="ri-apple-fill"></i>'];
                        }
                        if ($pro->github_stat) {
                            $data['github'] = ['link' => $pro->github, 'icon' => '<i class="ri-github-fill"></i>'];
                        }
                        if ($pro->demo_stat) {
                            $data['demo'] = ['link' => $pro->demo, 'icon' => '<i class="ri-window-fill"></i>'];
                        }
                    @endphp

                    <div class="store-buttons">
                        @foreach ($data as $item)
                            <a href="{{ $item['link'] }}" class="btn-custom link-a" target="_blank">{!! $item['icon'] !!}</a>
                        @endforeach
                    </div>
                </div>
                    </div>
                @endforeach
            @else
                <p>No projects are available.</p>
            @endif
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper('.swiper', {
            loop: true, 
            slidesPerView: 3, 
            spaceBetween: 20, 
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1024: { slidesPerView: 3 },
                768: { slidesPerView: 2 },
                480: { slidesPerView: 1 },
            }
        });
    });
</script>

<!-- Styles -->
<style>
    body {
        background: radial-gradient(circle, #001f3f, #000);
        color: white;
        text-align: center;
    }

    .projects-container {
        width: 90%;
        margin: auto;
        padding: 20px;
    }

    .swiper {
        padding: 50px 0;
    }

    .swiper-slide {
        position: relative;
        width: 250px;
        height: 500px;
        perspective: 1000px;
        transition: transform 0.5s ease-in-out;
    }

    .swiper-slide:nth-child(odd) {
        transform: rotateY(10deg);
    }

    .swiper-slide:nth-child(even) {
        transform: rotateY(-10deg);
    }

    .phone-frame {
        background: black;
        border-radius: 40px;
        border: 5px solid #333;
        overflow: hidden;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.7);
    }

    .phone-frame::before{
        content: "**";
    color: red;
    font-weight: bold;
    position: absolute;
    top: 0px;
    transform: translateX(1%);
    width: 100px;
    height: 25px;
    background: black;
    border: 2px solid;
    border-radius: 0px 0px 11px 11px;

    }
    .phone-frame img {
        width: 100%;
        height: 58%;
        object-fit: cover;
        border-radius: 0px;
    }

    .swiper-button-next, .swiper-button-prev {
        color: white;
    }

    .swiper-pagination-bullet {
        background-color: white;
    }
    .link-a{
        font-size: 13px;

    }
</style>

@endsection


    
