<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460, #53354a);
            /* font-family: 'Arial', sans-serif; */
            height: 100vh;
            margin: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-family: 'Roboto', sans-serif;

        }
        h1 {
            font-size: 3rem;
            position: absolute;
            top: 5%;
            text-align: center;
            width: 100%;
            cursor: pointer;
            z-index: 10;
            color: #eaeaea;
            user-select: none;
            transition: transform 0.2s ease-in-out;
        }
        h2 {
            font-size: 3rem;
            position: absolute;
            top: 23%;
            text-align: center;
            width: 100%;
            cursor: pointer;
            z-index: 10;
            color: #eaeaea;
            user-select: none;
            transition: transform 0.2s ease-in-out;
        }
        canvas {
            position: absolute;
            top: 0;
            left: 0;
        }
        .welcome-message {
            /* background-color: #ffffff; */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        h1 {
            font-size: 36px;
            /* color: #007BFF; */
            margin-bottom: 20px;
            font-weight: 700;
        }
        h2 {
            font-size: 36px;
            /* color: #007BFF; */
            margin-bottom: 20px;
            font-weight: 700;
        }
        p {
            font-size: 18px;
            /* color: #555; */
            line-height: 1.6;
        }

        .highlight {
            /* color: #007BFF; */
            font-weight: 700;
        }
    </style>
</head>
<body>

<h1  class="animate__animated  animate__fadeInUpBig  animate__delay-0.1s">Welcome to my portfolio!</h1>

<h2 onclick="openAboutPage(this)" class="animate__animated  animate__backInLeft   animate__delay-3s ">portfolio!</h2>
<br>
    <!-- <h1 id="clickMeText" onclick="openAboutPage()">Portfolio</h1> -->
    <!-- <h1 id="clickMeText" onclick="openAboutPage()">  Ahmed , a back end web developer</h1> -->
    <!-- <div class="image-frame">
        <img src="storage/pros/January2025/222.png" alt="Framed Image">
    </div> -->
    <div class="welcome-message animate__animated  animate__fadeInUpBig  animate__delay-1s">

    <p class="">I'm Shami, a passionate back-end developer, dedicated to crafting smooth and efficient server-side solutions. Let's build something amazing! </p>
    <!-- <a href="{{ route('projects') }}" class="animate__animated animate__fadeInUpBig animate__delay-2s">My Portfolio!</a> -->
       
</div>
       


    <canvas id="physicsCanvas"></canvas>

    <!-- Matter.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>
    <!-- JavaScript -->
    <script>
        const { Engine, Render, Runner, World, Bodies } = Matter;

        const engine = Engine.create();
        const { world } = engine;

        const canvas = document.getElementById('physicsCanvas');
        const render = Render.create({
            canvas: canvas,
            engine: engine,
            options: {
                width: window.innerWidth,
                height: window.innerHeight,
                wireframes: false,
                background: 'transparent',
            },
        });

        // ضبط حجم الشاشة عند التغيير
        window.addEventListener('resize', () => {
            render.canvas.width = window.innerWidth;
            render.canvas.height = window.innerHeight;
        });

        Render.run(render);
        const runner = Runner.create();
        Runner.run(runner, engine);

        // تعريف اللغات وألوانها الداكنة
        const languages = [
            { icon: '\uf457', color: '#2c2c54' }, // PHP
            { icon: '\uf121', color: '#40407a' }, // Laravel
            { icon: '\uf1c0', color: '#706fd3' }, // MySQL
            { icon: '\uf13b', color: '#3dc1d3' }, // HTML
            { icon: '\uf13c', color: '#34ace0' }, // CSS
            { icon: '\uf836', color: '#33d9b2' }, // Bootstrap
            { icon: '\uf3b8', color: '#ff5252' }, // JavaScript
        ];

        // إنشاء الكرات
        const balls = languages.map((lang) => {
            const size = 80;
            const ball = Bodies.circle(
                Math.random() * window.innerWidth,
                Math.random() * window.innerHeight,
                size / 2,
                {
                    restitution: 1,
                    friction: 0,
                    render: {
                        fillStyle: lang.color,
                    },
                }
            );
            ball.icon = lang.icon;
            return ball;
        });

        World.add(world, balls);

        // حدود الشاشة
        const boundaries = [
            Bodies.rectangle(window.innerWidth / 2, 0, window.innerWidth, 10, { isStatic: true }),
            Bodies.rectangle(window.innerWidth / 2, window.innerHeight, window.innerWidth, 10, { isStatic: true }),
            Bodies.rectangle(0, window.innerHeight / 2, 10, window.innerHeight, { isStatic: true }),
            Bodies.rectangle(window.innerWidth, window.innerHeight / 2, 10, window.innerHeight, { isStatic: true }),
        ];
        World.add(world, boundaries);

        // رسم الأيقونات فوق الكرات
        const context = canvas.getContext('2d');
        function renderIcons() {
            context.clearRect(0, 0, canvas.width, canvas.height);
            balls.forEach((ball) => {
                const pos = ball.position;

                // رسم الدائرة
                context.beginPath();
                context.arc(pos.x, pos.y, 40, 0, 2 * Math.PI);
                context.fillStyle = ball.render.fillStyle;
                context.fill();
                context.closePath();

                // رسم الأيقونة
                context.font = '30px FontAwesome';
                context.fillStyle = '#fff';
                context.textAlign = 'center';
                context.textBaseline = 'middle';
                context.fillText(ball.icon, pos.x, pos.y);
            });

            // استمرارية التحديث
            requestAnimationFrame(renderIcons);
        }
        renderIcons(); // بدء تحديث الأيقونات والحركة

        // حركة النص "Click Me"
        let angle = 0;
        const clickMeText = document.getElementById('clickMeText');
        function moveClickMeText() {
            // تحريك النص على مسار دائري
            angle += 0.01; // سرعة الحركة
            const radius = 200;
            const centerX = window.innerWidth / 2;
            const centerY = window.innerHeight / 2;

            clickMeText.style.transform = `translate(-50%, -50%) translate(${centerX + radius * Math.cos(angle)}px, ${centerY + radius * Math.sin(angle)}px)`;

            requestAnimationFrame(moveClickMeText); // استمرارية الحركة
        }
        moveClickMeText(); // بدء حركة النص

        function openAboutPage() {
            window.location.href = "{{ route('projects') }}";
        }
      

        function openAboutPage(element) {
        
            element.classList.remove('animate__backInLeft', 'animate__delay-3s');
            element.classList.add('animate__hinge');

            element.style.animationDuration = '2s';
            setTimeout(() => {
                window.location.href = "{{ route('projects') }}";
            }, 200); // 2000ms matches the animation duration
        }
    </script>
</body>
</html>
