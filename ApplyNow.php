<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Nursery and Primary Schools - Apply Now</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
    background: linear-gradient(to bottom, #ffffff 50%, var(--primary-color) 20%);
    color: var(--accent-color);
    text-align: center;
    padding: 10px 1px;
    box-shadow: 0 2px 1px var(--shadow-color);
}

        header .logo {
    height: 60px;
    margin-bottom: 0;
    z-index: 0;
    position: relative;
}

      /* Navigation Menu */
nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 4px;
    margin: 0.99999%;
}

nav ul li {
    margin: 0 15px;
    position: relative;
}

nav ul li a {
    color: var(--accent-color);
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 5px;
    transition: color var(--transition-speed);
    position: relative;
}

nav ul li a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: yellow;
    transition: width var(--transition-speed);
}

nav ul li a:hover {
    color: yellow;
}

nav ul li a:hover::after {
    width: 100%;
}

/* Dropdown Menu */
.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 200px;
    background: rgba(0, 11, 69, 0.9);
    color: var(--accent-color);
    padding: 10px 0;
    box-shadow: 0 4px 8px var(--shadow-color);
    border-radius: 5px;
    z-index: 10;
}

nav ul li:hover .dropdown {
    display: block;
}

.dropdown li {
    padding: 5px 15px;
}

.dropdown li a {
    color: var(--accent-color);
    display: block;
    text-decoration: none;
    width: 100%;
    transition: background-color var(--transition-speed);
}

.dropdown li a:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

        .hero {
            position: relative;
            height: 250px;
            background: url('img/13.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            animation: fadeIn 1.5s;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #f4f4f4;
        }

        .application-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 800px;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .application-form h2 {
            text-align: center;
            color:rgb(8, 0, 78);
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        button.btn {
            width: 100%;
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        button.btn:hover {
            background-color: #003d80;
        }

        
    </style>
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
                <li><a href="aboutUs.php">About Us</a></li>
                <li>
                    <a href="ApplyNow.php">Admissions ▼</a>
                    <ul class="dropdown">
                        <?php 
                        $admissionLinks = [
                            "Fees Structure" => "FeesStructure.php",
                            "Requirements" => "Requirements.php",
                            "School Calendar" => "SchoolCalendar.php"
                        ];
                        foreach ($admissionLinks as $name => $link) {
                            echo "<li><a href='$link'>$name</a></li>";
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="hero">
        <div>
            <h1>Apply Now</h1>
            <p>Join our community and start your journey with us!</p>
        </div>
    </div>

    <main>
        <div class="container">
            <form class="application-form" action="submitApplication.php" method="POST">
                <h2>Application Form</h2>
                <div class="form-group">
                    <label for="emis-number">EMIS Number:</label>
                    <input type="text" id="emis-number" name="emis_number" required>
                </div>
                <div class="form-group">
                    <label for="first-name">First Name:</label>
                    <input type="text" id="first-name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name:</label>
                    <input type="text" id="last-name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="date_of_birth" required>
                </div>
                <div class="form-group">
                    <label for="class">Class:</label>
                    <input type="text" id="class" name="class" required>
                </div>
                <div class="form-group">
                    <label for="sex">Sex:</label>
                    <select id="sex" name="sex" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="parent-name">Parent/Guardian Name:</label>
                    <input type="text" id="parent-name" name="parent_guardian_name" required>
                </div>
                <div class="form-group">
                    <label for="parent-contact">Parent's Contact:</label>
                    <input type="text" id="parent-contact" name="parents_contact" required>
                </div>
                <button type="submit" class="btn">Submit Application</button>
            </form>
        </div>
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
