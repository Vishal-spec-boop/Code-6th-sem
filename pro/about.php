<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | Code Nest</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            background:
                radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.12), transparent 60%),
                radial-gradient(circle at 100% 100%, rgba(244, 114, 182, 0.16), transparent 60%),
                #020617;
            color: #e5e7eb;
        }

        /* Navbar - unified with home.php */
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
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.5);
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


        .about-container {
            max-width: 1000px;
            margin: 40px auto 52px;
            background:
                radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.18), transparent 55%),
                radial-gradient(circle at 100% 0, rgba(129, 140, 248, 0.12), transparent 55%),
                rgba(15, 23, 42, 0.96);
            padding: 38px 34px 34px;
            border-radius: 20px;
            box-shadow:
                0 24px 60px rgba(15, 23, 42, 1),
                0 0 0 1px rgba(148, 163, 184, 0.45);
        }

        .about-header {
            text-align: center;
            margin-bottom: 24px;
        }

        .about-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.6);
            font-size: 11px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: #9ca3af;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #e5e7eb, #a5b4fc);
            -webkit-background-clip: text;
            color: transparent;
        }

        .intro {
            font-size: 16px;
            text-align: center;
            margin-bottom: 6px;
            color: #cbd5f5;
        }

        .intro span {
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: 700;
        }

        .about-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.4fr) minmax(0, 1fr);
            gap: 26px;
            margin-top: 26px;
        }

        .about-column h2 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #e5e7eb;
        }

        p {
            font-size: 15px;
            line-height: 1.7;
            color: #9ca3af;
            margin-bottom: 12px;
        }

        ul {
            margin: 0;
            padding-left: 18px;
        }

        ul li {
            font-size: 15px;
            margin-bottom: 8px;
            color: #cbd5f5;
        }

        .about-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 26px;
            border-top: 1px dashed rgba(148, 163, 184, 0.5);
            padding-top: 18px;
        }

        .about-stat {
            flex: 1;
            min-width: 180px;
            font-size: 13px;
            color: #9ca3af;
        }

        .about-stat strong {
            display: block;
            font-size: 16px;
            color: #e5e7eb;
            margin-bottom: 2px;
        }

        .about-steps {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 30px;
        }

        .about-step {
            padding: 16px 14px 14px;
            border-radius: 14px;
            background: rgba(15, 23, 42, 0.96);
            border: 1px solid rgba(55, 65, 81, 0.9);
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.9);
            font-size: 13px;
            color: #9ca3af;
        }

        .about-step-title {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 6px;
            color: #e5e7eb;
            font-size: 14px;
            font-weight: 600;
        }

        .about-step-badge {
            width: 22px;
            height: 22px;
            border-radius: 999px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            background: radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.4), transparent 60%);
            border: 1px solid rgba(129, 140, 248, 0.9);
            color: #e5e7eb;
        }

        /* Footer */
        footer {
            background:
                radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.15), transparent 60%),
                #020617;
            color: #9ca3af;
            padding: 20px 8% 18px;
            border-top: 1px solid #111827;
            font-size: 13px;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 4px;
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
        @media (max-width: 750px) {
            .about-container {
                margin: 24px auto 36px;
                padding: 26px 20px 26px;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .about-steps {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
    <h1>CodeNest</h1>
    <nav>
        <a href="home.php">Home</a>
        <a href="course.php">Courses</a>
        <a href="about.php" class="active">About</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
    </nav>
</header>

    <div class="about-container">
        <div class="about-header">
            <span class="about-badge">ABOUT CODENEST</span>
            <h1>About Us</h1>

            <p class="intro">
                Welcome to <span>Code Nest</span> – your home for learning coding online.
            </p>
        </div>

        <div class="about-grid">
            <div class="about-column">
                <h2>Our mission</h2>
                <p>
                    Code Nest is an online code learning platform created to help students,
                    beginners, and professionals learn programming in a simple, practical,
                    and interactive way. Our goal is to make coding accessible and easy to
                    understand for everyone.
                </p>

                <p>
                    At Code Nest, we emphasize step-by-step tutorials, real-world examples,
                    and hands-on practice. Learners can build strong foundations and gain
                    confidence by applying concepts through exercises and mini projects.
                </p>

                <p>
                    Our mission is to build a supportive learning community by providing
                    high-quality content, industry-relevant skills, and a platform that
                    encourages continuous growth and innovation.
                </p>
            </div>

            <div class="about-column">
                <h2>Why Choose Code Nest?</h2>
                <ul>
                    <li>Beginner-friendly coding lessons</li>
                    <li>Project-based and practical learning</li>
                    <li>Learn anytime, anywhere</li>
                    <li>Industry-focused and updated content</li>
                    <li>Clean and user-friendly interface</li>
                </ul>
            </div>
        </div>

        <div class="about-steps">
            <div class="about-step">
                <div class="about-step-title">
                    <span class="about-step-badge">1</span>
                    Start with the basics
                </div>
                Begin with clear, beginner‑friendly lessons that introduce core concepts in HTML, CSS, JavaScript, and Python.
            </div>
            <div class="about-step">
                <div class="about-step-title">
                    <span class="about-step-badge">2</span>
                    Build real projects
                </div>
                Apply what you learn by building guided mini‑projects, dashboards, and apps you can showcase in your portfolio.
            </div>
            <div class="about-step">
                <div class="about-step-title">
                    <span class="about-step-badge">3</span>
                    Level up for jobs
                </div>
                Practice interview‑style questions, data structures, and algorithms to become confident for placements and tech roles.
            </div>
        </div>

        <div class="about-stats">
            <div class="about-stat">
                <strong>Practice‑first</strong>
                Learn by building projects, not just watching videos.
            </div>
            <div class="about-stat">
                <strong>Job‑ready skills</strong>
                Concepts and tools that map directly to real dev roles.
            </div>
            <div class="about-stat">
                <strong>Learn at your pace</strong>
                Flexible, self‑paced lessons you can revisit anytime.
            </div>
        </div>
    </div>

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
