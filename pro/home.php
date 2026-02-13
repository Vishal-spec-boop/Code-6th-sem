<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodeLearn | Online Learning Platform</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #050715;
            color: #f5f5ff;
        }

        /* Navbar */
        header {
            position: sticky;
            top: 0;
            z-index: 50;
            background:
                radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.15), transparent 60%),
                rgba(3, 7, 18, 0.94);
            backdrop-filter: blur(14px);
            padding: 14px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(15, 23, 42, 0.9);
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.95);
        }

        header h1 {
            font-size: 24px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            background: linear-gradient(135deg, #ff6ec4, #4f46e5);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: 800;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav a {
            position: relative;
            display: inline-flex;
            align-items: center;
            padding: 8px 14px;
            margin-left: 10px;
            font-size: 14px;
            color: #e5e7eb;
            text-decoration: none;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.35);
            background: rgba(15, 23, 42, 0.85);
            box-shadow: 0 8px 18px rgba(15, 23, 42, 0.8);
            transition: background 0.2s ease, color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }

        nav a::after {
            content: "";
            position: absolute;
            left: 16px;
            right: 16px;
            bottom: 6px;
            height: 2px;
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            transform-origin: center;
            transform: scaleX(0);
            opacity: 0;
            transition: transform 0.25s ease, opacity 0.25s ease;
        }

        nav a:hover {
            background: rgba(15, 23, 42, 1);
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 12px 24px rgba(15, 23, 42, 1);
            border-color: rgba(199, 210, 254, 0.9);
        }

        nav a:hover::after {
            transform: scaleX(1);
            opacity: 1;
        }

        nav a.active {
            border-color: rgba(129, 140, 248, 0.95);
            box-shadow: 0 14px 28px rgba(15, 23, 42, 1);
        }

        nav a.active::after {
            transform: scaleX(1);
            opacity: 1;
        }

        nav a:last-child {
            border: none;
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            color: #ffffff;
            box-shadow: 0 14px 30px rgba(15, 23, 42, 1);
            font-weight: 600;
        }

        nav a:last-child:hover {
            filter: brightness(1.06);
            transform: translateY(-1px);
            box-shadow: 0 18px 40px rgba(15, 23, 42, 1);
        }

        /* Hero Section */
        .hero {
            min-height: calc(100vh - 70px);
            background:
                radial-gradient(circle at 0% 0%, rgba(120, 115, 245, 0.25), transparent 55%),
                radial-gradient(circle at 100% 100%, rgba(255, 110, 196, 0.25), transparent 55%),
                linear-gradient(135deg, #050716, #0b1024);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 8%;
            gap: 60px;
        }

        .hero-content {
            max-width: 520px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(148, 163, 184, 0.4);
            margin-bottom: 16px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #e5e7eb;
        }

        .hero-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: radial-gradient(circle, #22c55e, #16a34a);
            box-shadow: 0 0 10px rgba(34, 197, 94, 0.9);
        }

        .hero h2 {
            font-size: 42px;
            line-height: 1.15;
            margin-bottom: 18px;
        }

        .hero h2 span {
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            -webkit-background-clip: text;
            color: transparent;
        }

        .hero p {
            font-size: 17px;
            max-width: 520px;
            margin-bottom: 26px;
            color: #cbd5f5;
        }

        .hero-ctas {
            display: flex;
            gap: 14px;
            margin-bottom: 22px;
            flex-wrap: wrap;
        }

        .btn-primary,
        .btn-ghost {
            padding: 11px 22px;
            border-radius: 999px;
            font-size: 15px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            letter-spacing: 0.02em;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            color: #ffffff;
            box-shadow: 0 14px 30px rgba(15, 23, 42, 0.9);
        }

        .btn-primary:hover {
            filter: brightness(1.06);
            transform: translateY(-1px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 1);
        }

        .btn-ghost {
            background: transparent;
            color: #e5e7eb;
            border: 1px solid rgba(148, 163, 184, 0.6);
        }

        .btn-ghost:hover {
            background: rgba(15, 23, 42, 0.75);
            border-color: rgba(199, 210, 254, 0.85);
        }

        .hero-stats {
            display: flex;
            gap: 26px;
            flex-wrap: wrap;
            font-size: 13px;
            color: #9ca3af;
        }

        .hero-stats strong {
            display: block;
            font-size: 18px;
            color: #e5e7eb;
        }

        .hero-visual {
            flex: 1;
            min-width: 260px;
            max-width: 460px;
            display: flex;
            justify-content: center;
        }

        .code-panel {
            position: relative;
            width: 100%;
            max-width: 420px;
            border-radius: 20px;
            padding: 18px 18px 20px;
            background: radial-gradient(circle at 0 0, rgba(255, 255, 255, 0.1), transparent 55%),
                        rgba(15, 23, 42, 0.9);
            box-shadow:
                0 24px 60px rgba(15, 23, 42, 1),
                0 0 0 1px rgba(148, 163, 184, 0.25);
            backdrop-filter: blur(18px);
        }

        .code-panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 11px;
            color: #9ca3af;
        }

        .code-dots {
            display: flex;
            gap: 6px;
        }

        .code-dot {
            width: 9px;
            height: 9px;
            border-radius: 50%;
        }

        .code-dot.red { background: #f97373; }
        .code-dot.amber { background: #fbbf24; }
        .code-dot.green { background: #34d399; }

        .code-panel-body {
            font-family: "Consolas", "Fira Code", monospace;
            font-size: 13px;
            line-height: 1.6;
            color: #e5e7eb;
            background: radial-gradient(circle at 0 0, rgba(94, 234, 212, 0.15), transparent 55%);
            border-radius: 12px;
            padding: 14px 14px 16px;
            border: 1px solid rgba(148, 163, 184, 0.35);
        }

        .code-line {
            opacity: 0.9;
        }

        .code-line span.keyword { color: #60a5fa; }
        .code-line span.func { color: #a5b4fc; }
        .code-line span.string { color: #fbbf24; }
        .code-line span.comment { color: #6b7280; font-style: italic; }

        .code-chip-row {
            margin-top: 12px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .code-chip {
            font-size: 11px;
            padding: 4px 9px;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.95);
            border: 1px solid rgba(148, 163, 184, 0.7);
            color: #e5e7eb;
        }

        .glow-orb {
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 999px;
            background: radial-gradient(circle, rgba(96, 165, 250, 0.55), transparent 60%);
            filter: blur(2px);
            right: -40px;
            bottom: -40px;
            opacity: 0.7;
        }

        /* Courses Section */
        .courses {
            padding: 60px 8% 56px;
            text-align: center;
            background: radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.18), transparent 60%),
                        radial-gradient(circle at 100% 100%, rgba(244, 114, 182, 0.2), transparent 60%),
                        #020617;
        }

        .section-label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.18em;
            color: #9ca3af;
            margin-bottom: 10px;
        }

        .courses h2 {
            margin-bottom: 14px;
            font-size: 28px;
            color: #e5e7eb;
        }

        .section-subtitle {
            font-size: 14px;
            color: #9ca3af;
            margin-bottom: 34px;
        }

        .course-box {
            display: flex;
            justify-content: center;
            gap: 22px;
            flex-wrap: wrap;
        }

        .course {
            position: relative;
            background: radial-gradient(circle at 0 0, rgba(59, 130, 246, 0.4), transparent 55%),
                        #020617;
            padding: 22px 20px 20px;
            width: 260px;
            border-radius: 16px;
            box-shadow:
                0 18px 40px rgba(15, 23, 42, 0.9),
                0 0 0 1px rgba(148, 163, 184, 0.4);
            text-align: left;
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease, background 0.25s ease;
        }

        .course-icon {
            width: 32px;
            height: 32px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            font-size: 16px;
        }

        .course-icon.web {
            background: rgba(56, 189, 248, 0.18);
            color: #38bdf8;
        }

        .course-icon.py {
            background: rgba(52, 211, 153, 0.18);
            color: #4ade80;
        }

        .course-icon.java {
            background: rgba(251, 191, 36, 0.18);
            color: #fbbf24;
        }

        .course h3 {
            margin-bottom: 6px;
            color: #e5e7eb;
            font-size: 18px;
        }

        .course p {
            font-size: 13px;
            color: #9ca3af;
            margin-bottom: 12px;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            color: #6b7280;
        }

        .course:hover {
            transform: translateY(-8px);
            box-shadow:
                0 26px 60px rgba(15, 23, 42, 1),
                0 0 0 1px rgba(129, 140, 248, 0.9);
            background: radial-gradient(circle at 0 0, rgba(129, 140, 248, 0.5), transparent 55%),
                        #020617;
        }

        /* Most Viewed */
        .most-viewed {
            padding: 56px 8% 56px;
            background:
                radial-gradient(circle at 0 0, rgba(56,189,248,0.14), transparent 60%),
                #050715;
        }
        .most-viewed h2 {
            margin-bottom: 14px;
            font-size: 28px;
            color: #e5e7eb;
            text-align: center;
        }
        .most-grid {
            margin-top: 18px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
        }
        .mv-card {
            position: relative;
            border-radius: 14px;
            overflow: hidden;
            background: rgba(15,23,42,0.9);
            border: 1px solid rgba(148,163,184,0.35);
            box-shadow: 0 18px 40px rgba(15,23,42,0.95);
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }
        .mv-card:hover {
            transform: translateY(-4px);
            border-color: rgba(129,140,248,0.9);
            box-shadow: 0 26px 60px rgba(15,23,42,1);
        }
        .mv-cover {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            display: block;
        }
        .mv-label {
            position: absolute;
            left: 10px;
            bottom: 10px;
            background: rgba(2,6,23,0.8);
            border: 1px solid rgba(148,163,184,0.5);
            color: #e5e7eb;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 12px;
        }

        /* Why Choose Us */
        .why {
            background: #020617;
            padding: 56px 8% 60px;
            text-align: center;
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
            margin-top: 28px;
        }

        .why-card {
            background: rgba(15, 23, 42, 0.95);
            border-radius: 16px;
            padding: 20px 18px 18px;
            border: 1px solid rgba(30, 64, 175, 0.7);
            box-shadow: 0 20px 50px rgba(15, 23, 42, 0.9);
            text-align: left;
        }

        .why-card h3 {
            margin-bottom: 8px;
            color: #e5e7eb;
            font-size: 17px;
        }

        .why-card p {
            font-size: 13px;
            color: #9ca3af;
        }

        .why h2 {
            margin-bottom: 10px;
            color: #e5e7eb;
        }

        .why p.lead {
            max-width: 700px;
            margin: 0 auto;
            color: #9ca3af;
            font-size: 14px;
        }

        /* Footer */
        footer {
            background:
                radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.15), transparent 60%),
                #020617;
            color: #9ca3af;
            padding: 22px 8% 18px;
            border-top: 1px solid #111827;
            font-size: 13px;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 6px;
        }

        .footer-brand {
            font-size: 13px;
        }

        .footer-brand strong {
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            -webkit-background-clip: text;
            color: transparent;
        }

        .footer-links {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #9ca3af;
            text-decoration: none;
            font-size: 12px;
        }

        .footer-links a:hover {
            color: #e5e7eb;
        }

        .footer-copy {
            font-size: 12px;
            color: #6b7280;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                padding: 40px 6%;
                text-align: center;
            }

            .hero-content {
                align-items: center;
            }

            .hero-ctas {
                justify-content: center;
            }

            .hero-visual {
                margin-top: 26px;
            }

            .why-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .hero h2 {
                font-size: 30px;
            }

            .courses {
                padding-left: 5%;
                padding-right: 5%;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>CodeNest</h1>
    <nav>
        <a href="home.php" class="active">Home</a>
        <a href="course.php">Courses</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">
        <div class="hero-badge">
            <span class="hero-badge-dot"></span>
            LIVE & SELF-PACED CODING
        </div>
        <h2>Build real <span>developer skills</span> from your browser.</h2>
        <p>CodeNest helps you go from beginner to job‑ready with interactive lessons, projects, and interview‑level challenges in web, Python, and DSA.</p>

        <div class="hero-ctas">
            <a href="signup.php" class="btn-primary">Start learning free →</a>
            <a href="#courses" class="btn-ghost">Browse courses</a>
        </div>

        <div class="hero-stats">
            <div>
                <strong>50+ hrs</strong>
                Guided video + code labs
            </div>
            <div>
                <strong>30+ projects</strong>
                Build a real portfolio
            </div>
            <div>
                <strong>24/7</strong>
                Learn on your schedule
            </div>
        </div>
    </div>

    <div class="hero-visual">
        <div class="code-panel">
            <div class="code-panel-header">
                <div class="code-dots">
                    <span class="code-dot red"></span>
                    <span class="code-dot amber"></span>
                    <span class="code-dot green"></span>
                </div>
                <span>app/learn.js</span>
            </div>
            <div class="code-panel-body">
                <div class="code-line"><span class="keyword">const</span> stack = [<span class="string">'HTML'</span>, <span class="string">'CSS'</span>, <span class="string">'JS'</span>];</div>
                <div class="code-line"><span class="keyword">async function</span> <span class="func">startLearning</span>(user) {</div>
                <div class="code-line">&nbsp;&nbsp;<span class="keyword">await</span> <span class="func">practiceDaily</span>(stack);</div>
                <div class="code-line">&nbsp;&nbsp;<span class="keyword">return</span> <span class="string">'Full‑stack ready'</span>;</div>
                <div class="code-line">}</div>
                <div class="code-line"><span class="comment">// Tip: ship your next project from this browser tab 🚀</span></div>

                <div class="code-chip-row">
                    <span class="code-chip">Interactive editor</span>
                    <span class="code-chip">Project reviews</span>
                    <span class="code-chip">Interview prep</span>
                </div>
            </div>
            <div class="glow-orb"></div>
        </div>
    </div>
</section>

<section class="courses" id="courses">
    <div class="section-label">Learn by doing</div>
    <h2>Structured paths for modern developers</h2>
    <p class="section-subtitle">Follow guided roadmaps with real projects, quizzes, and coding challenges.</p>

    <div class="course-box">
        <div class="course">
            <div class="course-icon web">{ }</div>
            <h3>Web Development</h3>
            <p>Build responsive websites with HTML, CSS, JavaScript, and a modern front‑end stack.</p>
            <div class="course-meta">
                <span>Beginner → Advanced</span>
                <span>12 projects</span>
            </div>
        </div>
        <div class="course">
            <div class="course-icon py">Py</div>
            <h3>Python & Automation</h3>
            <p>Go from basics to APIs, data handling, and scripts that automate real‑world tasks.</p>
            <div class="course-meta">
                <span>Beginner friendly</span>
                <span>10 projects</span>
            </div>
        </div>
        <div class="course">
            <div class="course-icon java">λ</div>
            <h3>Java & DSA</h3>
            <p>Master core Java, data structures, and algorithms for coding interviews.</p>
            <div class="course-meta">
                <span>Job prep</span>
                <span>120+ problems</span>
            </div>
        </div>
    </div>
</section>

<section class="most-viewed" id="most-viewed">
    <div class="section-label" style="text-align:center">Trending now</div>
    <h2>Most Viewed Courses</h2>
    <div class="most-grid">
        <a class="mv-card" href="course.php?tab=html#section-html" aria-label="Open HTML course">
            <img class="mv-cover" src="https://images.unsplash.com/photo-1517411032315-54ef2cb783bb?q=80&w=1200&auto=format&fit=crop" alt="HTML Course Cover" />
            <span class="mv-label">HTML Essentials</span>
        </a>
        <a class="mv-card" href="course.php?tab=css#section-css" aria-label="Open CSS course">
            <img class="mv-cover" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1200&auto=format&fit=crop" alt="CSS Course Cover" />
            <span class="mv-label">Modern CSS</span>
        </a>
        <a class="mv-card" href="course.php?tab=javascript#section-javascript" aria-label="Open JavaScript course">
            <img class="mv-cover" src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=1200&auto=format&fit=crop" alt="JavaScript Course Cover" />
            <span class="mv-label">JavaScript Basics</span>
        </a>
        <a class="mv-card" href="course.php?tab=python#section-python" aria-label="Open Python course">
            <img class="mv-cover" src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=1200&auto=format&fit=crop" alt="Python Course Cover" />
            <span class="mv-label">Python Starter</span>
        </a>
    </div>
</section>

<section class="why">
    <h2>Why learners choose CodeNest</h2>
    <p class="lead">
        Learn with a clear roadmap, hands‑on practice, and projects that actually fit your resume.
    </p>

    <div class="why-grid">
        <div class="why-card">
            <h3>Practice‑first learning</h3>
            <p>Solve bite‑sized problems and ship full projects so you never get stuck in only watching videos.</p>
        </div>
        <div class="why-card">
            <h3>Portfolio‑ready projects</h3>
            <p>Every path ends with capstone projects you can demo in interviews and add to your GitHub.</p>
        </div>
        <div class="why-card">
            <h3>Skills that scale</h3>
            <p>From fundamentals to frameworks, we focus on concepts that transfer across languages and jobs.</p>
        </div>
    </div>
</section>
<footer>
    <div class="footer-inner">
        <div class="footer-brand">
            <strong>CodeNest</strong> · Learn to code with real projects.
        </div>
        <div class="footer-links">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        </div>
    </div>
    <div class="footer-copy">© 2026 CodeNest. All rights reserved.</div>
</footer>
</body>
</html>
