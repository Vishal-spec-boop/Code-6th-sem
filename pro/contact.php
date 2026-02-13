<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Code Nest</title>

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

        /* Navbar - consistent with about.php */
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

        /* Container - visually aligned with About page */
        .contact-container {
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

        .contact-header {
            text-align: center;
            margin-bottom: 24px;
        }

        .contact-badge {
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

        .contact-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(0, 0.8fr);
            gap: 26px;
            margin-top: 26px;
        }

        /* Form */
        .contact-card {
            padding: 18px 16px 16px;
            border-radius: 16px;
            background: rgba(15, 23, 42, 0.96);
            border: 1px solid rgba(55, 65, 81, 0.9);
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.9);
        }

        .contact-card h2 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #e5e7eb;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        label {
            font-size: 13px;
            color: #9ca3af;
            margin-bottom: 6px;
            display: block;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px 12px;
            border-radius: 12px;
            border: 1px solid rgba(55, 65, 81, 0.9);
            background: rgba(2, 6, 23, 0.7);
            color: #e5e7eb;
            outline: none;
            font-size: 14px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        input:focus, textarea:focus, select:focus {
            border-color: rgba(129, 140, 248, 0.95);
            box-shadow: 0 0 0 3px rgba(129, 140, 248, 0.2);
            background: rgba(2, 6, 23, 0.9);
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        .field { margin-bottom: 12px; }

        .btn-primary {
            appearance: none;
            border: none;
            cursor: pointer;
            padding: 12px 16px;
            border-radius: 12px;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            box-shadow: 0 14px 30px rgba(15, 23, 42, 1);
            transition: filter 0.15s ease, transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-primary:hover {
            filter: brightness(1.06);
            transform: translateY(-1px);
            box-shadow: 0 18px 40px rgba(15, 23, 42, 1);
        }

        /* Info */
        .info-card {
            padding: 18px 16px 16px;
            border-radius: 16px;
            background: rgba(15, 23, 42, 0.96);
            border: 1px solid rgba(55, 65, 81, 0.9);
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.9);
            font-size: 14px;
            color: #9ca3af;
        }

        .info-item { margin-bottom: 14px; }
        .info-item strong { color: #e5e7eb; display: block; margin-bottom: 4px; }
        .info-item a { color: #a5b4fc; text-decoration: none; }
        .info-item a:hover { color: #c7d2fe; }

        .map-card {
            margin-top: 14px;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(55, 65, 81, 0.9);
        }

        /* Footer - same visual language */
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

        .footer-brand { font-size: 13px; }
        .footer-brand strong {
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            -webkit-background-clip: text;
            color: transparent;
        }

        .footer-links { display: flex; gap: 14px; flex-wrap: wrap; }
        .footer-links a { color: #9ca3af; text-decoration: none; font-size: 12px; }
        .footer-links a:hover { color: #e5e7eb; }
        .footer-copy { font-size: 12px; color: #6b7280; }

        /* Responsive */
        @media (max-width: 750px) {
            .contact-container {
                margin: 24px auto 36px;
                padding: 26px 20px 26px;
            }

            .contact-grid { grid-template-columns: 1fr; }
            .form-row { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
<header>
    <h1>CodeNest</h1>
    <nav>
        <a href="home.php">Home</a>
        <a href="course.php">Courses</a>
        <a href="about.php">About</a>
        <a href="contact.php" class="active">Contact</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
    </nav>
</header>

<div class="contact-container">
    <div class="contact-header">
        <span class="contact-badge">GET IN TOUCH</span>
        <h1>Contact Us</h1>
        <p class="intro">Questions, feedback, or partnership ideas? <span>We'd love to hear from you.</span></p>
    </div>

    <div class="contact-grid">
        <!-- Contact form -->
        <div class="contact-card">
            <h2>Send us a message</h2>
            <form method="post" action="#" onsubmit="return handleSubmit(event)">
                <div class="form-row field">
                    <div>
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter yr name" required />
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="xyz@gmail.com" required />
                    </div>
                </div>

                <div class="field">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="How can we help?" required />
                </div>

                <div class="field">
                    <label for="topic">Topic</label>
                    <select id="topic" name="topic">
                        <option>General</option>
                        <option>Courses</option>
                        <option>Vedio</option>
                        <option>Topic</option>
                        <option>Support</option>
                    </select>
                </div>

                <div class="field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Write your message..." required></textarea>
                </div>

                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </div>

        <!-- Contact info -->
        <div>
            <div class="info-card">
                <div class="info-item">
                    <strong>Email</strong>
                    <a href="mailto:support@codenest.example">support@codenest.example</a>
                </div>
                <div class="info-item">
                    <strong>Phone</strong>
                    +91 6001346415
                </div>
                <div class="info-item">
                    <strong>Hours</strong>
                    Mon–Sat · 10:00 AM – 6:00 PM IST
                </div>
                <div class="info-item">
                    <strong>Address</strong>
                    CodeNest, Banglore, India
                </div>
            </div>

            <div class="map-card">
                <iframe title="Map" src="https://www.openstreetmap.org/export/embed.html?bbox=77.5%2C12.8%2C77.7%2C13.0&amp;layer=mapnik" style="border:0; width:100%; height:220px; filter: contrast(1.05) saturate(1.05);"></iframe>
            </div>
        </div>
    </div>

    <!-- Quick help steps (mirroring About aesthetics) -->
    <div class="about-steps" style="margin-top: 30px; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px;">
        <div class="about-step" style="padding: 16px 14px 14px; border-radius: 14px; background: rgba(15, 23, 42, 0.96); border: 1px solid rgba(55, 65, 81, 0.9); box-shadow: 0 16px 36px rgba(15, 23, 42, 0.9); font-size: 13px; color: #9ca3af;">
            <div class="about-step-title" style="display:flex; align-items:center; gap:8px; margin-bottom:6px; color:#e5e7eb; font-size:14px; font-weight:600;">
                <span class="about-step-badge" style="width:22px; height:22px; border-radius:999px; display:flex; align-items:center; justify-content:center; font-size:12px; background: radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.4), transparent 60%); border: 1px solid rgba(129, 140, 248, 0.9); color:#e5e7eb;">1</span>
                Browse FAQs
            </div>
            Find instant answers to common questions about courses and accounts.
        </div>
        <div class="about-step" style="padding: 16px 14px 14px; border-radius: 14px; background: rgba(15, 23, 42, 0.96); border: 1px solid rgba(55, 65, 81, 0.9); box-shadow: 0 16px 36px rgba(15, 23, 42, 0.9); font-size: 13px; color: #9ca3af;">
            <div class="about-step-title" style="display:flex; align-items:center; gap:8px; margin-bottom:6px; color:#e5e7eb; font-size:14px; font-weight:600;">
                <span class="about-step-badge" style="width:22px; height:22px; border-radius:999px; display:flex; align-items:center; justify-content:center; font-size:12px; background: radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.4), transparent 60%); border: 1px solid rgba(129, 140, 248, 0.9); color:#e5e7eb;">2</span>
                Email support
            </div>
            Send details and screenshots so we can help faster.
        </div>
        <div class="about-step" style="padding: 16px 14px 14px; border-radius: 14px; background: rgba(15, 23, 42, 0.96); border: 1px solid rgba(55, 65, 81, 0.9); box-shadow: 0 16px 36px rgba(15, 23, 42, 0.9); font-size: 13px; color: #9ca3af;">
            <div class="about-step-title" style="display:flex; align-items:center; gap:8px; margin-bottom:6px; color:#e5e7eb; font-size:14px; font-weight:600;">
                <span class="about-step-badge" style="width:22px; height:22px; border-radius:999px; display:flex; align-items:center; justify-content:center; font-size:12px; background: radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.4), transparent 60%); border: 1px solid rgba(129, 140, 248, 0.9); color:#e5e7eb;">3</span>
                Join community
            </div>
            Connect with learners on our forum and share solutions.
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

<script>
    function handleSubmit(e) {
        e.preventDefault();
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();

        if (!name || !email || !subject || !message) {
            alert('Please fill out all required fields.');
            return false;
        }

        alert('Thanks, ' + name + '! Your message has been received.');
        e.target.reset();
        return false;
    }
</script>

</body>
</html>