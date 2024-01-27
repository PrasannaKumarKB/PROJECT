<!DOCTYPE html>
<html>

<head>
    <title>Kailasanathar Temple</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("backgroundimage.jpg");
            background-repeat: no-repeat;
            background-size: cover;
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
    </style>
</head>

<body>
    <header>
        <h1>KAILASANATHAR TEMPLE</h1>
    </header>
    <div class="navigation">
        <ul>
            <li><a href="HOME.html">HOME</a></li>
            <li class="dropdown">
                <a href="#">AUDIO GUIDE</a>
                <div class="dropdown-content">
                    <a href="Kapaleeshwarar audio (1).mp3">TAMIL LANGUAGE</a>
                    <a href="">ENGLISH LANGUAGE</a>
                </div>
             <li><a href="https://www.google.com/maps/@13.0334759,80.2705295,3a,75y,288.16h,101.78t/data=!3m6!1e1!3m4!1s27FcVWOCZdV9Td0uiIWSVw!2e0!7i13312!8i6656?entry=ttu">VIRTUAL TOUR</a></li>
            <li><a href="darshanbooking.php">BOOK TICKETS</a></li>
            <li><a href="poojabooking.php">POOJA BOOKING</a></li>
            <li><a href="donation.php">DONATION</a></li>
            <li><a href="kapaleeshwararcontact.php">CONTACT</a></li>
      
                
                    

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
                    <img src="thirumayam1.jpg" alt="Temple 1" style="width: 100%; height: 500px">
                </div>
                <div class="carousel-item">
                    <img src="thirumayam2.jpg" alt="Temple 2" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="thirumayam3.jpg" alt="Temple 3" style="width: 100%; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img src="thirumayam4.jpg" alt="Temple 4" style="width: 100%; height: 500px;">
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
            <p>The Kailasanathar temple (Kanchipuram), also referred to as the Kailasanatha temple, is a Pallava-era historic Hindu temple in Kanchipuram, Tamil Nadu, India. Dedicated to Shiva, it is one of the oldest surviving monuments in Kanchipuram.[1] It reflects a Dravidian architecture and was built about 700 CE by Narasimhavarman II with additions by Mahendravarman III.[2] A square-plan temple, it has a mukha-mandapa (entrance hall), a maha-mandapa (gathering hall) and a primary garbha-griya (sanctum) topped with a four-storey vimana. The main sanctum is surrounded by nine shrines, seven outside and two inside flanking the entrance of the sanctum, all with forms of Shiva. The outer walls of the temple's prakara (courtyard) is also surrounded by cells.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>OPENING HOURS</h4>
            <p>6:00 AM - 12:30 PM</p>
            <p>4:00 PM - 8:00 PM</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>POOJA TIMINGS</h4>
            <p>Ushakala Pooja - 6.00 AM</p>
            <p>Kala Santhi - 7:00 AM</p>
            <p>Uchikalam - 12:00 PM</p>
            <p>Sayarakshai - 6:00 PM</p>
            <p>Ardha Jama Pooja - 8:00 PM</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>LOCATION</h4>
            <p> Pillaiyarpalayam, Kanchipuram-631501, Tamilnadu.</p>
        </div>
    </div>
    <div class="container">
        <div class="details-container">
            <h4>FESTIVALS</h4>
            <p>1. Maha Shivaratri</p>
            <p>2. Panguni Uthiram</p>
            <p>3. Navratri</p>
            <p>4. Arudra Darshanam</p>
            <p>5. Thai Poosam</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>