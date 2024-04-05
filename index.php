<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title>Calmify</title>
</head>
<body>
<div class="wrapper">
    <nav class="nav">
        <div class="logo">
            <img src="logofinal.PNG" alt="logo" />
        </div>
        <div class="links">
            <ul style="list-style-type: none;">
                <li><a href="home.html">Home</a></li>
                <li><a href="resources.html">Resources</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contactus.html">Contactus</a></li>
                <li><a href="registration.php">Signup</a></li>
            </ul>
        </div>
    </nav>

    <div class="landing">
        <h1>Eventually all waves settle</h1>
        <h3>Welcome to Calmify, a digital sanctuary dedicated to nurturing mental well-being. Our platform is a beacon of understanding, offering compassionate support, expert guidance, and a wealth of resources to navigate life's challenges.</h3>
        <div class="btn">
            <a href="aboutus.html">About us</a>
        </div>
        <div class="landingImage">
            <img src="brain.png" alt="image1">
        </div>
    </div>

    <div class="infocards">
        <div class="card">
            <img src="hospital.png" alt="" class="cardoneimg">
            <div class="cardcontent">
                <h2>Mental health services</h2>
                <p>Providing personalized mental health support tailored to your unique needs, fostering resilience and well-being.</p>
                <div class="cardBtn">
                    <a href="services.html">Learn more</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="syringe.png" alt="" class="cardtwoimg">
            <div class="cardcontent">
                <h2>Resources</h2>
                <p>Curated resources to empower individuals with tools and knowledge for managing mental health challenges and fostering personal growth.</p>
                <div class="cardBtn">
                    <a href="resources.html">Explore</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="contact-mail.png" alt="" class="cardthreeimg">
            <div class="cardcontent">
                <h2>Contact us</h2>
                <p>Reach out and find your peace with Calmify - your haven for mental wellness.</p>
                <div class="cardBtn">
                    <a href="contactus.html">Get in touch</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <h1>Calmify</h1>
        <div class="footerlinks">
            <a href="" class="mainlink">Home</a>
            <a href="resources.html">Resources</a>
            <a href="services.html">Services</a>
            <a href="contactus.html">Contact</a>
            <a href="registration.php">Signup</a>
        </div>
    </footer>
</div>

<script src="script.js"></script>
    <div class="container">
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>