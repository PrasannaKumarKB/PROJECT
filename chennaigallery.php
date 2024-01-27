<!DOCTYPE html>
<html>
<head>
  <title>Popular Tourist Places in Chennai</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: georgia, TimesNewRoman;
      background-image:url("gallerybackground.webp");
      background-repeat:no-repeat;
      background-size:cover;
    }
    
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }
    
    .gallery-item {
      width: 300px;
      margin: 20px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      overflow: hidden;
    }
    
    .gallery-item img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }
    
    .gallery-item-content {
      padding: 20px;
    }
    
    .gallery-item-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
      text-align:center;
    }
    
    .gallery-item-description {
      font-size: 16px;
      color: black;
      text-align:center;
    }
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    .gallery img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease-in-out;
    }
    .header {
      background-image: url("header.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      padding: 20px;
      text-align: center;
      
    }
  </style>
</head>
<body>
<div class="header">
<a class="back-button" href="chennai.php" style="position: absolute; top: 20px; left: 20px; font-size: 48px; color:white;text-decoration: none;">&larr;</a>
    <h1>POPULAR TOURIST PLACES IN CHENNAI</h1>
  </div>
 <div class="gallery">
    <div class="gallery-item">
      <img src="marina.avif" alt="Marina Beach">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">Marina Beach</h3>
        <p class="gallery-item-description">Marina Beach is a natural urban beach in Chennai, Tamil Nadu, India. It stretches along the Bay of Bengal for about 13 kilometers, making it the longest natural urban beach in the country and the second longest in the world.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="kapaleeshwarartemple.jpg" alt="Kapaleeshwarar Temple">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">Kapaleeshwarar Temple</h3>
        <p class="gallery-item-description">Kapaleeshwarar Temple is a Hindu temple dedicated to Lord Shiva located in Mylapore, Chennai. It is one of the oldest and most famous temples in Chennai, known for its stunning Dravidian architecture and vibrant festivals.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="greaterchennaicorporation.jpg" alt="Fort St. George">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">Fort St. George</h3>
        <p class="gallery-item-description">Fort St. George is a historic fortress located in Chennai. It was the first English fortress in India, established in 1644. The fort houses several historical buildings, including St. Mary's Church and the Fort Museum, which displays artifacts from the colonial era.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="valluvarkottam.jpg" alt="Valluvar Kottam">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">Valluvar Kottam</h3>
        <p class="gallery-item-description">Valluvar Kottam is a popular monument and a memorial to the Tamil poet and philosopher Thiruvalluvar. It features a 39-meter high chariot-like structure with a life-size statue of Thiruvalluvar, surrounded by granite pillars inscribed with his verses.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="crocodilepark.jpg" alt="The Gateway">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">The Madras Crocodile Bank Trust and Centre for Herpetology</h3>
        <p class="gallery-item-description">The Madras Crocodile Bank Trust and Centre for Herpetology is a reptile zoo and herpetology research station, located 40 kilometres south of the city of Chennai, in state of Tamil Nadu, India.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="museum.jpg" alt="Cholamandal Artists' Village">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">Government Museum</h3>
        <p class="gallery-item-description">The Government Museum, Chennai, or the Madras Museum, is a museum of human history and culture located in the Government Museum Complex in the neighbourhood of Egmore in Chennai, India. Started in 1851, it is the second oldest museum in India after the Indian Museum in Kolkata. It is particularly rich in archaeological and numismatic collections. It has the largest collection of Roman antiquities outside Europe. Among them, the colossal Museum Theatre is one of the most impressive.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="velankanni.avif" alt="Vellankanni Beach">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">Velankanni Beach</h3>
        <p class="gallery-item-description">Velankanni Beach is a scenic beach located in the southern part of Chennai. It is known for its serene ambiance, golden sand, and picturesque views of the Bay of Bengal. The beach is a popular spot for relaxation and leisure activities.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="guindynational.jpg" alt="Guindy National Park">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">Guindy National Park</h3>
        <p class="gallery-item-description">Guindy National Park is a protected area located in the heart of Chennai city. It is one of the smallest national parks in India but is home to diverse flora and fauna, including deer, monkeys, snakes, and various bird species. The park also features a Children's Park and a Snake Park.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="santhome.jpg" alt="Santhome Cathedral">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">Santhome Cathedral</h3>
        <p class="gallery-item-description">Santhome Cathedral Basilica is a Roman Catholic basilica located in the Santhome neighborhood of Chennai. It is built over the tomb of St. Thomas, one of the twelve apostles of Jesus Christ. The cathedral's Gothic architecture and religious significance make it a popular pilgrimage site.</p>
      </div>
    </div>
  </div>
</body>
</html>
