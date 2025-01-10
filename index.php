<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Apex Nursery and Primary Schools</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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
                <li><a href="Aboutus.php">About Us</a></li>
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
                <li><a href="Academics.php">Academics</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="ApplyNow.php">Apply Now</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="slideshow-container">
            <?php 
            $slides = [
                ["img/1.jpg", "Welcome to Apex Schools, where excellence in 
                education meets a nurturing environment. Our dedicated staff 
                is committed to fostering holistic development, empowering students
                to reach their full potential. Join us in a vibrant community that
                celebrates learning, innovation, and character building for a brighter future."],
                ["img/2.jpg", "Quality Education for All"],
                ["img/3.jpg", "Join Our Community"],
                ["img/4.jpg", "Our Mission and Vision"],
                ["img/5.jpg", "Empowering Students for the Future"],
            ];
            foreach ($slides as $slide) {
                echo "<div class='slide'>
                        <img src='{$slide[0]}' alt='Slide Image'>
                        <div class='caption'>{$slide[1]}</div>
                      </div>";
            }
            ?>
            <button class="nav-btn prev" onclick="changeSlide(-1)">❮</button>
            <button class="nav-btn next" onclick="changeSlide(1)">❯</button>
        </section>
        <div class="container">
        <div class="card">
            <img src="img/18.jpg" alt="Event Image" class="card-img">
            <div class="card-content">
                <span class="category">PREFFECTS HAND OVER</span>
                <h2>CELEBRATING THE PREFFECTS</h2>
                <p class="author">CHAIR PERSON ELECTRO COMMISION</p>
            </div>
        </div>

        <div class="card">
            <img src="img/17.jpg" alt="School Image" class="card-img">
            <div class="card-content">
                <span class="category">P7 FAIR WELL PARTY</span>
                <h2>Embracing Change</h2>
            </div>
        </div>
        <div class="card">
            <img src="img/16.jpg" alt="UCE Results" class="card-img">
            <div class="card-content">
                <span class="category">PLE</span>
                <h2>RESULTS 2023</h2>
            </div>
        </div>
        <div class="card">
            <img src="img/15.jpg" alt="Admissions" class="card-img">
            <div class="card-content">
                <span class="category">MDD CELLEBRATIONS</span>
                <h2>2024 MDD CELLEBRATIONS</h2>
                <p class="author">AARON — JAN 05, 2025</p>
            </div>
        </div>
    </div>

    <script src="scripts.js"></script>

        <div class="compassionate-community">
    <div class="text-content">
        <h2>Compassionate Community</h2>
        <p>
            We believe in fostering a compassionate and inclusive community where everyone feels valued and supported. 
        </p>
    </div>
    <div class="images">
        <div class="image-container">
            <img src="img/21.jpg" alt="Community Event">
        </div>
        <div class="image-container">
            <img src="img/14.jpg" alt="Teamwork Activity">
        </div>
        <div class="image-container">
            <img src="img/15.jpg" alt="Group Celebration">
        </div>
    </div>
</div>

    </div>
    </div>
    
</div>
<section class="pictures">
    <h2>Our School in Pictures</h2>
    <div class="gallery">
        <div>
            <img src="img/8.jpg" alt="Play Time">
            <p>Play Time</p>
        </div>
        <div>
            <img src="img/14.jpg" alt="Library Time">
            <p>Library Time</p>
        </div>
        <div>
            <img src="img/18.jpg" alt="Art Class">
            <p>Art Class</p>
        </div>
        <div>
            <img src="img/11.jpg" alt="Music Lessons">
            <p>Music Lessons</p>
        </div>
        <div>
            <img src="img/12.jpg" alt="Science Lab">
            <p>Science Lab</p>
        </div>
    </div>
</section>
        <section class="contact">
            <h2>Reach Out to Us</h2>
            <div class="contact-info">
                <div>
                    <h3>Office Hours</h3>
                    <p>Monday-Friday<br>8:00 am to 5:00 pm</p>
                </div>
                <div>
                    <h3>Our Address</h3>
                    <p>Wakiso district<br>Ttula, Kawempe</p>
                </div>
                <div>
                    <h3>Contact Us</h3>
                    <p>+256-760879571 <br>+256-708120313</p>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <h2>What Parents Say</h2>
            <div class="testimonial">
                <p>APEX has been a wonderful place for my child to grow and learn. The teachers are exceptional and truly care about the students.</p>
                <span>John Doe @johndoe</span>
            </div>
            <div class="testimonial">
                <p>The school's focus on holistic development is commendable. My child loves the variety of activities offered.</p>
                <span>Jane Smith @janesmith</span>
            </div>
            <div class="testimonial">
                <p>I appreciate the safe and nurturing environment at APEX. It's a great place for young learners.</p>
                <span>Emily Johnson @emilyjohnson</span>
            </div>
        </section>
        
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
                    <a href="https://wa.me/+256760879571" target="_blank">
                        <img src="img/wapp.png" alt="WhatsApp">
                    </a>
                    <a href="https://facebook.com/your-page" target="_blank">
                        <img src="img/fb.png" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/apexschools13/?__pwa=1#" target="_blank">
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

    <script src="script.js"></script>
</body>
<script>
    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('.contact, .testimonials, .pictures');
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                section.classList.add('fade-in');
            } else {
                section.classList.remove('fade-in');
            }
        });
    });
</script>
</html>
