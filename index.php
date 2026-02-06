<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>University Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        /* Color Theme */
        body {
            background-color: #f0f8ff;
        }

        .navbar {
            background-color: #0c36a7f2;
        }

        .navbar .navbar-item {
            color: white;
        }

        /* Hero */
        .hero {
            min-height: 90vh;
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

        /* Logo area */
        .logo-area {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-area img {
            /* height: 80px; */
            width: auto;
        }

        .logo-text {
            color: white;
            font-size: 1.1rem;
            white-space: nowrap;
        }

        .navbar-item img {
            max-height: 2.7rem;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar is-spaced" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item logo-area" href="#">
                <img src="public/assets/images/nisu.png" alt="Global University Logo" style="width:45px;height:90px;">
                <span class="logo-text">
                    <strong>Global University</strong>
                </span>
            </a>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item">Home</a>
                <a class="navbar-item">About</a>
                <a class="navbar-item">Admissions</a>
                <a class="navbar-item">News</a>
                <a class="navbar-item">Events</a>
                <a class="navbar-item">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero hero-bg">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Welcome to Global University</h1>
                <h2 class="subtitle">Empowering education, research, and innovation</h2>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="section">
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
    <section class="section has-background-light">
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
    <section class="section">
        <div class="container">
            <h3 class="title is-4">Admissions & Enrolment</h3>
            <div class="columns">
                <div class="column is-4">
                    <div class="box has-text-centered">
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
    <footer class="footer" style="background-color: #e0f0ff;">
        <div class="content has-text-centered">
            <p>
                <strong>Global University</strong> © 2026. All rights reserved.<br>
                Excellence in Education and Research.
            </p>
        </div>
    </footer>

</body>

</html>