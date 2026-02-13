<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courses | Code Nest</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background:
                radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.12), transparent 60%),
                radial-gradient(circle at 100% 100%, rgba(244, 114, 182, 0.16), transparent 60%),
                #020617;
            color: #e5e7eb;
        }

        /* Header / Nav - same as home.php */
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

        /* Page heading */
        .page-hero {
            padding: 34px 8% 10px;
            text-align: center;
        }

        .page-hero h2 {
            font-size: 30px;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #e5e7eb, #a5b4fc);
            -webkit-background-clip: text;
            color: transparent;
        }

        .page-hero p {
            color: #9ca3af;
            font-size: 14px;
        }

        .container {
            width: 90%;
            margin: 30px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .course-card {
            background:
                radial-gradient(circle at 0 0, rgba(59, 130, 246, 0.25), transparent 55%),
                rgba(15, 23, 42, 0.95);
            border-radius: 16px;
            box-shadow:
                0 18px 40px rgba(15, 23, 42, 0.9),
                0 0 0 1px rgba(148, 163, 184, 0.35);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-content {
            padding: 20px;
        }

        .course-content h2 {
            color: #e5e7eb;
            margin-bottom: 10px;
        }

        .course-content p {
            font-size: 14px;
            color: #9ca3af;
            margin-bottom: 15px;
        }

        video {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: #0b1024;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            color: white;
            text-decoration: none;
            border-radius: 999px;
            font-size: 14px;
            box-shadow: 0 14px 26px rgba(15, 23, 42, 0.9);
        }

        .btn:hover {
            filter: brightness(1.06);
        }

        /* Footer - same as home.php */
        footer {
            background:
                radial-gradient(circle at 0 0, rgba(56, 189, 248, 0.15), transparent 60%),
                #020617;
            color: #9ca3af;
            padding: 22px 8% 18px;
            border-top: 1px solid #111827;
            font-size: 13px;
            margin-top: 40px;
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
    /* Tabs and sections */
        .tabs {
            width: 90%;
            margin: 16px auto 0;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .tab-button {
            padding: 10px 14px;
            border-radius: 999px;
            border: 1px solid rgba(148,163,184,0.35);
            background: rgba(15,23,42,0.85);
            color: #e5e7eb;
            cursor: pointer;
            font-size: 14px;
            box-shadow: 0 8px 18px rgba(15,23,42,0.8);
        }
        .tab-button.active {
            border-color: rgba(129,140,248,0.95);
            background: linear-gradient(135deg, rgba(255,110,196,0.12), rgba(120,115,245,0.12));
        }

        .sections {
            width: 90%;
            margin: 16px auto 30px;
        }
        .section {
            display: none;
            background:
                radial-gradient(circle at 0 0, rgba(59,130,246,0.25), transparent 55%),
                rgba(15,23,42,0.95);
            border-radius: 16px;
            box-shadow:
                0 18px 40px rgba(15,23,42,0.9),
                0 0 0 1px rgba(148,163,184,0.35);
            padding: 20px;
        }
        .section.active { display: block; }
        
        #section-php {
            background:
                radial-gradient(circle at 0 0, rgba(120, 115, 245, 0.25), transparent 55%),
                rgba(15, 23, 42, 0.95);
        }

        .section h3 { margin-bottom: 8px; }
        .theory {
            color: #9ca3af;
            font-size: 14px;
            margin-bottom: 16px;
            line-height: 1.6;
        }
        .section-inner {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 18px;
        }
        @media (max-width: 900px) {
            .section-inner { grid-template-columns: 1fr; }
        }
        .player-wrapper {
            background: #0b1024;
            border: 1px solid rgba(148,163,184,0.2);
            border-radius: 12px;
            overflow: hidden;
            aspect-ratio: 16/9; /* keeps the wrapper responsive while preserving 16:9 */
        }
        .player-wrapper .video-player {
            width: 100%;
            height: 100%;
            display: block;
            background: #0b1024;
            border: 0;
        }
        /* When using a <video> element, cover to crop letterboxing */
        .player-wrapper video.video-player { object-fit: cover; }
        .playlist {
            background:
                radial-gradient(circle at 0 0, rgba(56,189,248,0.08), transparent 55%),
                rgba(2,6,23,0.6);
            border: 1px solid rgba(148,163,184,0.2);
            border-radius: 12px;
            padding: 12px;
            max-height: 380px;
            overflow: auto;
        }
        .playlist-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            margin-bottom: 8px;
            border-radius: 10px;
            cursor: pointer;
            background: rgba(15,23,42,0.6);
            border: 1px solid rgba(148,163,184,0.18);
            color: #e5e7eb;
            font-size: 14px;
        }
        .meta {
            display: flex;
            gap: 8px;
            margin-top: 4px;
            font-size: 12px;
            color: #cbd5e1;
        }
        .badge {
            padding: 2px 8px;
            border-radius: 999px;
            border: 1px solid rgba(148,163,184,0.35);
            background: rgba(2,6,23,0.6);
        }
        .badge.difficulty-beginner { border-color: rgba(34,197,94,0.6); color: #86efac; }
        .badge.difficulty-intermediate { border-color: rgba(234,179,8,0.6); color: #fde68a; }
        .badge.difficulty-advanced { border-color: rgba(239,68,68,0.6); color: #fecaca; }
        .stars { color: #fbbf24; letter-spacing: 1px; }
        .playlist form.playlist-item { cursor: default; }
        .playlist form.playlist-item:hover { background: rgba(15,23,42,0.6); }
        .playlist input[type="text"]:focus { outline: none; border-color: rgba(129,140,248,0.8); }
        .playlist-item:hover { background: rgba(15,23,42,0.8); }
        .playlist-item.active {
            border-color: rgba(129,140,248,0.95);
            background: linear-gradient(135deg, rgba(255,110,196,0.10), rgba(120,115,245,0.10));
        }
        .thumb {
            width: 60px;
            height: 40px;
            background: #111827;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 6px;
            border: 1px solid rgba(148,163,184,0.2);
        }
    </style>
</head>
<body>

<header>
    <h1>CodeNest</h1>
    <nav>
        <a href="home.php">Home</a>
        <a href="course.php" class="active">Courses</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>
        <a href="signup.php">Sign Up</a>
    </nav>
</header>

<div class="page-hero">
    <h2>Our Courses</h2>
    <p>Choose a track and start learning with CodeNest.</p>
</div>

<div class="tabs">
    <button class="tab-button active" data-target="html">HTML</button>
    <button class="tab-button" data-target="css">CSS</button>
    <button class="tab-button" data-target="java">Java</button>
    <button class="tab-button" data-target="javascript">JavaScript</button>
    <button class="tab-button" data-target="php">PHP</button>
    <button class="tab-button" data-target="python">Python</button>
</div>

<div class="sections">
    <!-- HTML Section -->
    <section class="section active" id="section-html">
        <h3>HTML - HyperText Markup Language</h3>
        <p class="theory">
            HTML provides the skeletal structure of web pages using elements like headings, paragraphs, links, images,
            lists, forms, and semantic tags. Mastering HTML means understanding document structure, accessibility
            attributes (alt, aria-*), forms and validation, and semantic layout with header, nav, main, section, article,
            aside, and footer.
        </p>
        <div class="section-inner">
            <div class="player-wrapper">
                <iframe class="video-player" src="https://www.youtube.com/embed/NAKqKGgmksM" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="playlist">
                <!-- Add YouTube links directly in code: set data-src to any YouTube URL (watch, youtu.be, shorts, or playlist). -->
                <div class="playlist-item active" data-src="https://www.youtube.com/embed/NAKqKGgmksM" data-difficulty="Beginner" data-rating="4.8">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1517411032315-54ef2cb783bb?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Intro to HTML & Document Structure
                        <div class="meta">
                            <span class="badge difficulty-beginner">Beginner</span>
                            <span class="stars" aria-label="Rating 4.8 out of 5">★★★★★</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/Nk-OipVo1sw?si=ONe1xKeqBkmRvKzC" data-difficulty="Beginner" data-rating="4.6">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1483058712412-4245e9b90334?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Text, Links, and Images
                        <div class="meta">
                            <span class="badge difficulty-beginner">Beginner</span>
                            <span class="stars" aria-label="Rating 4.6 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/e4Yxc9FPHdc?si=rES_VSnnbDvbmRdx" data-difficulty="Intermediate" data-rating="4.7">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Lists, Tables, and Semantic Tags
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.7 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/ttNqr6tU4p8?si=NHBuNgyHbqweuiRf" data-difficulty="Advanced" data-rating="4.5">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Forms and Validation
                        <div class="meta">
                            <span class="badge difficulty-advanced">Advanced</span>
                            <span class="stars" aria-label="Rating 4.5 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CSS Section -->
    <section class="section" id="section-css">
        <h3>CSS - Cascading Style Sheets</h3>
        <p class="theory">
            CSS styles and lays out web pages. Learn the box model, selectors, specificity, flexbox, grid, responsive
            design with media queries, and modern features like custom properties and container queries.
        </p>
        <div class="section-inner">
            <div class="player-wrapper">
                <iframe class="video-player" src="https://youtu.be/rIO5326FgPE?si=I4R42bSpGAIzqPb9" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="playlist">
                <!-- Add YouTube links directly in code: set data-src to any YouTube URL (watch, youtu.be, shorts, or playlist). -->
                <div class="playlist-item active" data-src="https://youtu.be/rIO5326FgPE?si=I4R42bSpGAIzqPb9" data-difficulty="Beginner" data-rating="4.7">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1520975922284-5e0b5d6f3c5a?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Selectors, Specificity, and the Box Model
                        <div class="meta">
                            <span class="badge difficulty-beginner">Beginner</span>
                            <span class="stars" aria-label="Rating 4.7 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/phWxA89Dy94?si=PYATGngM8rmVcbUc" data-difficulty="Intermediate" data-rating="4.6">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Flexbox Deep Dive
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.6 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/9zBsdzdE4sM" data-difficulty="Intermediate" data-rating="4.7">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1505685296765-3a2736de412f?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        CSS Grid Layout
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.7 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/K24lUqcT0Ms?si=IcQz9PMAGYsiKjb7" data-difficulty="Intermediate" data-rating="4.5">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1496317556649-f930d733eea0?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Responsive Design & Media Queries
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.5 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Java Section -->
    <section class="section" id="section-java">
        <h3>Java - Object-Oriented Programming</h3>
        <p class="theory">
            Java is a statically-typed OOP language. Key topics include classes/objects, inheritance, interfaces,
            collections, exceptions, streams, and building backend services with Spring.
        </p>
        <div class="section-inner">
            <div class="player-wrapper">
                <iframe class="video-player" src="https://www.youtube.com/embed/UmnCZ7-9yDY" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="playlist">
                <!-- Add YouTube links directly in code: set data-src to any YouTube URL (watch, youtu.be, shorts, or playlist). -->
                <div class="playlist-item active" data-src="https://www.youtube.com/watch?v=UmnCZ7-9yDY" data-difficulty="Beginner" data-rating="4.8">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Java Basics: Types, Control Flow
                        <div class="meta">
                            <span class="badge difficulty-beginner">Beginner</span>
                            <span class="stars" aria-label="Rating 4.8 out of 5">★★★★★</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/hBh_CC5y8-s" data-difficulty="Intermediate" data-rating="4.7">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        OOP: Classes, Inheritance, Interfaces
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.7 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://www.youtube.com/watch?v=KkMDCCdjyW8" data-difficulty="Intermediate" data-rating="4.6">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Collections & Generics
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.6 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://www.youtube.com/watch?v=t1-YZ6bF-g0" data-difficulty="Advanced" data-rating="4.5">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Streams and Exceptions
                        <div class="meta">
                            <span class="badge difficulty-advanced">Advanced</span>
                            <span class="stars" aria-label="Rating 4.5 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript Section -->
    <section class="section" id="section-javascript">
        <h3>JavaScript - The Language of the Web</h3>
        <p class="theory">
            JavaScript adds interactivity to web pages. Learn variables, scopes, functions, DOM, async/await, promises,
            modules, and modern tooling.
        </p>
        <div class="section-inner">
            <div class="player-wrapper">
                <iframe class="video-player" src="https://www.youtube.com/embed/W6NZfCO5SIk" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="playlist">
                <!-- Add YouTube links directly in code: set data-src to any YouTube URL (watch, youtu.be, shorts, or playlist). -->
                <div class="playlist-item active" data-src="https://www.youtube.com/watch?v=W6NZfCO5SIk" data-difficulty="Beginner" data-rating="4.8">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        JS Fundamentals
                        <div class="meta">
                            <span class="badge difficulty-beginner">Beginner</span>
                            <span class="stars" aria-label="Rating 4.8 out of 5">★★★★★</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/5fb2aPlgoys" data-difficulty="Beginner" data-rating="4.6">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        DOM Manipulation
                        <div class="meta">
                            <span class="badge difficulty-beginner">Beginner</span>
                            <span class="stars" aria-label="Rating 4.6 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://www.youtube.com/watch?v=PoRJizFvM7s" data-difficulty="Intermediate" data-rating="4.7">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Async JavaScript: Promises & Fetch
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.7 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://www.youtube.com/watch?v=cRHQNNcYf6s" data-difficulty="Intermediate" data-rating="4.5">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Modules and Tooling
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.5 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PHP Section -->
    <section class="section" id="section-php">
        <h3>PHP - Server-side Scripting</h3>
        <p class="theory">
            PHP powers dynamic websites and APIs. Learn syntax, forms handling, sessions, working with databases, and
            building MVC applications.
        </p>
        <div class="section-inner">
            <div class="player-wrapper">
                <iframe class="video-player" src="https://www.youtube.com/embed/OK_JCtrrv-c" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="playlist">
                <!-- Add YouTube links directly in code: set data-src to any YouTube URL (watch, youtu.be, shorts, or playlist). -->
                <div class="playlist-item active" data-src="https://www.youtube.com/watch?v=OK_JCtrrv-c" data-difficulty="Beginner" data-rating="4.7">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1599507593499-a3f7d7d97663?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        PHP Basics
                        <div class="meta">
                            <span class="badge difficulty-beginner">Beginner</span>
                            <span class="stars" aria-label="Rating 4.7 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/zZ6vybT1HQs" data-difficulty="Intermediate" data-rating="4.6">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1599507593499-a3f7d7d97663?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Forms, Sessions, Cookies
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.6 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://www.youtube.com/watch?v=HXV3zeQKqGY" data-difficulty="Intermediate" data-rating="4.6">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1599507593499-a3f7d7d97663?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        MySQL with PDO/MySQLi
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.6 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://www.youtube.com/watch?v=OsW6dFfQYs8" data-difficulty="Advanced" data-rating="4.5">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1599507593499-a3f7d7d97663?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Building a Mini MVC
                        <div class="meta">
                            <span class="badge difficulty-advanced">Advanced</span>
                            <span class="stars" aria-label="Rating 4.5 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Python Section -->
    <section class="section" id="section-python">
        <h3>Python - Versatile and Powerful</h3>
        <p class="theory">
            Python is great for scripting, web, data, and automation. Learn data types, functions, OOP, file I/O,
            virtualenv, and popular libraries.
        </p>
        <div class="section-inner">
            <div class="player-wrapper">
                <iframe class="video-player" src="https://www.youtube.com/embed/rfscVS0vtbw" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="playlist">
                <!-- Add YouTube links directly in code: set data-src to any YouTube URL (watch, youtu.be, shorts, or playlist). -->
                <div class="playlist-item active" data-src="https://www.youtube.com/watch?v=rfscVS0vtbw" data-difficulty="Beginner" data-rating="4.8">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Python Basics
                        <div class="meta">
                            <span class="badge difficulty-beginner">Beginner</span>
                            <span class="stars" aria-label="Rating 4.8 out of 5">★★★★★</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://youtu.be/kqtD5dpn9C8" data-difficulty="Intermediate" data-rating="4.7">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1516245834210-c4c142787335?auto=format&fit=crop&w=200&q=60');"></div>
                    <div class="playlist-text">
                        Data Structures
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.7 out of 5">��★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://www.youtube.com/watch?v=HGOBQPFzWKo" data-difficulty="Intermediate" data-rating="4.6">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        Functions and Modules
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.6 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
                <div class="playlist-item" data-src="https://www.youtube.com/watch?v=E-2ocmhF03w" data-difficulty="Intermediate" data-rating="4.5">
                    <div class="thumb" style="background-image:url('https://images.unsplash.com/photo-1542831371-d531d36971e6?auto=format&fit=crop&w=200&q=60');"></div>
                    <div>
                        OOP and Files
                        <div class="meta">
                            <span class="badge difficulty-intermediate">Intermediate</span>
                            <span class="stars" aria-label="Rating 4.5 out of 5">★★★★☆</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
// Tab switching
const tabButtons = document.querySelectorAll('.tab-button');
const sections = {
  html: document.getElementById('section-html'),
  css: document.getElementById('section-css'),
  java: document.getElementById('section-java'),
  javascript: document.getElementById('section-javascript'),
  php: document.getElementById('section-php'),
  python: document.getElementById('section-python')
};

function setActiveTab(key) {
  // buttons
  tabButtons.forEach(btn => btn.classList.toggle('active', btn.dataset.target === key));
  // sections
  Object.entries(sections).forEach(([k, sec]) => {
    if (!sec) return;
    sec.classList.toggle('active', k === key);
  });
}

tabButtons.forEach(btn => {
  btn.addEventListener('click', () => setActiveTab(btn.dataset.target));
});

// Convert YouTube links to embed URL
function toYouTubeEmbed(url) {
  try {
    const u = new URL(url);
    if (u.hostname.includes('youtu.be')) {
      const id = u.pathname.split('/').filter(Boolean)[0];
      const t = u.searchParams.get('t') || u.searchParams.get('start');
      return `https://www.youtube.com/embed/${id}${t ? `?start=${parseInt(t,10)}` : ''}`;
    }
    if (u.hostname.includes('youtube.com')) {
      const id = u.searchParams.get('v');
      const list = u.searchParams.get('list');
      const start = u.searchParams.get('t') || u.searchParams.get('start');
      if (list && !id) return `https://www.youtube.com/embed/videoseries?list=${list}`;
      if (id) return `https://www.youtube.com/embed/${id}${start ? `?start=${parseInt(start,10)}` : ''}`;
      if (u.pathname.startsWith('/shorts/')) {
        const sid = u.pathname.split('/').filter(Boolean)[1];
        return `https://www.youtube.com/embed/${sid}`;
      }
    }
  } catch(e) {}
  return url;
}

// Playlist interaction per section
Object.values(sections).forEach(section => {
  if (!section) return;
  const player = section.querySelector('.video-player');
  const items = section.querySelectorAll('.playlist-item');
  items.forEach(item => {
    if (item.tagName.toLowerCase() === 'form') return; // skip form row
    item.addEventListener('click', () => {
      items.forEach(i => i.classList.remove('active'));
      item.classList.add('active');
      const src = item.getAttribute('data-src');
      if (player && src) {
        const tag = player.tagName.toLowerCase();
        player.src = tag === 'iframe' ? toYouTubeEmbed(src) : src;
        if (tag === 'video') {
          player.play().catch(() => {});
        }
      }
    });
  });

  });
/* Activate tab from URL (?tab=html) or hash (#section-html) */
(function() {
  try {
    const params = new URLSearchParams(window.location.search);
    const t = params.get('tab');
    if (t && sections[t]) setActiveTab(t);
    const h = (location.hash || '').replace('#', '');
    if (h.startsWith('section-')) {
      const key = h.split('-')[1];
      if (sections[key]) setActiveTab(key);
    }
  } catch(e) {}
})();
</script>

</body>
</html>
