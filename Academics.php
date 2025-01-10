<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Apex Nursery and Primary Schools</title>
    <style>
</head>
        /* General reset */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        /* Container for the layout */
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
            gap: 30px;
        }

        /* Image styling */
        .image-container {
            flex: 1;
            overflow: hidden;
            border-radius: 10px;
            animation: fadeInLeft 1.2s ease;
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
        }

        /* Text content styling */
        .text-container {
            flex: 1;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            animation: fadeInRight 1.2s ease;
        }

        .text-container h2 {
            font-size: 2rem;
            color: #222;
            margin-bottom: 20px;
            border-bottom: 3px solid #b30000;
            display: inline-block;
            padding-bottom: 5px;
        }

        .text-container p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .text-container a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: #b30000;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .text-container a:hover {
            background-color: #800000;
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>

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
                <li><a href="#">Contact Us</a></li>
                <li><a href="ApplyNow.php">Apply Now</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <!-- Image Section -->
        <div class="image-container">
            <img src="img/19.jpg" alt="Students in lab">
        </div>

        <!-- Text Section -->
        <div class="text-container">
            <h2>Nursery Education</h2>
            <p>At Apex Nursery School, we nurture young minds with a blend of play-based 
                learning and foundational education. Our safe, stimulating environment fosters
                creativity, social skills, and a love for learning, setting the stage for lifelong
                success.</p>
            <a href="ApplyNow.php"> APPLY NOW →</a>

        </div>
    </div>
    <div class="container">
        <!-- Image Section -->
        <div class="image-container">
            <img src="img/20.jpg" alt="Students in lab">
        </div>

        <!-- Text Section -->
        <div class="text-container">
            <h2>Primary Education</h2>
            <p>Apex Primary School delivers excellence in education with a balanced curriculum
                and modern teaching methods. We inspire academic achievement, critical thinking,
                and personal growth, empowering every child to reach their full potential and excel 
                in a competitive world.</p>
            <a href="ApplyNow.php"> APPLY NOW →</a>
        </div>
    </div>
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
</body>
</html>
