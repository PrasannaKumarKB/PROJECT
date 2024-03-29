<!DOCTYPE html>
<html>

<head>
    <title>Kalikambal Temple</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family:georgia, TimesNewRoman;
        }

        .carousel-item img {
            width: 100%;
            height: 50%;
        }

        h2 {
            text-align: center;
            background-color: gold;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: gold;
        }

        .container {
            margin-top: 30px;
        }

        .details-container {
            background-color: ivory;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);

        }

        h1 {
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
            background-color: skyblue;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fef6f6;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #bdbbbb;
        }
    </style>
</head>

<body>
    <header>
        <h1>SRI KALIKAMBAL TEMPLE</h1>
    </header>
    <div class="navigation">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li class="dropdown">
                <a href="#">AUDIO GUIDE</a>
                <div class="dropdown-content">
                    <a href="Kalikambal Tamil.mp3">TAMIL LANGUAGE</a>
                    <a href="Kalikambal English.mp3">ENGLISH LANGUAGE</a>
                </div>
             <li><a href="https://www.google.com/maps/@13.1279584,80.252546,3a,75y,328.46h,90t/data=!3m7!1e1!3m5!1scrSXVq4veZ0Ov0U_h3Ha4w!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DcrSXVq4veZ0Ov0U_h3Ha4w%26cb_client%3Dmaps_sv.tactile.gps%26w%3D203%26h%3D100%26yaw%3D329.12854%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656?entry=ttu">VIRTUAL TOUR</a></li>
            <li><a href="darshanbooking.php">BOOK TICKETS</a></li>
            <li><a href="poojabooking.php">POOJA BOOKING</a></li>
            <li><a href="donation.php">DONATION</a></li>
            <li><a href="kalikambalcontact.php">CONTACT</a></li>
      
                
                    

                </div>
        </ul>
    
        
    </div>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="kalikambal1.jpg" alt="Temple 1" style="width: 100%; height: 500px">
                </div>
                <div class="carousel-item">
                    <img src="kalikambal2.jpg" alt="Temple 2" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="kalikambal3.jpg" alt="Temple 3" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="kalikambal4.jpg" alt="Temple 4" style="width: 100%; height: 500px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h3>HISTORY</h3>
            <p>The Kālikāmbal Temple is a Hindu temple dedicated to Shri Kāligāmbāl (Kāmākshi) and Lord Kamadeswarar, located in Parry's corner (Old: George Town) locality of the city of Chennai, Tamil Nadu, India. The temple is located in Thambu Chetty Street, a prominent financial street at Georgetown, running parallel to Rajaji Salai.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>OPENING HOURS</h4>
            <p>6:00 AM - 12:30 PM</p>
            <p>4:00 PM - 9:00 PM</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>POOJA TIMINGS</h4>
            <p>Kala Sandhi Pooja - 8.00 AM</p>
            <p>Uchi Kala Pooja - 9.00 AM</p>
            <p>Sayaraksha Pooja - 5.30 PM</p>
            <p>Ardhajama Pooja - 8.30 PM</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>LOCATION</h4>
            <p>212, Thambu Chetty St, near DHL Express Courier, Mannadi, George Town, Chennai-600001, Tamilnadu.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>FESTIVALS</h4>
            <p>Brahmmotsavam</p>
            <p>Margazhi Vizha</p>
            <p>Navaratri</p>
            <p>Maasi Makam</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>WAYS TO REACH</h4>
            
            <p>By Car/Taxi: If you have your own vehicle or prefer a taxi, you can reach the temple by road. Use GPS or navigation apps to find the best route. The temple is situated in the heart of the city, so it's advisable to check for parking facilities nearby.</p>

<p>By Bus: Chennai has an extensive public bus network operated by the Metropolitan Transport Corporation (MTC). You can check the MTC website or inquire at the nearest bus station for the routes that pass through George Town and alight at Kalikambal Temple bus stop.</p>

<p>By Metro: Chennai Metro Rail provides a convenient option to reach Kalikambal Temple. You can take the metro and get down at the "High Court" metro station, which is located near the temple.</p>

<p>By Train: The nearest railway station to Kalikambal Temple is Chennai Fort Railway Station. From there, you can hire a taxi or take an auto-rickshaw to reach the temple, which is approximately 1 kilometer away.</p>

<p>By Auto-Rickshaw: Auto-rickshaws are readily available in Chennai. You can hire an auto-rickshaw from any part of the city and ask the driver to take you to Kalikambal Temple in George Town.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>