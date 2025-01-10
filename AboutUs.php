<STYLE>
body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f7f9fc;
    color:rgb(0, 25, 49);
}

/* About Us Section */
.about-us {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px;
    background-color: #fff;
    border-top: 5px solid #000754;
}

.about-container {
    display: flex;
    align-items: center;
    max-width: 1200px;
    gap: 30px;
}

/* Image Styling */
.about-image {
    flex: 1;
    position: relative;
}

.about-image .main-photo {
    width: 100%;
    border: 2px dashed #ccc;
    border-radius: 0px;
    display: block;
}

.about-image .circle-photo {
    position: absolute;
    bottom: -20px;
    right: 0%;
    width: 120px;
    height: 120px;
    border: 5px solid #fff;
    border-radius: 50%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

/* Content Styling */
.about-content {
    flex: 1;
    text-align: left;
}

.about-content h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #000754;
    margin-bottom: 10px;
}

.about-content .highlight {
    color: #e60073;
}

.about-content h2 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 20px;
}

.about-content p {
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: 15px;
    color: #717171;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-container {
        flex-direction: column;
        text-align: center;
    }

    .about-image .circle-photo {
        position: relative;
        bottom: 0;
        left: 0;
        margin: 20px auto 0 auto;
    }

    .about-content {
        text-align: center;
    }
}
.content {
    margin-bottom: 15px; /* Adjust the value as needed */
}

</STYLE>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Apex Nursery and Primary Schools</title>

</head>
<body>
    <header>
    <div class="header-content">
    <a href="index.php">
        <img src="img/logo1.png" alt="School Logo" class="logo">
    </a>
</div>

    <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="ApplyNow.php">Admissions ▼</a>
                    <ul class="dropdown">
                        <?php 
                        $admissionLinks = [
                            "Fees Structure" => "FeesStructure.php",
                            "Requirements" => "Requirements.php",
                            "Apply Now" => "ApplyNow.php",
                            "School Calendar" => "SchoolCalendar.php"
                        ];
                        foreach ($admissionLinks as $name => $link) {
                            echo "<li><a href='$link'>$name</a></li>";
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="ApplyNow.php" class="apply-btn">Apply Now</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <section class="about-us">
        <div class="about-container">
            <div class="about-image">
                <img src="img/1.jpg" alt="Group Photo" class="main-photo">
                <img src="img/2.jpg" alt="Circle Photo" class="circle-photo">
            </div>
            <div class="about-content">
                <h1>About <span class="highlight">Us</span></h1>
                <h2>Welcome to Apex Nursery and Primary School</h2>
                <p>At Apex Nursery and Primary School, we shape future leaders in an environment that combines academic excellence, moral integrity, and unmatched care. Nestled in the heart of Kawempe Ttula, our institution stands as a beacon of quality education, nurturing every child's potential.</p>
                <p>Holistic Education: We provide a balanced curriculum that fosters academic brilliance, creativity, and character development.
State-of-the-Art Facilities: Our school is equipped with modern classrooms, a well-stocked library, a computer lab, and spacious playgrounds designed to enhance your child's learning experience.
Dedicated Teachers: Our passionate and experienced educators are committed to nurturing each child’s unique abilities and ensuring they achieve their full potential.
Child-Centered Approach: We believe every child is special, and we create a nurturing and inclusive environment where they can thrive.</p>
            </div>
        </div>
    </section>

        <section class="content">
            <div class="container">
                <h2>About Us</h2>
                    <div class="card">
                        <h3>Our Mission</h3>
                        <p>To provide world-class education that inspires lifelong learning and fosters intellectual curiosity.</p>
                    </div>
                    <div class="card">
                        <h3>Our Vision</h3>
                        <p>To be a leader in transformative education, cultivating global citizens who drive progress and change.</p>
                    </div>
                    <div class="card">
                        <h3>Our Values</h3>
                        <p>Integrity, innovation, inclusivity, and impact are at the core of everything we do.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
    <div class="footer-container">
        <div class="subscribe">
            <h2>Get the latest <span class="highlight">Apex News Letter</span> delivered to your inbox</h2>
            <form action="#" method="post" class="subscribe-form">
                <input type="email" placeholder="Your e-mail" required>
                <button type="submit" class="subscribe-button">Subscribe →</button>
            </form>
        </div>
        <div class="footer-content">
            <div class="about">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">UNEB</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="#">Visit</a></li>
                    <li><a href="#">Media Relations</a></li>
                </ul>
            </div>
            <div class="connect">
                <h3>Connect With Us</h3>
                <div class="social-icons">
                    <a href="https://wa.me/your-number" target="_blank">
                        <img src="img/wapp.png" alt="WhatsApp">
                    </a>
                    <a href="https://facebook.com/your-page" target="_blank">
                        <img src="img/fb.png" alt="Facebook">
                    </a>
                    <a href="https://instagram.com/your-page" target="_blank">
                        <img src="img/insta.png" alt="Instagram">
                    </a>
                    <a href="https://tiktok.com/@your-page" target="_blank">
                        <img src="img/tik.png" alt="TikTok">
                    </a>
                    <a href="https://maps.app.goo.gl/kn2eLXufjXCRez4Q9" target="_blank">
                        <img src="img/location.png" alt="Google Maps" title="Find Us on Google Maps">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 ApexSchools13. All Rights Reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
