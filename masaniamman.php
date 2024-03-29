<!DOCTYPE html>
<html>

<head>
    <title>Masani Amman Temple - Pollachi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Georgia, 'TimesNewRoman';
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
        <h1>MASANI AMMAN TEMPLE - POLLACHI</h1>
    </header>
    <div class="navigation">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li class="dropdown">
                <a href="#">AUDIO GUIDE</a>
                <div class="dropdown-content">
                    <a href="MasaniAmmanTamilAudio.mp3">TAMIL LANGUAGE</a>
                    <a href="MasaniAmmanEnglishAudio.mp3">ENGLISH LANGUAGE</a>
                </div>
            </li>
            <li><a href="https://www.google.com/maps/@10.5755694,76.9348472,3a,75y,139.38h,84.55t/data=!3m8!1e1!3m6!1sAF1QipMnmUUeH_zB2HxUf0ZHVSJmxkFcGFkxTOmsAYhd!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMnmUUeH_zB2HxUf0ZHVSJmxkFcGFkxTOmsAYhd%3Dw203-h100-k-no-pi7.9122252-ya309.72037-ro-1.0960805-fo100!7i5376!8i2688?entry=ttu">VIRTUAL TOUR</a></li>
            <li><a href="darshanbooking.php">BOOK TICKETS</a></li>
            <li><a href="poojabooking.php">POOJA BOOKING</a></li>
            <li><a href="donation.php">DONATION</a></li>
            <li><a href="masaniammancontact.php">CONTACT</a></li>
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
                    <img src="masaniamman1.jpg" alt="Temple 1" style="width: 100%; height: 500px">
                </div>
                <div class="carousel-item">
                    <img src="masaniamman2.jpg" alt="Temple 2" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="masaniamman3.jpg" alt="Temple 3" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="masaniamman4.webp" alt="Temple 4" style="width: 100%; height: 500px;">
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
            <p>Masani Amman Temple, located in Pollachi, Tamil Nadu, is a renowned Hindu shrine dedicated to Goddess Masani Amman. The temple holds significant religious and cultural importance and attracts devotees from far and wide. It has a rich history that spans centuries, making it a cherished place of worship.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>OPENING HOURS</h4>
            <p>6:00 AM - 12:00 PM</p>
            <p>4:00 PM - 9:00 PM</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>POOJA TIMINGS</h4>
            <p>6:00 am to 6:30 am - Ushakkala Pooja</p>
            <p>11:00 am to 12:00 pm - Uchikala Pooja</p>
            <p>6:30 pm to 7:00 pm - Sayaratchai Pooja</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>LOCATION</h4>
            <p>Masani Amman Temple, Pollachi - 642001, Tamil Nadu.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>FESTIVALS</h4>
            <p>Thai Poosam - January/February</p>
            <p>Aadi Pooram - July/August</p>
            <p>Navaratri - September/October</p>
            <p>Skanda Sashti - October/November</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>WAYS TO REACH</h4>
            <p>By Air: The nearest airport to Pollachi is Coimbatore International Airport, which is approximately 50 kilometers away. From the airport, you can hire a taxi or take a bus to reach Masani Amman Temple.</p>
            <p>By Train: Pollachi has its own railway station, known as Pollachi Junction. You can reach Pollachi by train and then hire a taxi, take an auto-rickshaw, or use public transportation to reach Masani Amman Temple.</p>
            <p>By Road: Pollachi is well-connected by road. You can reach the town by bus or private vehicle. Masani Amman Temple is located in the heart of Pollachi town, and you can easily access it.</p>
            <p>By Taxi or Rickshaw: You can hire a taxi or take an auto-rickshaw to reach Masani Amman Temple within Pollachi.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
