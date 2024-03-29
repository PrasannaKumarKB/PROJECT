<!DOCTYPE html>
<html>

<head>
    <title>Koniamman Temple</title>
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
        <h1>KONIAMMAN TEMPLE</h1>
    </header>
    <div class="navigation">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li class="dropdown">
                <a href="#">AUDIO GUIDE</a>
                <div class="dropdown-content">
                    <a href="koniamman tamil.mp3">TAMIL LANGUAGE</a>
                    <a href="koniamman.mp3">ENGLISH LANGUAGE</a>
                </div>
             <li><a href="https://www.google.com/maps/@10.9939767,76.9637577,3a,75y,174.4h,107.07t/data=!3m6!1e1!3m4!1szERAmF7veLVqybiY8ttOag!2e0!7i13312!8i6656?entry=ttu">VIRTUAL TOUR</a></li>
            <li><a href="darshanbooking.php">BOOK TICKETS</a></li>
            <li><a href="poojabooking.php">POOJA BOOKING</a></li>
            <li><a href="donation.php">DONATION</a></li>
            <li><a href="koniammancontact.php">CONTACT</a></li>
      
                
                    

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
                    <img src="koniamman1.jpg" alt="Temple 1" style="width: 100%; height: 500px">
                </div>
                <div class="carousel-item">
                    <img src="koniamman2.jpg" alt="Temple 2" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="koniamman3.jpg" alt="Temple 3" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="koniamman4.jpeg" alt="Temple 4" style="width: 100%; height: 500px;">
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
            <p>Koniamman Temple, located in Coimbatore, is a revered Hindu shrine dedicated to Goddess Koniamman. The temple is a sacred place of worship and pilgrimage, drawing devotees from near and far. With its rich history and cultural significance, the temple holds a special place in the hearts of the local community.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>OPENING HOURS</h4>
            <p>6:00 AM - 1:00 PM</p>
            <p>3:00 PM - 9:00 PM</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>POOJA TIMINGS</h4>
            <p>6:00 am to 6:30 am - Ushakkala Pooja</p>
            <p>8:00 am to 9:00 am - Kaala Santhi Pooja</p>
            <p>11:00 am to 12:00 pm - Uchikala Pooja</p>
            <p>6:00 pm to 6:30 pm - Sayaratchai Pooja</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>LOCATION</h4>
            <p>Koniamman Temple, Coimbatore - 641009.</p>
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

            <p>By Air: The nearest airport to Coimbatore is Coimbatore International Airport.From the airport, you can hire a taxi or take a bus to reach Koniamman Temple, which is approximately 12 kilometers away.</p>
<p>By Train: Coimbatore Junction is the main railway station in Coimbatore.From the railway station, you can hire a taxi, take an auto-rickshaw, or use public transportation to reach Koniamman Temple, which is approximately 5 kilometers away.</p>
<p>By Road: Coimbatore is well-connected by road, and you can reach the city by bus or private vehicle. From Coimbatore, you can take the Avinashi Road (NH 47) towards Avinashi. Koniamman Temple is located on Avinashi Road, approximately 5 kilometers from the city center.</p>
<p>By Taxi or Rickshaw: You can hire a taxi, take an auto-rickshaw, or use public transportation to reach the temple.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>