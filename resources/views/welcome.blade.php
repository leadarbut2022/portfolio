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
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460, #53354a);
            font-family: 'Arial', sans-serif;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
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
        canvas {
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    
    <h1 id="clickMeText" onclick="openAboutPage()">Click Me</h1>
    <h1 id="clickMeText" onclick="openAboutPage()">Hi I`M Shami</h1>

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
    </script>
</body>
</html>
