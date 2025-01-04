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
        .project-content {
            padding: 20px;
        }
        .project-title {
            font-size: 1.6rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .project-description {
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
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .store-buttons a {
            width: 48%;
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
</head>
<body>
    <div class="container">
        <!-- Toggle Buttons for Projects and Experience -->
        <div class="toggle-buttons">
            <button id="showProjectsBtn" class="active">Show Projects</button>
            <button id="showExperienceBtn">Show Experience</button>
        </div>

        <h1>My Projects</h1>

   
     

        <!-- Experience Section -->
        <div id="experienceSection" class="experience-section" style="">
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
        </div>
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

        document.getElementById('showProjectsBtn').addEventListener('click', function() {
    // الانتقال إلى مسار المشاريع (Route الخاص بالمشاريع)
    window.location.href = "{{ route('projects') }}"; // ضع اسم الـ Route المناسب هنا
});

document.getElementById('showExperienceBtn').addEventListener('click', function() {
    // الانتقال إلى مسار الخبرة (Route الخاص بالخبرة)
    window.location.href = "{{ route('experience') }}"; // ضع اسم الـ Route المناسب هنا
});
    </script>
</body>
</html>
