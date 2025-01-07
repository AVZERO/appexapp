<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li>
                    <a href="#">Admissions ▼</a>
                    <ul class="dropdown">
                        <li><a href="undergraduate_admissions.php">Undergraduate</a></li>
                        <li><a href="graduate_admissions.php">Graduate</a></li>
                    </ul>
                </li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="slideshow-container">
                <div class="slide">
                    <img src="apply_now_hero.jpg" alt="Apply Now">
                    <div class="caption">
                        <h1>Join Our Community</h1>
                        <p>Take the first step toward your future with our online application.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <h2>Apply Now</h2>
                <p>
                    We're excited to welcome you! Complete the application form below to begin your journey with us.
                </p>
                <form class="application-form">
                    <div class="form-group">
                        <label for="full-name">Full Name:</label>
                        <input type="text" id="full-name" name="full-name" placeholder="Your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="program">Program of Interest:</label>
                        <select id="program" name="program" required>
                            <option value="">Select a Program</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="graduate">Graduate</option>
                            <option value="continuing">Continuing Education</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Additional Information:</label>
                        <textarea id="message" name="message" placeholder="Tell us more about yourself" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn">Submit Application</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Your Institution. All rights reserved.</p>
    </footer>
</body>
</html>
