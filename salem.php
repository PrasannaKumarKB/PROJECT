<!DOCTYPE html>
<html>
<head>
  <title>Salem Temple Tourism Website</title>
  <style>
    body {
      font-family: Georgia, 'Times New Roman', Times, serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
      font-size: 32px;
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

    .banner {
      background-image: url("salem_banner.jpeg");
      background-size: cover;
      height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .readmore {
        color: gold;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .readmore:hover {
        background-color:none;
    }

  </style>
</head>
<body>
  <header>
    <h1>S A L E M</h1>
  </header>
  <div class="banner"></div>
      
  <div id="container">
    <div class="city-description">
      <p>Salem, also known as Mango City, is a vibrant city located in the Salem district of Tamil Nadu. The district is famous for its rich cultural and religious heritage, with numerous temples attracting devotees and visitors from all over. Explore the divine aura and architectural marvels of these famous temples in Salem district.</p>
    </div>

    <div class="temple-grid">
      <div class="temple">
        <h3>Arulmigu Sugavaneswarar Temple</h3>
        <img src="sugavaneswarar.jpg" alt="Temple 1">
        <p>Arulmigu Sugavaneswarar Temple, situated in Salem, is a revered temple dedicated to Lord Shiva. The temple is known for its ancient architecture and serene ambiance. The presiding deity, Lord Sugavaneswarar, is believed to fulfill the wishes of devotees. The annual Panguni Uthiram festival is celebrated here with great enthusiasm.</p>
        <a href="sugavaneswarar.html" class="readmore">Read More -></a>
      </div>

      <div class="temple">
        <h3>Kailasanathar Temple, Tharamangalam</h3>
        <img src="kailasanathar3.jpg" alt="Temple 2">
        <p>Kailasanathar Temple, located in Tharamangalam, is a renowned ancient temple dedicated to Lord Shiva. The temple showcases intricate carvings and beautiful sculptures. It is a center of spirituality and attracts devotees seeking blessings and solace. The annual Maha Shivaratri festival is celebrated with grandeur.</p>
        <a href="kailasanathar3.html" class="readmore">Read More -></a>
      </div>

      <div class="temple">
        <h3>Arulmigu Angalamman Temple, Mettur</h3>
        <img src="angalamman_temple.jpg" alt="Temple 3">
        <p>Arulmigu Angalamman Temple, situated in Mettur, is a famous temple dedicated to Goddess Angalamman. The temple is known for its colorful festivals and rituals. Devotees visit this temple to seek the blessings of the goddess and participate in the annual Panguni Peruvizha, a grand festival celebrated here.</p>
        <a href="angalamman.html" class="readmore">Read More -></a>
      </div>

      <div class="temple">
        <h3>Arulmigu Maragathambigai Chandra Choodeswarar Temple, Karur</h3>
        <img src="maragathambigai_temple.jpg" alt="Temple 4">
        <p>Arulmigu Maragathambigai Chandra Choodeswarar Temple, located in Karur, is a famous temple dedicated to Lord Shiva and Goddess Parvati. The temple is renowned for its ancient architecture and the divine presence of the deities. Devotees visit this temple to seek marital harmony and prosperity.</p>
        <a href="maragathambigai.html" class="readmore">Read More -></a>
      </div>

      <div class="temple">
        <h3>Arulmigu Mariamman Temple, Veeraganur</h3>
        <img src="mariamman_temple.jpg" alt="Temple 5">
        <p>Arulmigu Mariamman Temple in Veeraganur is a sacred temple dedicated to Goddess Mariamman. The temple is famous for its annual festival, Thai Poosam, which attracts devotees from far and wide. The temple premises and surroundings exude a divine atmosphere, offering solace to devotees.</p>
        <a href="mariamman.html" class="readmore">Read More -></a>
      </div>

      <div class="temple">
        <h3>Arulmigu Kottai Mariamman Temple, Salem</h3>
        <img src="kottaimariamman.jpg" alt="Temple 6">
        <p>Arulmigu Kottai Mariamman Temple, situated in Salem, is a revered temple dedicated to Goddess Mariamman. The temple is known for its grand architecture and the annual Mariamman festival, which showcases vibrant processions and cultural events. Devotees seek the blessings of the goddess for protection and prosperity.</p>
        <a href="kottaimariamman.html" class="readmore">Read More -></a>
      </div>

      <div class="temple">
        <h3>Arulmigu Narasimha Swamy Temple, Namakkal</h3>
        <img src="narasimhaswamy.jpg" alt="Temple 7">
        <p>Arulmigu Narasimha Swamy Temple, located in Namakkal, is a famous temple dedicated to Lord Narasimha. The temple is perched on a hill and offers breathtaking views of the surrounding landscape. Devotees visit this temple to seek the blessings of Lord Narasimha and experience spiritual serenity.</p>
        <a href="narasimhaswamy.html" class="readmore">Read More -></a>
      </div>

      <div class="temple">
        <h3>Arulmigu Agneeshwarar Temple, Tharamangalam</h3>
        <img src="agneeshwarar_temple.jpg" alt="Temple 8">
        <p>Arulmigu Agneeshwarar Temple, situated in Tharamangalam, is a prominent temple dedicated to Lord Shiva. The temple is known for its Dravidian-style architecture and spiritual ambiance. Devotees flock to this temple to seek the blessings of Lord Agneeshwarar and experience inner peace.</p>
        <a href="agneeshwarar.html" class="readmore">Read More -></a>
      </div>

    </div>
  </div>
</body>
</html>