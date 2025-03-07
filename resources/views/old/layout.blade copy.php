<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - My Projects & Experience</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
    body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460, #53354a);
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
        .container {
            margin-top: 50px;
        }
        .project-card {
            border: 1px solid #444;
            border-radius: 10px;
            overflow: hidden;
            background-color: #222;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
            height: 516px;
        
        }
        .project-card:hover {
            transform: scale(1.05);
        }
        .project-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .project-content {
            padding: 20px;
            height: 100%;
        }
        .project-title {
            font-size: 1.6rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn-custom {
            background-color: #34ace0;
            color: #fff;
            font-size: 1rem;
            text-transform: uppercase;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin: 5px;
        }
        .btn-custom:hover {
            background-color: #ff5252;
        }
     
        h1 {
            text-align: center;
            color: #fff;
            font-size: 3rem;
            margin-bottom: 50px;
        }
        .project-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        .experience-section {
            margin-top: 50px;
        }
        .experience-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .experience-list {
            list-style: none;
            padding-left: 0;
        }
        .experience-item {
            background-color: #333;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .experience-item h5 {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .experience-item p {
            font-size: 1rem;
            margin-top: 5px;
        }
        .toggle-buttons {
            text-align: center;
            margin-bottom: 30px;
        }
        .toggle-buttons button {
            background-color: #34ace0;
            color: #fff;
            font-size: 1.2rem;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .toggle-buttons button:hover {
            background-color: #ff5252;
        }
        .active {
            background-color: #ff5252 !important;
        }
    </style>
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460, #53354a);
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
        .container {
            margin-top: 50px;
        }
        .project-card {
            border: 1px solid #444;
            border-radius: 10px;
            overflow: hidden;
            background-color: #222;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
            height: 100%;
        }
        .project-card:hover {
            transform: scale(1.05);
        }
        .project-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .project-title {
            font-size: 1.6rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .project-description {
            display: none;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #34ace0;
            color: #fff;
            font-size: 1rem;
            text-transform: uppercase;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin: 5px;
        }
        .btn-custom:hover {
            background-color: #ff5252;
        }
        .store-buttons {
            position: fixed;
            bottom: 17px;
            width: 89%;
        }
        .store-buttons a {
            width: 19%;
          font-size: 14px;
        }
        h1 {
            text-align: center;
            color: #fff;
            font-size: 3rem;
            margin-bottom: 50px;
        }
        .project-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        .experience-section {
            margin-top: 50px;
        }
        .experience-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .experience-list {
            list-style: none;
            padding-left: 0;
        }
        .experience-item {
            background-color: #333;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .experience-item h5 {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .experience-item p {
            font-size: 1rem;
            margin-top: 5px;
        }
        .toggle-buttons {
            text-align: center;
            margin-bottom: 30px;
        }
        .toggle-buttons button {
            background-color: #34ace0;
            color: #fff;
            font-size: 1.2rem;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .toggle-buttons button:hover {
            background-color: #ff5252;
        }
        .active {
            background-color: #ff5252 !important;
        }
        


        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: #007BFF; */
            padding: 10px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
            color: #ffffff;

        }

        .navbar li {
            display: inline;
        }

        .navbar a {
            text-decoration: none;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #ffdd57;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
                gap: 10px;
            }
        }
        .custom{
            background: none;
            border: none;
        }
 
        </style>
        <style>
       h1, h2 ,li {
            text-align: center;
            font-family: "Arial", sans-serif;
            color: #ffffff;
            text-shadow: 0 0 10px #00ffcc;
        }
</style>
</head>
<body>
<nav class="navbar animate__animated animate__wobble  animate__delay-0.1s">
        <ul>
            <li><a  id="showProjectsBtn_1" class=" animate__animated animate__flip  animate__delay-2s custom">Show Projects</a></li>
            <li>   <a id="showExperienceBtn" class="custom">Show Experience</a></li>
        </ul>
    </nav>
   

   
    <div class="container">

    @yield('admin')

    </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

    <!-- Custom JS for toggling -->
    <script>
        // const showProjectsBtn = document.getElementById("showProjectsBtn");
        // const showExperienceBtn = document.getElementById("showExperienceBtn");
        // const projectsSection = document.getElementById("projectsSection");
        // const experienceSection = document.getElementById("experienceSection");

        document.getElementById('showProjectsBtn_1').addEventListener('click', function() {
    // الانتقال إلى مسار المشاريع (Route الخاص بالمشاريع)
    window.location.href = "{{ route('projects') }}"; // ضع اسم الـ Route المناسب هنا
});

document.getElementById('showExperienceBtn').addEventListener('click', function() {
    // الانتقال إلى مسار الخبرة (Route الخاص بالخبرة)
    window.location.href = "{{ route('experience') }}"; // ضع اسم الـ Route المناسب هنا
});
    </script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

    <!-- Custom JS for toggling -->
    <script>
        // const showProjectsBtn = document.getElementById("showProjectsBtn");
        // const showExperienceBtn = document.getElementById("showExperienceBtn");
        // const projectsSection = document.getElementById("projectsSection");
        // const experienceSection = document.getElementById("experienceSection");

        document.getElementById('showProjectsBtn_1').addEventListener('click', function() {
    // الانتقال إلى مسار المشاريع (Route الخاص بالمشاريع)
    window.location.href = "{{ route('projects') }}"; // ضع اسم الـ Route المناسب هنا
});

document.getElementById('showExperienceBtn').addEventListener('click', function() {
    // الانتقال إلى مسار الخبرة (Route الخاص بالخبرة)
    window.location.href = "{{ route('experience') }}"; // ضع اسم الـ Route المناسب هنا
});

    </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>