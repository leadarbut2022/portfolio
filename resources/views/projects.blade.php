@extends('layout')

@section('admin')

<!-- Optional: Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Projects Section in Grid Layout -->
<div id="projectsSection" class="projects-container animate__animated animate__fadeInUp animate__delay-0.5s">
    <div class="project-grid">
        @if(isset($pros) && count($pros) > 0)
            @foreach ($pros as $pro)
                <div class="terminal-frame animate__animated animate__zoomIn animate__delay-0.8s">
                    <div class="terminal-header">
                        <div class="terminal-buttons">
                            <span class="red"></span>
                            <span class="yellow"></span>
                            <span class="green"></span>
                        </div>
                        <div class="terminal-title">Project Terminal</div>
                    </div>
                    <div class="terminal-body">
                        <img src="{{ url('public/storage/' . ($pro->img1 ?? 'default_image.jpg')) }}" alt="Project Image">
                        <div class="project-content">
                            <div class="project-title">{{ $pro->name }}</div>
                            <div class="project-description">{{ $pro->des }}</div>
                            
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
                                    <a href="{{ $item['link'] }}" class="btn-custom link-a animate__animated animate__bounceIn animate__delay-1s" target="_blank">{!! $item['icon'] !!}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="animate__animated animate__shakeX">No projects are available.</p>
        @endif
    </div>
</div>

<!-- Styles -->
<style>
    body {
        background: radial-gradient(circle, #001f3f, #000);
        color: white;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
    }

    .projects-container {
        width: 90%;
        margin: 80px auto 20px;
        padding: 20px;
    }

    .project-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    /* تصميم التيرمنال */
    .terminal-frame {
        background: #222;
        border: 1px solid #333;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s ease;
    }
    .terminal-frame:hover {
        transform: scale(1.03);
    }
    .terminal-header {
        background: #333;
        padding: 8px 10px;
        display: flex;
        align-items: center;
    }
    .terminal-buttons span {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin-right: 5px;
    }
    .terminal-buttons .red {
        background: #ff5f56;
    }
    .terminal-buttons .yellow {
        background: #ffbd2e;
    }
    .terminal-buttons .green {
        background: #27c93f;
    }
    .terminal-title {
        font-size: 14px;
        margin-left: 10px;
        color: #fff;
    }
    .terminal-body {
        padding: 15px;
    }
    .terminal-body img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
        border-radius: 3px;
    }
    .project-title {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .project-description {
        font-size: 14px;
        margin-bottom: 10px;
    }
    .store-buttons a {
        text-decoration: none;
        color: #fff;
        background: #444;
        padding: 5px 10px;
        margin: 0 3px;
        border-radius: 3px;
        transition: background 0.3s ease;
    }
    .store-buttons a:hover {
        background: #555;
    }
    .link-a {
        font-size: 13px;
    }
</style>

@endsection
