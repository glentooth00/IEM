<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NISU Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        /* Color Theme */
        body {
            background-color: #f0f8ff;
        }

        /* Align items right */
        .navbar-end {
            margin-left: auto;
            font-size: 15px;
            padding: 1px;
            align-items: anchor-center;
            float: inline-end;
        }

        .navbar-item {
            white-space: nowrap;
        }

        .navbar {
            background-color: #0c36a7f2;
        }

        .navbar .navbar-item {
            color: white;
        }

        /* Hero */
        .hero {
            min-height: 70vh;
            display: flex;
            align-items: center;
        }



        .hero,
        .hero-bg {
            background-image:
                linear-gradient(rgba(12, 54, 167, 0.55), rgba(12, 54, 167, 0.55)),
                url('https://scontent.fmnl25-7.fna.fbcdn.net/v/t39.30808-6/468407704_122179325132117983_3379643963890933183_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeG9ryUfTfN9LBbbF2uwCIhQ8RH0NXdXnEzxEfQ1d1ecTKAqWnzy2YNWLxnAEunjjcet5NkusaZP1-zaOqlrrT65&_nc_ohc=i2vKMaMoFO0Q7kNvwEueXER&_nc_oc=AdmYzoXcQDqroy2dRrl7zhsSelysEZSvkZNK4JaSnGZD5E95OP3PrdlYCROhdHSHH1I&_nc_zt=23&_nc_ht=scontent.fmnl25-7.fna&_nc_gid=gvCMuNnWMAnD_3bs2R_g0A&oh=00_Afvke50Hu9TY_sGtzPcPpEFdt4ZMOQLK1Nwrtsx_sDhoJQ&oe=698B2C21');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero .title,
        .hero .subtitle {
            color: #ffffff;
        }


        /* Cards */
        .card,
        .box {
            background-color: #ffffff;
        }

        /* Buttons */
        .button.is-link {
            background-color: #99ccff;
            color: #140909;
            border: none;
        }

        .button.is-link:hover {
            background-color: #80bfff;
        }

        /* News slider */
        .news-slider-wrapper {
            position: relative;
        }

        .news-slider {
            display: flex;
            gap: 1rem;
            flex-wrap: nowrap;
            scroll-behavior: smooth;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .news-slider::-webkit-scrollbar {
            display: none;
        }

        .news-card {
            min-width: 300px;
            display: flex;
            flex-direction: column;
        }

        .news-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        /* Slider arrows */
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(12, 54, 167, 0.8);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            z-index: 10;
        }

        .slider-arrow.left {
            left: 0;
        }

        .slider-arrow.right {
            right: 0;
        }

        /* Events same height */
        .events-columns {
            display: flex;
            flex-wrap: wrap;
            margin-left: 0;
            margin-right: 0;
        }

        .events-columns .column {
            display: flex;
            padding: 0.5rem;
        }

        .event-card {
            height: 100%;
        }

        /* Logo layout */
        .logo-area {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        /* Logo image */
        .logo-img {
            width: 48px;
            height: auto;
        }

        /* University name typography */
        .logo-text {
            color: #ffffff;
            font-family: "Georgia", "Times New Roman", serif;
            /* academic feel */
            font-size: 1.15rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            line-height: 1.2;
            white-space: nowrap;
        }


        .navbar-item img {
            max-height: 2.7rem;
        }

        @media screen and (min-width: 769px),
        print {

            .column.is-6,
            .column.is-6-tablet {
                width: auto;
            }
        }

        /* Floating navbar shadow on scroll */
        .navbar.is-fixed {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .navbar.is-floating {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            background-color: rgba(12, 54, 167, 0.95);
        }

        /* Section fade-in animations */
        .fade-in {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.7s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Fade in from top when scrolling up */
        .fade-in.up {
            transform: translateY(-50px);
        }

        .fade-in.up.visible {
            transform: translateY(0);
            opacity: 1;
        }



        .slider-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .slider {
            display: flex;
            transition: transform 0.8s ease-in-out;
        }

        .slide {
            min-width: 100%;
            flex-shrink: 0;
        }

        .slide img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
            border-radius: 8px;
        }

        /* Arrows */
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(12, 54, 167, 0.7);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            z-index: 10;
            font-size: 1.5rem;
            border-radius: 4px;
        }

        .slider-arrow.left {
            left: 10px;
        }

        .slider-arrow.right {
            right: 10px;
        }

        /* Dot Indicators */
        .slider-dots {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .slider-dots .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
        }

        .slider-dots .dot.active {
            background-color: #0c36a7;
        }
    </style>
</head>

<body>

    <nav class="navbar is-spaced" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item logo-area" href="#">
                <img src="public/assets/images/nisu.png" alt="Logo" class="logo-img">
                <span class="logo-text">Northern Iloilo State University</span>
            </a>
            <!-- Hamburger for mobile -->
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item">Home</a>
                <a class="navbar-item">About</a>
                <a class="navbar-item">Administration</a>
                <a class="navbar-item">Academics</a>
                <a class="navbar-item">Research and Extension</a>
                <a class="navbar-item">External Campuses</a>
                <a class="navbar-item">International Collaborations</a>
                <a class="navbar-item">Legal Affairs Office</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero hero-bg ">
        <div class="hero-body">
            <div class="container has-text-centered fade-in">
                <h1 class="title">Welcome to Global University</h1>
                <h2 class="subtitle">Empowering education, research, and innovation</h2>
            </div>
        </div>
    </section>

    <!-- Slider Section -->
    <section class="section fade-in">
        <div class="container">
            <h3 class="title is-4 has-text-weight-semibold mb-4" style="color:#2c3e50;">Campus Highlights</h3>

            <div class="slider-wrapper">
                <!-- Slider -->
                <div class="slider" id="autoSlider">
                    <div class="slide"><img
                            src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1200&q=80"
                            alt="Campus view 1"></div>
                    <div class="slide"><img
                            src="https://images.unsplash.com/photo-1579370318445-66f146e51e82?auto=format&fit=crop&w=1200&q=80"
                            alt="Campus view 2"></div>
                    <div class="slide"><img
                            src="https://images.unsplash.com/photo-1581091215368-3f3d10ab1c86?auto=format&fit=crop&w=1200&q=80"
                            alt="Campus view 3"></div>
                </div>

                <!-- Arrows -->
                <button id="prevSlide" class="slider-arrow left">&#10094;</button>
                <button id="nextSlide" class="slider-arrow right">&#10095;</button>

                <!-- Dot Indicators -->
                <div id="sliderDots" class="slider-dots"></div>
            </div>
        </div>
    </section>

    <style>
        /* Slider Wrapper */
        .slider-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Slider */
        .slider {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slide {
            min-width: 100%;
        }

        .slide img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Arrows */
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background: rgba(44, 62, 80, 0.6);
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            border-radius: 4px;
            font-size: 1.5rem;
            transition: background 0.3s ease;
        }

        .slider-arrow:hover {
            background: rgba(44, 62, 80, 0.9);
        }

        .slider-arrow.left {
            left: 10px;
        }

        .slider-arrow.right {
            right: 10px;
        }

        /* Dot Indicators */
        .slider-dots {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .slider-dots button {
            width: 10px;
            height: 10px;
            background: rgba(44, 62, 80, 0.4);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .slider-dots button.active {
            background: #2c3e50;
        }

        /* Section title */
        h3.title {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>





    <!-- News Section -->
    <section class="section fade-in">
        <div class="container">
            <h3 class="title is-4">Latest News</h3>
            <div class="news-slider-wrapper">
                <button class="slider-arrow left"
                    onclick="document.getElementById('newsSlider').scrollBy({ left: -320, behavior: 'smooth' })">&#10094;</button>

                <div class="news-slider" id="newsSlider">
                    <div class="card news-card">
                        <img
                            src="https://images.unsplash.com/photo-1477281765962-ef34e8bb0967?auto=format&fit=crop&w=600&q=80">
                        <div class="card-content">
                            <p class="title is-6">New Research Center</p>
                            <p class="content">State-of-the-art facilities focused on sustainability and innovation.</p>
                        </div>
                    </div>

                    <div class="card news-card">
                        <img
                            src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=600&q=80">
                        <div class="card-content">
                            <p class="title is-6">Academic Calendar Released</p>
                            <p class="content">Important academic dates are now available for students and staff.</p>
                        </div>
                    </div>

                    <div class="card news-card">
                        <img
                            src="https://images.unsplash.com/photo-1519452575417-564c1401ecc0?auto=format&fit=crop&w=600&q=80">
                        <div class="card-content">
                            <p class="title is-6">New Online Programs</p>
                            <p class="content">Flexible learning options designed for modern students.</p>
                        </div>
                    </div>

                    <div class="card news-card">
                        <img
                            src="https://images.unsplash.com/photo-1519452575417-564c1401ecc0?auto=format&fit=crop&w=600&q=80">
                        <div class="card-content">
                            <p class="title is-6">New Online Programs</p>
                            <p class="content">Flexible learning options designed for modern students.</p>
                        </div>
                    </div>

                    <div class="card news-card">
                        <img
                            src="https://images.unsplash.com/photo-1519452575417-564c1401ecc0?auto=format&fit=crop&w=600&q=80">
                        <div class="card-content">
                            <p class="title is-6">New Online Programs</p>
                            <p class="content">Flexible learning options designed for modern students.</p>
                        </div>
                    </div>

                    <div class="card news-card">
                        <img
                            src="https://images.unsplash.com/photo-1519452575417-564c1401ecc0?auto=format&fit=crop&w=600&q=80">
                        <div class="card-content">
                            <p class="title is-6">New Online Programs</p>
                            <p class="content">Flexible learning options designed for modern students.</p>
                        </div>
                    </div>
                </div>

                <button class="slider-arrow right"
                    onclick="document.getElementById('newsSlider').scrollBy({ left: 320, behavior: 'smooth' })">&#10095;</button>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="section has-background-light fade-in">
        <div class="container">
            <h3 class="title is-4">Upcoming Events</h3>
            <div class="columns events-columns">
                <div class="column is-6">
                    <div class="card event-card">
                        <div class="card-content">
                            <p class="title is-6">Open Day 2026</p>
                            <p class="content">Explore our campus and meet faculty members.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="card event-card">
                        <div class="card-content">
                            <p class="title is-6">International Conference</p>
                            <p class="content">Global discussions on education and technology.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Admissions Section -->
    <section class="section fade-in">
        <div class="container">
            <h3 class="title is-4">Admissions & Enrolment</h3>
            <div class="columns">
                <div class="column is-4">
                    <div class="has-text-centered">
                        <p>Applications for the 2026 academic year are now open.</p>
                        <ul class="mb-4">
                            <li>Undergraduate Programs</li>
                            <li>Postgraduate Programs</li>
                            <li>International Students</li>
                        </ul>
                        <a class="button is-link is-fullwidth">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer fade-in" style="background-color: #e0f0ff;">
        <div class="content has-text-centered">
            <p>
                <strong>Global University</strong> © 2026. All rights reserved.<br>
                Excellence in Education and Research.
            </p>
        </div>
    </footer>

</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll(".fade-in");
        const navbar = document.querySelector(".navbar");
        let lastScrollTop = 0;

        window.addEventListener("scroll", function () {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            // Navbar floating effect
            if (scrollTop > 50) {
                navbar.classList.add("is-floating");
            } else {
                navbar.classList.remove("is-floating");
            }

            // Scroll direction detection
            const scrollingDown = scrollTop > lastScrollTop;
            sections.forEach((section) => {
                const rect = section.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                if (rect.top < windowHeight - 100) {
                    if (scrollingDown) {
                        section.classList.remove("up");
                    } else {
                        section.classList.add("up");
                    }
                    section.classList.add("visible");
                }
            });

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
        });
    });
</script>

<!-- Slider JS -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slider = document.getElementById("autoSlider");
        const slides = slider.children;
        const prevBtn = document.getElementById("prevSlide");
        const nextBtn = document.getElementById("nextSlide");
        const dotsContainer = document.getElementById("sliderDots");
        let index = 0;
        let interval;

        // Create dots
        for (let i = 0; i < slides.length; i++) {
            const dot = document.createElement("div");
            dot.style.width = "12px";
            dot.style.height = "12px";
            dot.style.borderRadius = "50%";
            dot.style.background = i === 0 ? "#0c36a7" : "#ccc";
            dot.style.cursor = "pointer";
            dot.addEventListener("click", () => {
                index = i;
                updateSlider();
                resetInterval();
            });
            dotsContainer.appendChild(dot);
        }
        const dots = dotsContainer.children;

        function updateSlider() {
            slider.style.transform = `translateX(-${index * 100}%)`;
            for (let i = 0; i < dots.length; i++) {
                dots[i].style.background = i === index ? "#0c36a7" : "#ccc";
            }
        }

        function nextSlide() {
            index = (index + 1) % slides.length;
            updateSlider();
        }

        function prevSlide() {
            index = (index - 1 + slides.length) % slides.length;
            updateSlider();
        }

        prevBtn.addEventListener("click", () => {
            prevSlide();
            resetInterval();
        });

        nextBtn.addEventListener("click", () => {
            nextSlide();
            resetInterval();
        });

        function resetInterval() {
            clearInterval(interval);
            interval = setInterval(nextSlide, 4000);
        }

        interval = setInterval(nextSlide, 4000);

        // --- Mobile touch/swipe support ---
        let startX = 0;
        let isDragging = false;

        slider.addEventListener("touchstart", (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        slider.addEventListener("touchmove", (e) => {
            if (!isDragging) return;
            const diff = startX - e.touches[0].clientX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) nextSlide();
                else prevSlide();
                isDragging = false;
                resetInterval();
            }
        });

        slider.addEventListener("touchend", () => {
            isDragging = false;
        });
    });
</script>

<script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', () => {
        const burger = document.querySelector('.navbar-burger');
        const menu = document.getElementById(burger.dataset.target);

        burger.addEventListener('click', () => {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    });
</script>