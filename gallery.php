<!DOCTYPE html>
<html>
<head>
  <title>Gallery Page</title>
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
    <h1>EXPLORE OTHER PLACES</h1>
  </div>
 <div class="gallery">
    <div class="gallery-item">
      <img src="ootygallery.jpg" alt="Image 1">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">OOTY - QUEEN OF HILL STATIONS</h3>
        <p class="gallery-item-description">Ooty, officially known as Udhagamandalam (also known as Ootacamund; abbreviated as Udhagai), is a town and a municipality in the Nilgiris district of the South Indian state of Tamil Nadu. It is located 86 km (53 mi) north west of Coimbatore, 100 km (65 mi) north west of Tirupur, 128 km (80 mi) south of Mysore and is the headquarters of the Nilgiris district. It is a popular hill station located in the Nilgiri Hills. It is popularly called the "Queen of Hill Stations". It was the summer capital of the Madras Presidency.

</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="kodaikanalgallery.avif" alt="Image 2">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">KODAIKANAL - PRINCESS OF HILL STATIONS</h3>
        <p class="gallery-item-description">Kodaikanal is a hill town in the southern Indian state of Tamil Nadu. It’s set in an area of granite cliffs, forested valleys, lakes, waterfalls and grassy hills. At 2,000 meters above sea level, the town centers around man-made, star-shaped Kodaikanal Lake, bordered by evergreen forest. Rowing boats can be hired, and hikers and cyclists follow the 5k Lake Road path around the shore. </p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="yercaudgallery.webp" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">YERCAUD - POOR MAN'S OOTY</h3>
        <p class="gallery-item-description">Yercaud is a hill station town in the south Indian state of Tamil Nadu. It lies in the Shevaroy Hills, known for their orange groves, and coffee, fruit and spice plantations. Yercaud Lake has a boathouse, and is surrounded by gardens and woods. On the lake’s eastern shore, Anna Park has local plants and a Japanese garden with bonsai. To the southwest, Lady’s Seat vantage point has a watchtower with a telescope.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="kollihills.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">KOLLIMALAI - MOUNTAINS OF DEATH</h3>
        <p class="gallery-item-description">Kolli Hills or Kolli Malai is a small mountain range located in central Tamil Nadu and spread over the Namakkal district and Tiruchirapalli district of India. The mountains rise to 1300 m in height and cover an area of approximately 280 km². It is situated at a distance of 43 km from Namakkal and 120 km from Trichy.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="valparaigallery.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">VALPARAI - THE SEVENTH HEAVEN</h3>
        <p class="gallery-item-description">Valparai is a hill station in the south Indian state of Tamil Nadu. Nallamudi Viewpoint has vistas of the Anamalai Hills in the Western Ghats, and surrounding tea estates. To the northwest, in Kerala, Parambikulam Tiger Reserve is a forested area, with teak plantations and trails, sheltering tigers and Indian elephants. Northeast of town, the Anamalai Tiger Reserve is home to tigers, panthers, elephants and macaques.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="courtallam.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">COURTALLAM</h3>
        <p class="gallery-item-description">Coutrallam Falls is located in Tenkasi district in the South Indian state of Tamil Nadu bordering Kollam district, Kerala. The falls is located on the Western Ghats on the river Chittar and is considered a "medical spa" on account of the medical smell in the waters. It is located 5 km from the nearest city Tenkasi.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="hogenakkal.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">HOGENAKKAL WATERFALLS</h3>
        <p class="gallery-item-description">Hogenakkal Falls is a waterfall in South India on the Kaveri river on the border between Dharmapuri district of Tamil Nadu and Chamrajnagar district of Karnataka. It is sometimes referred to as the "Niagara Falls of India," it is known for bathing areas and hired boat rides and as a major tourist attraction. Carbonatite rocks in this site are considered to be the oldest of its kind in South Asia and one of the oldest in the world.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="thirparapu.webp" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">THIRPARAPPU WATERFALLS</h3>
        <p class="gallery-item-description">Thirparappu Waterfalls is located near Kulasekharam town in Kanyakumari district, Tamil Nadu state, India.

The Kodayar River makes its descent at Thiruparappu. The waterfalls is about 13 kilometres (8.1 mi) from Pechiparai Dam. It is just a 15 min drive from the waterfalls. The riverbed is rocky and about 300 feet (91 m) in length.

Other popular waterfalls in Kanyakumari District are Ullakaarvi falls, Vattaparai Falls and Kalikesam falls. All these falls are located in the Western Ghats.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="thirumoorthyfalls.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">THIRUMOORTHY WATERFALLS</h3>
        <p class="gallery-item-description">It is 3KM away from Thirumoorthy Dam and 1.5KM away from Thirumoorthy Temple. The best time to visit the waterfall is the winter or rainy season(October to March). The waterfall emerged from the Western Ghats. In the summer times, the water flow will be very little.

Before stepping into the way of the waterfall, make sure you’re satisfied with the level of water by watching the water move around the Temple.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="kumbakarai.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">KUMBAKARAI WATERFALLS</h3>
        <p class="gallery-item-description">Kumbakkarai Falls are lesser known falls in the foothills of the Kodaikanal Hills. They are located at in Theni district, 9 kilometers from Periyakulam. Kumbakkarai Falls are located along the Kodai-Vellagavi-Periyakulam footpath. These falls have two stages.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="marina.avif" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">MARINA BEACH</h3>
        <p class="gallery-item-description">Marina Beach, or simply the Marina, is a natural urban beach in Chennai, Tamil Nadu, India, along the Bay of Bengal. The beach runs from near Fort St. George in the north to Foreshore Estate in the south, a distance of 6.0 km, making it the second longest urban beach in the world, after Cox's Bazar Beach. </p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="dhanushkodi.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">DHANUSHKODI BEACH</h3>
        <p class="gallery-item-description">Dhanushkodi Beach lies on the tip of the Rameswaram island. In this beach, the Bay of Bengal and Indian Ocean merge which is known as Arichal Munai in Tamil. Before 1964, Dhanushkodi was a busy, crowded city. The Dhanushkodi Beach attracted thousands of tourists each day.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="kanyakumaribeach.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">KANYAKUMARI BEACH</h3>
        <p class="gallery-item-description">Located in the southernmost part of India, Kanyakumari beach with its beautiful hue-changing beaches, the confluence of three water bodies: Bay of Bengal, Indian Ocean, and the Arabian Sea. Miraculously, here you can see that the water of three seas does not mix, you can distinguish between the turquoise blue, deep blue, and sea green waters of the three seas, though the colors keep changing with the season and the day's weather.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="covelong.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">COVELONG BEACH</h3>
        <p class="gallery-item-description">Covelong is a fishing village in Chennai, India, 40 kilometres south of Chennai, on the East Coast Road en route to Mahabalipuram. Covelong was a port town developed in the 1720s by the Ostend Company on a place provided by the Nawab of Carnatic Saadat Ali.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="mahabalipuram.jpeg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">MAHABALIPURAM BEACH</h3>
        <p class="gallery-item-description">Locally referred to as Mamallapuram, Mahabalipuram is located at a distance of about 58 km from Chennai. The historical town of Mahabalipuram has made it a distinctive place for itself amongst the most popular tourist destinations in the state of Tamil Nadu.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="velankanni.avif" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">VELANKANNI BEACH</h3>
        <p class="gallery-item-description">Velankanni Beach is one of the most scenic beaches on the Eastern coast of India. The Church of Our Lady of Health is located very close to the beach which makes it a pilgrim hotspot. Vellankani has a history of religion and culture. It was a trading port for Rome and Greece only to lose its importance to its neighbor Nagapattinam later. It is one of the most visited pilgrim destinations in Southern India.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="mudumalai.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">MUDUMALAI TIGER RESERVE</h3>
        <p class="gallery-item-description">Mudumalai National Park is a national park in the Nilgiri Mountains in Tamil Nadu in southern India. It covers 321 km² at an elevation range of 850–1,250 m in the Nilgiri District and shares boundaries with the states of Karnataka and Kerala. A part of this area has been protected since 1940.</p>
      </div>
    </div>
    <div class="gallery-item">
      <img src="anaimalai.jpg" alt="Image 3">
      <div class="gallery-item-content">
        <h3 class="gallery-item-title">ANAMALAI TIGER RESERVE</h3>
        <p class="gallery-item-description">Anaimalai Tiger Reserve, earlier known as Indira Gandhi Wildlife Sanctuary and National Park and as Anaimalai Wildlife Sanctuary, is a protected area in the Anaimalai Hills of Pollachi and Valparai taluks of Coimbatore District and Udumalaipettai taluk in Tiruppur District, Tamil Nadu, India.</p>
      </div>
    </div>
  </div>
</body>
</html>
