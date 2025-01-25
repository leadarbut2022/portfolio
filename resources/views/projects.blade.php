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

        @foreach (@$pros as $pro )
        
        
            <!-- Project 1 -->
            <div class="project-card  ">
                <img src="public/storage/{{$pro->img1}}" alt="Project Image">
                <div class="project-content">
                    <div class="project-title">{{$pro->name}}</div>
                    <div class="project-description">
                    {{$pro->des}}
                    <div>
    @php
        $data = [];

        if ($pro->playstore_stat) {
            $data['play'] = [
                'link' => $pro->playstore,
                'icon' => '<i class="ri-play-store-fill"></i>', // تحقق من الأيقونة الصحيحة
            ];
        }

        if ($pro->appstore_stat) {
            $data['app'] = [
                'link' => $pro->appstore,
                'icon' => '<i class="ri-apple-fill"></i>', // تحقق من الأيقونة الصحيحة
            ];
        }

        if ($pro->github_stat) {
            $data['github'] = [
                'link' => $pro->github,
                'icon' => '<i class="ri-github-fill"></i>', 
            ];
        }

        if ($pro->demo_stat) {
            $data['demo'] = [
                'link' => $pro->demo,
                'icon' => '<i class="ri-window-fill"></i>', // تحقق من الأيقونة الصحيحة
            ];
        }
    @endphp

    <div class="store-buttons">
        @foreach ($data as $item)
            <a href="{{ $item['link'] }}" class="btn-custom" target="_blank">
                {!! $item['icon'] !!}  <!-- استخدم الإخراج غير المشفر لعرض الأيقونات -->
            </a>
        @endforeach
    </div>
</div>
                        </div>

                </div>
            @endforeach
         

            <!-- Add more projects as needed -->
        </div>

        <!-- Experience Section -->
        <!-- <div id="experienceSection" class="experience-section" style="display: none;">
            <div class="experience-title">My Experience</div>
            <ul class="experience-list">
                <li class="experience-item">
                    <h5>Senior Laravel Developer - XYZ Company</h5>
                    <p>Developed high-performance web applications with Laravel and integrated third-party APIs. Led a team of junior developers and ensured best practices in coding.</p>
                </li>
                <li class="experience-item">
                    <h5>Web Developer - ABC Corp</h5>
                    <p>Built responsive websites using HTML, CSS, JavaScript, and PHP. Implemented modern design patterns and user-friendly interfaces.</p>
                </li>
                <li class="experience-item">
                    <h5>Freelance Web Developer</h5>
                    <p>Worked with clients to design and develop custom websites and web apps. Specialized in Laravel and MySQL, ensuring optimized performance and scalability.</p>
                </li>
            </ul>
        </div> -->
    </div>

    @endsection
