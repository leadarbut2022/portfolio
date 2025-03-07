@extends('layout')

@section('title', 'Welcome - My Portfolio')

@section('styles')
  <style>
    /* تنسيق الحاوية التعريفية */
    .intro-container {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 20px 40px;
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 255, 0, 0.5);
      margin: 0 auto;
      max-width: 600px;
    }
    .intro-container h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      cursor: pointer;
      transition: transform 0.2s;
      text-shadow: 0 0 10px #00ffcc;
    }
    .intro-container h1:hover {
      transform: scale(1.05);
    }
    .intro-container h2 {
      font-size: 2.5rem;
      margin-top: 20px;
      cursor: pointer;
      color: #eaeaea;
      transition: color 0.2s;
    }
    .intro-container h2:hover {
      color: #00ff00;
    }
    /* تأثير الكتابة بأسلوب التيرمنال */
    .terminal {
      font-family: "Courier New", monospace;
      font-size: 18px;
      color: #00ff00;
      background-color: #000;
      padding: 10px;
      display: inline-block;
      border-radius: 5px;
      box-shadow: 0 0 10px #00ff00;
      margin-top: 20px;
    }
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
    /* الكانفاس لخلفية الحركة */
    canvas {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 0;
    }
  </style>
@endsection

@section('admin')
  <!-- المحتوى التعريفي -->
  <div class="intro-container animate__animated animate__fadeInUp">
    <h1 class="animate__animated animate__fadeInDown">Welcome to My Portfolio!</h1>
    <div class="terminal">
      <span id="typing-text"></span><span class="cursor">|</span>
    </div>
    <!-- <h2 class="animate__animated animate__backInLeft animate__delay-1s" onclick="goToPortfolio()">Portfolio!</h2> -->
  </div>

  <!-- canvas لخلفية الحركة -->
  <canvas id="physicsCanvas"></canvas>
@endsection

@section('scripts')
  <!-- Matter.js Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js"></script>
  <script>
    // تأثير الكتابة
    const text = "I'm Shami, a passionate back-end developer crafting smooth server-side solutions.";
    let index = 0;
    function typeEffect() {
      if (index < text.length) {
        document.getElementById("typing-text").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeEffect, 50);
      }
    }
    window.onload = typeEffect;

    function goToPortfolio() {
      window.location.href = "portfolio.html"; // حدّث الرابط حسب الحاجة
    }

    // إعداد Matter.js
    const { Engine, Render, Runner, World, Bodies, Events, Body } = Matter;
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
        background: 'transparent'
      }
    });
    Render.run(render);
    const runner = Runner.create();
    Runner.run(runner, engine);

    // تعريف التقنيات واللغات مع ألوان مميزة
    const technologies = [
      { name: 'PHP', color: '#2c2c54' },
      { name: 'Laravel', color: '#40407a' },
      { name: 'MySQL', color: '#706fd3' },
      { name: 'HTML', color: '#3dc1d3' },
      { name: 'CSS', color: '#34ace0' },
      { name: 'Bootstrap', color: '#33d9b2' },
      { name: 'JavaScript', color: '#ff5252' }
    ];

    // إنشاء الكرات مع أسماء التقنيات
    const balls = technologies.map((tech) => {
      const size = 80;
      const ball = Bodies.circle(
        Math.random() * window.innerWidth,
        Math.random() * window.innerHeight,
        size / 2,
        { restitution: 1, friction: 0, frictionAir: 0.02, render: { fillStyle: tech.color } }
      );
      ball.customLabel = tech.name;
      return ball;
    });
    World.add(world, balls);

    // إضافة حدود للشاشة
    const boundaries = [
      Bodies.rectangle(window.innerWidth / 2, 0, window.innerWidth, 10, { isStatic: true }),
      Bodies.rectangle(window.innerWidth / 2, window.innerHeight, window.innerWidth, 10, { isStatic: true }),
      Bodies.rectangle(0, window.innerHeight / 2, 10, window.innerHeight, { isStatic: true }),
      Bodies.rectangle(window.innerWidth, window.innerHeight / 2, 10, window.innerHeight, { isStatic: true })
    ];
    World.add(world, boundaries);

    // تتبع حركة الماوس لتطبيق تأثير الجذب مع تأخير (هيستريسي)
    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    window.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
    });

    // تطبيق قوة جذب على الكرات نحو مؤشر الماوس
    Events.on(engine, 'beforeUpdate', function() {
      balls.forEach((ball) => {
        const dx = mouseX - ball.position.x;
        const dy = mouseY - ball.position.y;
        const forceMagnitude = 0.00005; // اضبط قيمة القوة حسب الرغبة
        Body.applyForce(ball, ball.position, { x: dx * forceMagnitude, y: dy * forceMagnitude });
      });
    });

    // رسم الكرات والنصوص عليها باستخدام canvas (تحديث مخصص)
    const context = canvas.getContext('2d');
    function renderBalls() {
      context.clearRect(0, 0, canvas.width, canvas.height);
      balls.forEach((ball) => {
        const pos = ball.position;
        // رسم الدائرة
        context.beginPath();
        context.arc(pos.x, pos.y, 40, 0, 2 * Math.PI);
        context.fillStyle = ball.render.fillStyle;
        context.fill();
        context.closePath();
        // رسم اسم التقنية داخل الدائرة
        context.font = '16px Arial';
        context.fillStyle = '#fff';
        context.textAlign = 'center';
        context.textBaseline = 'middle';
        context.fillText(ball.customLabel, pos.x, pos.y);
      });
      requestAnimationFrame(renderBalls);
    }
    renderBalls();

    // تحديث حجم الكانفاس عند تغيير حجم النافذة
    window.addEventListener('resize', () => {
      render.canvas.width = window.innerWidth;
      render.canvas.height = window.innerHeight;
    });
  </script>
@endsection
