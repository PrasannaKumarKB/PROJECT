<!DOCTYPE html>
<html>

<head>
    <title>Thiruttani Temple</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: georgia, TimesNewRoman;

            
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
        <h1>SUBRAMANIYA SWAMY TEMPLE, THIRUTTANI</h1>
    </header>
    <div class="navigation">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li class="dropdown">
                <a href="#">AUDIO GUIDE</a>
                <div class="dropdown-content">
                    <a href="Kapaleeshwarar audio (1).mp3">TAMIL LANGUAGE</a>
                    <a href="">ENGLISH LANGUAGE</a>
                </div>
            <li><a href="https://www.google.com/maps/@13.1719875,79.6041336,3a,75y,217.91h,90t/data=!3m8!1e1!3m6!1sAF1QipNrWtndrHIdMIvKJ8wk9Qkae9kobjqHaEaNXBqV!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNrWtndrHIdMIvKJ8wk9Qkae9kobjqHaEaNXBqV%3Dw203-h100-k-no-pi0-ya302.16995-ro-0-fo100!7i8704!8i4352?entry=ttu">VIRTUAL TOUR</a></li>
            <li><a href="darshanbooking.php">BOOK TICKETS</a></li>
            <li><a href="poojabooking.php">POOJA BOOKING</a></li>
            <li><a href="donation.php">DONATION</a></li>
            <li><a href="thiruttanicontact.php">CONTACT</a></li>
        </ul>
    
        
    </div>
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
                    <img src="thiruttani1.webp" alt="Temple 1" style="width: 100%; height: 500px">
                </div>
                <div class="carousel-item">
                    <img src="thiruttani2.jpg" alt="Temple 2" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="thiruttani3.jpeg" alt="Temple 3" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="thiruttani4.jpg" alt="Temple 4" style="width: 100%; height: 500px;">
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
            <p>The Arulmigu Subramaniya Swamy Temple is a Hindu temple, on the hill of Thiruttani, Tiruvallur district, Tamil Nadu, India, dedicated to Murugan. The hill has 365 steps indicating 365 days of the year. It is fifth among the six abodes of Murugan (Arupadai Vidu) The other five are Palani Murugan Temple, Swamimalai Murugan Temple, Thiruchendur Murugan Temple, Thiruparankundram and Pazhamudircholai Murugan Temple. Thiruttani is 87 kilometres (54 mi) from Chennai. It is the only adobe located within the Greater Chennai Metropolitan Area limit. During the Sangam era, Thiruttani was known as Kundruthoradal. After killing the asura Tarakasura in Tiruchendur, he came here to subside his anger, so Surasamharam is not conducted here.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>OPENING HOURS</h4>
            <p>5:30 AM - 9.00 PM</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>POOJA TIMINGS</h4>
            <p>Vishwaroopa Dharisanam - 5.30 AM</p>
            <p>Kala Sandhi Pooja - 8.00 AM</p>
            <p>Uchi Kala Pooja - 12.30 PM</p>
            <p>Sayaraksha Pooja - 5.30 PM</p>
            <p>Ardhajama Pooja - 8.30 PM</p>
            <p>Palliarai Pooja - 9.00 PM</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>LOCATION</h4>
            <p> Arulmigu Subramanya Swamy Thirukoil, Tiruttani – 631 209. Tiruvallur District, Tamil Nadu.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>FESTIVALS</h4>
            <p>Thai Poosam - Celebrated in January/February</p>
            <p>Panguni Uthiram</p>
            <p>Vaikasi Vishakam</p>
            <p>Kandhashasti Vizha</p>
            <p>Karthigai Deepam - Celebrated in November/December</p>
            <p>Valli Kalyanam</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>WAYS TO REACH</h4>
            
            <p>By Car/Taxi: The most convenient way to reach Thiruttani Temple is by car or taxi. You can drive along the Chennai-Tirupati Highway (NH716) or take the Chennai-Tiruttani Road (SH50). The journey takes around 2-3 hours, depending on the traffic conditions.</p>

<p>By Bus: Several government and private buses operate between Chennai and Thiruttani. You can check with the Chennai Mofussil Bus Terminus (CMBT) or the local bus station for the timings and bus routes. Buses generally take around 3-4 hours to reach Thiruttani.</p>

<p>By Train: Thiruttani has its own railway station, which is well-connected to Chennai. Trains from Chennai Central Station or Chennai Egmore Station go to Thiruttani. The journey by train takes around 2-3 hours. Once you reach Thiruttani, the temple is within walking distance from the railway station.</p>

<p>By Pilgrim Special Buses: The temple authorities organize special buses for devotees visiting Thiruttani Temple. These buses typically operate on specific days and pick up passengers from designated locations in Chennai. You can inquire at the temple or check their official website for information on these special buses.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>