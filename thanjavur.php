<!DOCTYPE html>
<html>
<head>
  <title>Thanjavur</title>
  <style>
    body {
      font-family: Georgia, 'Times New Roman', Times, serif;
      margin: 0;
      padding: 0;
      
    }

    header {
      background-image: url("thanjavurheader.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      color: black;
      padding: 20px;
      text-align: center;
    }

    .header h1 {
    text-align: center;
    color: black; /* Change color to black */
    font-size: xxx-large;
    margin-left: 60px;
}


    #container {
      max-width: 100%;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .city-description {
      margin-bottom: 20px;
      text-align: center;
    }

    .city-description img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .temple-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
      width: 100%;
    }

    .temple {
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .temple img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
      transition: transform 0.3s ease-in-out;
    }

    .temple:hover img {
      transform: scale(1.1);
    }

    .banner-container {
      text-align: center;
      max-width: 100%;
      margin: 0 auto;
      overflow: hidden;
    }

    .banner {
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .readmore {
      color: gold;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .readmore:hover {
      background-color: none;
    }

    p {
      justify-content: center;
      text-align: center;
    }

    .navigation ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navigation ul li {
      display: inline-block;
      margin: 0 10px;
    }

    .navigation ul li a {
      color: #0c0b0b;
      text-decoration: none;
    }

    .navigation {
      background-color: silver;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    h3 {
      text-align: center;
    }

    /* Style for the weather box */
    .weather-box {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      background-color: #f8f8f8;
      width: 200px;
      text-align: center;
    }

    /* Style for weather icon */
    .weather-icon {
      width: 50px;
      height: 50px;
    }
    
    /* Sliding menu styles */
    .sliding-menu {
      position: fixed;
      top: 0;
      left: -250px;
      width: 250px;
      height: 100%;
      z-index: 2;
      transition: 0.5s;
      padding-top: 60px;
    }

    .newsletter-container {
      position: relative;
      background-color: #fff;
      cursor: pointer;
      margin: 10px;
      overflow: hidden;
      width: 300px;
      height: 400px;
    }

    img {
      max-width: 100%;
      height: 400px;
      border-radius: 8px;
      transition: transform ease-in-out 0.5s;
    }

    .newsletter-container:hover img {
      transform: scale(1.10);
    }

    .newsletter-container:hover .overlay {
      transform: translateY(-50%);
    }

    main {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .overlay {
      position: absolute;
      bottom:  0;
      left: 0;
      right: 0;
      text-align: left;
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
      transition: transform 0.3s ease-in-out;
    }

    h3 {
      color: white;
      border-color: gold;
      margin-bottom: 30px;
      margin-left: 10px;
      transform: translateY(0); /* Initial position */
      transition: transform 0.3s ease-in-out;
    }

    .banner {
      background-image: url("newsletterbanner.webp");
      background-size: cover;
      height: 700px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      margin-top: 20px;
    }

    h1 {
      text-align: center;
      color: black; /* Set the color to black */
      font-size: xxx-large;
      
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    footer {
      background-color: black; /* Change the background color to your preference */
      color: #fff; /* Change the text color to your preference */
      padding: 20px 0;
      text-align: center;
    }

    /* Style the footer information (address, email, phone) */
    .footer-info {
      flex: 1;
      text-align: center;
      padding: 0 20px;
    }

    .footer-info a {
      color: gold;
    }

    /* Style the footer links (copyright, terms, cookie policy, contact) */
    .footer-links {
      flex: 1;
      text-align: bottom;
      padding: 0 20px;
      margin-top: 30px;
    }

    /* Style links within the footer */
    .footer-links a {
      color: #fff; /* Change link color to your preference */
      text-decoration: none;
      margin: 0 10px;
      text-align: center;
    }

    /* Change link color on hover */
    .footer-links a:hover {
      color: #f5a623; /* Change link color on hover to your preference */
    }

    .navigation {
      background-color: transparent;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-top: 10px;
      position: relative;
      transition: background-color 0.3s; /* Add transition for smoother animation */
    }

    .navigation:hover {
      background-color: gray; /* Change background color on hover */
      color: white; /* Change text color on hover */
    }

    .navigation ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navigation ul li {
      display: inline-block;
      margin: 0 10px;
    }

    .navigation ul li a {
      color: black;
      text-decoration: none;
    }

    .navigation ul li a:hover {
      color: white; /* Change link text color on hover */
    }

    .navigation .hamburger {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 20px;
      font-size: 30px;
      cursor: pointer;
    }

    /* Sliding menu styles */
    .sliding-menu {
      position: fixed;
      top: 0;
      left: -250px;
      width: 250px;
      height: 100%;
      background-image: url("banner.webp");
      z-index: 2;
      transition: 0.5s;
      padding-top: 60px;
    }

    .menu {
      padding-top: 60px;
    }

    .menu a {
      padding: 15px 25px;
      text-align: right;
      text-decoration: none;
      font-size: 20px;
      color: black;
      display: block;
      transition: 0.3s;
    }

    .menu a:hover {
      background-color: #bdbbbb;
    }

    .close-button {
      position: absolute;
      top: 20px;
      right: 20px;
      font-size: 30px;
      cursor: pointer;
    }

    .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: #555;
      background-color: inherit;
      cursor: pointer;
      padding: 14px 16px;
    }

    /* Style the dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    /* Style the links inside the dropdown */
    .dropdown-content a {
      color: #555;
      padding: 12px 16px;
      display: block;
      text-decoration: none;
    }

    /* Change color on hover */
    .dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>
<body>
  <header>
  <a class="back-button" href="home.php" style="position: absolute; top: 20px; left: 20px; font-size: 48px; color:white;text-decoration: none;">&larr;</a>
    <h1>T H A N J A V U R</h1>
  </header>
  <div class="navigation">
    <span class="hamburger" onclick="openMenu()">&#9776;</span>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="thanjavurarticle.php">About</a></li>
      <li><a href="thanjavurgallery.php">Gallery</a></li>
      <li><a href="thanjavurcontact.php">Contact</a></li>
    </ul>
  </div>
  <div class="sliding-menu">
    <span class="close-button" onclick="closeMenu()">&times;</span>
    <div class="menu">
      <a href="airport.html">Airports</a>
      <a href="railway.html">Railways</a>
      <a href="packages.html">Packages</a>
      <a href="newsletter.html">Newsletter</a>
      <a href="tamilnaducontact.php">Contact</a>
    </div>
  </div>
  <div class="banner-container">
    <video id="video-background" autoplay loop muted class="banner">
      <source src="thanjavur.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <div id="container">
    <div class="city-description">
      <p>Thanjavur, also known as Tanjore, is a historic city in Tamil Nadu, India. It is renowned for its rich cultural heritage, particularly its exquisite Brihadeeswarar Temple, a UNESCO World Heritage Site and one of the largest temples in India. The city is a treasure trove of art, architecture, and music, with a thriving tradition of classical Carnatic music and dance.</p>
    </div>
    <main>
    <div class="newsletter-container" onclick="window.location.href='brihadeswara.php';">
            <div class="img">
                <img src="brihadeeswara.jpg" alt="December 2022 Newsletter">
            </div>
            <div class="overlay">
                <h3>ARULMIGU BRIHADEESWARAR TEMPLE</h3>
            </div>
           
        </div>

        <div class="newsletter-container" onclick="window.location.href='punnainallur.php';">
            <div class="img">
                <img src="punnainallur.jpg" alt="February Newsletter">
            </div>
            <div class="overlay">
                <h3>ARULMIGU PUNNAI NALLUR MARIAMMAN TEMPLE</h3>
            </div>
            
        </div>

        <div class="newsletter-container" onclick="window.location.href='thiruvaiyar.php';">
            <div class="img">
                <img src="thiruvaiyar.jpg" alt="March 2023 Newsletter">
            </div>
            <div class="overlay">
                <h3>ARULMIGU AIYARAPPAR TEMPLE, THIRUVAIYARU</h3>
            </div>
            
        </div>
        <div class="newsletter-container" onclick="window.location.href='mamani.php';">
            <div class="img">
                <img src="mamani.jpg" alt="March 2023 Newsletter">
            </div>
            <div class="overlay">
                <h3>ARULMIGU THANJAI MAMANI TEMPLE</h3>
            </div>
            
        </div>
        <div class="newsletter-container" onclick="window.location.href='koottaiyur.php';">
            <div class="img">
                <img src="kottaiyu1.jpg" alt="March 2023 Newsletter">
            </div>
            <div class="overlay">
            <h3>ARULMIGU  KODEESWARAR TEMPLE, KOTTAIYUR</h3>
            </div>
            
        </div>
        <div class="newsletter-container" onclick="window.location.href='thiruvidaimaruthur.php';">
            <div class="img">
                <img src="thiruvidaimaruthur.jpg" alt="March 2023 Newsletter">
            </div>
            <div class="overlay">
            <h3>ARULMIGU MAHALINGESHWARASWAMY TEMPLE, THIRUVIDAIMARUTHUR</h3>
            </div>
            
        </div>
        
                
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <p>Address: Department Of Tourism, Wallajah Road, Chennai-2</p>
                <p>Email: tourism@tnstate.com</p>
                <p>Toll Free no: 1800-456-84923</p>
                <p>All rights reserved &copy; Tamil Nadu Tourism 2023</p>
                <p>
                    <a href="#">Copyright</a> | <a href="#">Terms of Use</a> | <a href="#">Cookie Policy</a> | <a href="#">Contact Us</a>
                </p>
            
            <div class="footer-links">
                <a href="https://www.facebook.com/YourFacebookPage" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/YourInstagramPage" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/YourYouTubeChannel" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>
  <script>
        function openMenu() {
    document.querySelector('.sliding-menu').style.left = '0';
  }

  function closeMenu() {
    document.querySelector('.sliding-menu').style.left = '-250px';
  }

    </script>
</body>
</html>
