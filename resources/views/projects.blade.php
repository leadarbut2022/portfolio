@extends('layout')

@section('admin')

<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>

        <h1 class="animate__animated animate__zoomInDown  animate__delay-0.1s">My Projects</h1>

        <!-- Projects Section -->
<div id="projectsSection" class="project-container">

    @if(isset($pros) && count($pros) > 0)
        @foreach ($pros as $pro)
            <div class="project-card">
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
                            <a href="{{ $item['link'] }}" class="btn-custom" target="_blank">{!! $item['icon'] !!}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No projects are available.</p>
    @endif

</div>
    @endsection
