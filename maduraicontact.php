<!DOCTYPE html>
<html>
<head>
  <title>Contact Madurai City</title>
  <style>
    /* CSS styling for the page */
    body {
      font-family: georgia, TimesNewRoman;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      color: black;
      text-align: center;
    }
    
    p {
      line-height: 1.6;
      margin-bottom: 15px;
    }
    
    .contact-container {
      display: flex;
      justify-content: space-between;
      max-width: 100%;
      margin-bottom: 40px;
    }
    
    .contact-details {
      flex-basis: 48%;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 4px;
    }
    
    .contact-details h2 {
      margin-top: 0;
    }
    
    .contact-details p {
      margin-bottom: 10px;
    }
    
    .contact-details img {
      max-width: 100%;
      height: auto;
      border-radius: 4px;
    }
    
    .contact-form {
      max-width: 800px;
      margin-left: 10%;
    }
    
    .contact-form label {
      display: block;
      margin-bottom: 10px;
    }
    
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .contact-form button {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .contact-form button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <header>
    <h1>Contact - Madurai City</h1>
  </header>

  <div class="contact-container">
    <div class="contact-details">
      <h2>Madurai Collector's Office</h2>
      <img src="maduraicollectorate.jpg" alt="Madurai Collector's Office">
      <p>Address: Collector's Office Road, Chinna Chokkikulam, Madurai - 625002</p>
      <p>Email: collector.mdu@tn.gov.in</p>
      <p>Phone: +91-452-2531110</p>
    </div>

    <div class="contact-details">
      <h2>Madurai Corporation</h2>
      <img src="maduraicorporation.jpg" alt="Madurai Corporation">
      <p>Address: Periyar Building, Alwarpuram, Madurai - 625002</p>
      <p>Email: commissioner@maduraicorporation.gov.in</p>
      <p>Phone: +91-452-2538450</p>
    </div>

    <div class="contact-details">
      <h2>Madurai Commissioner's Office</h2>
      <img src="maduraicommissioner.jpg" alt="Madurai Commissioner's Office">
      <p>Address: Commissioner's Office, 80 Feet Road, Anna Nagar, Madurai - 625020</p>
      <p>Email: commissioner.mdu@tn.gov.in</p>
      <p>Phone: +91-452-2536501</p>
    </div>
  </div>

  <h1>For Any Queries</h1>

  <div class="contact-form">
    <form>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>

  <footer>
    <p>&copy; 2023 Madurai City. All rights reserved.</p>
  </footer>
</body>
</html>
