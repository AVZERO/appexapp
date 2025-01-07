<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About Us.php">About Us</a></li>
                <li>
                    <a href="#">Admissions ▼</a>
                    <ul class="dropdown">
                        <li><a href="undergraduate_admissions.php">Undergraduate</a></li>
                        <li><a href="graduate_admissions.php">Graduate</a></li>
                    </ul>
                </li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="apply_now.php" class="apply-btn">Apply Now</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="slideshow-container">
                <div class="slide">
                    <img src="admissions_hero.jpg" alt="Admissions">
                    <div class="caption">
                        <h1>Your Journey Starts Here</h1>
                        <p>Explore our programs and find your path to success.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <h2>Admissions</h2>
                <p>
                    We are dedicated to making the admissions process as smooth and accessible as possible. Explore our programs and take the first step toward achieving your academic goals.
                </p>
                <div class="grid">
                    <div class="card">
                        <h3>Undergraduate Admissions</h3>
                        <p>Join our vibrant undergraduate community and pursue a degree that matches your passion.</p>
                        <a href="undergraduate_admissions.php" class="btn">Learn More</a>
                    </div>
                    <div class="card">
                        <h3>Graduate Admissions</h3>
                        <p>Advance your career with our top-tier graduate programs designed to inspire innovation and research.</p>
                        <a href="graduate_admissions.php" class="btn">Learn More</a>
                    </div>
                    <div class="card">
                        <h3>Financial Aid</h3>
                        <p>We offer a variety of scholarships, grants, and aid packages to support your education.</p>
                        <a href="financial_aid.php" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Your Institution. All rights reserved.</p>
    </footer>
</body>
</html>