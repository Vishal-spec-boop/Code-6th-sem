<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background:
                linear-gradient(135deg, rgba(10, 10, 40, 0.9), rgba(40, 5, 70, 0.8)),
                url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #f5f5f5;
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

        .main-container {
            height: calc(100vh - 70px);
            display: flex;
            justify-content: center;
            align-items: center;
            perspective: 1200px;
        }

        .login-box {
            position: relative;
            background: rgba(10, 10, 30, 0.8);
            padding: 40px 45px;
            width: 340px;
            border-radius: 18px;
            box-shadow:
                0 25px 60px rgba(0, 0, 0, 0.8),
                0 0 0 1px rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(16px);
            transform-style: preserve-3d;
            transform: rotateY(-8deg) rotateX(4deg);
            transition: transform 0.6s ease, box-shadow 0.6s ease, background 0.6s ease;
        }

        .login-box::before {
            content: "";
            position: absolute;
            inset: -2px;
            border-radius: 20px;
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            z-index: -2;
            opacity: 0.7;
        }

        .login-box::after {
            content: "</>";
            position: absolute;
            top: -28px;
            right: 20px;
            font-size: 32px;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.2);
            text-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
            transform: translateZ(40px);
        }

        .login-box:hover {
            transform: rotateY(0deg) rotateX(0deg) translateY(-6px);
            box-shadow:
                0 35px 80px rgba(0, 0, 0, 0.9),
                0 0 0 1px rgba(255, 255, 255, 0.12);
            background: rgba(15, 15, 40, 0.9);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #ffffff;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0 16px;
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 5px;
            font-size: 14px;
            background: rgba(10, 10, 40, 0.8);
            color: #f5f5f5;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease, background 0.3s ease;
        }

        .login-box input::placeholder {
            color: rgba(230, 230, 230, 0.6);
        }

        .login-box input:focus {
            border-color: #ff6ec4;
            box-shadow: 0 0 0 1px rgba(255, 110, 196, 0.6), 0 0 16px rgba(120, 115, 245, 0.7);
            transform: translateZ(8px);
            background: rgba(15, 15, 45, 0.9);
        }

        .login-box button {
            width: 100%;
            padding: 11px;
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            color: #ffffff;
            font-size: 15px;
            border-radius: 999px;
            cursor: pointer;
            border: none;
            letter-spacing: 0.5px;
            font-weight: bold;
            box-shadow: 0 12px 22px rgba(0, 0, 0, 0.5);
            transform: translateZ(12px);
            transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease, filter 0.2s ease;
        }

        .login-box button:hover {
            transform: translateY(-2px) translateZ(18px);
            box-shadow: 0 18px 30px rgba(0, 0, 0, 0.8);
            filter: brightness(1.05);
        }

        .login-box button:active {
            transform: translateY(1px) translateZ(6px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
        }

        .login-box p {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
            color: rgba(240, 240, 255, 0.85);
        }

        .login-box a {
            color: #ff94e0;
            text-decoration: none;
            font-weight: 500;
            position: relative;
        }

        .login-box a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            transition: width 0.3s ease;
        }

        .login-box a:hover {
            text-decoration: none;
            color: #ffffff;
        }

        .login-box a:hover::after {
            width: 100%;
        }

        /* Footer */
        footer {
            background:
                radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.15), transparent 60%),
                rgba(3, 7, 18, 0.98);
            color: #9ca3af;
            padding: 18px 8% 16px;
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
    </style>
</head>
<body>

    <header>
        <h1>CodeNest</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="course.php">Courses</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="login.php" class="active">Login</a>
            <a href="signup.php">Sign Up</a>
        </nav>
    </header>

    <div class="main-container">
        <div class="login-box">
            <h2>LOGIN</h2>
            <form action="home.php" method="post">
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="signup.php">SignUp</a></p>
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
