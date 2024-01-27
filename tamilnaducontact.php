<!DOCTYPE html>
<html>

<head>
  <title>Contact Us - Tamil Nadu Tourism</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
    }

    .contact-container {
      max-width: 800px;
      margin: 50px auto;
      padding: 40px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .contact-heading {
      text-align: center;
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #007bff;
    }

    .contact-info p {
      margin: 0;
      font-size: 18px;
      color: #555;
    }

    .contact-form label {
      display: block;
      margin: 15px 0 5px;
      font-size: 18px;
      color: #333;
    }

    .contact-form input,
    .contact-form textarea {
      width: calc(100% - 22px);
      padding: 12px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
      display: inline-block;
      box-sizing: border-box;
    }

    .contact-form textarea {
      height: 150px;
    }

    .contact-form button {
      padding: 12px 24px;
      font-size: 18px;
      font-weight: bold;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #0056b3;
    }

    .contact-image {
      background-image: url("tourism office.jpg");
      background-size: cover;
      background-position: center;
      height: 300px; /* Adjust the height as needed */
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .authorities-heading {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 15px;
      color: #333;
    }

    .authorities-info p {
      margin: 0;
      font-size: 16px;
      color: #555;
    }

    .authorities-info ul {
      list-style: none;
      padding: 0;
    }

    .authorities-info li {
      margin-bottom: 20px;
    }

    .authorities-info li strong {
      color: #007bff;
      font-size: 18px;
    }
  </style>
</head>

<body>
  <div class="contact-container">
    <div class="contact-image"></div>
    <h2 class="contact-heading">Contact Us</h2>

    <div class="contact-info">
      <p>For inquiries, feedback, or any assistance, please feel free to contact us:</p>
      <p>Email: tourism@tnstate.com</p>
      <p>Toll Free no: 1800-456-84923</p>
      <p>Address: Department Of Tourism, Wallajah Road, Chennai-2</p>
    </div>

    <form class="contact-form">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Send Message</button>
    </form>

    <div class="authorities-info">
      <h2 class="authorities-heading">Authorities</h2>
      <p>For specific inquiries or assistance, you can also contact the following authorities:</p>
      <ul>
        <li>
          <strong>Department of Tourism, Tamil Nadu</strong><br>
          Email: tourism@tnstate.com<br>
          Toll Free no: 1800-456-84923
        </li>
        <li>
          <strong>Tamil Nadu Tourism Development Corporation (TTDC)</strong><br>
          Email: ttdc@tamilnadu.gov.in<br>
          Toll Free no: 1800-456-84933
        </li>
        <!-- Add more authorities as needed -->
      </ul>
    </div>
  </div>
</body>

</html>
