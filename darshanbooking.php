<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'temple';

// Create a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $date = $_POST['date'];
    $time = $_POST['time'];
    $numTickets = $_POST['tickets'];
    $mobile = $_POST['mobile'];
    $rate = $_POST['rate'];

    // Prepare and execute the main ticket booking query
    $stmt = $conn->prepare("INSERT INTO darshan (date, time, num_tickets, mobile, rate) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi", $date, $time, $numTickets, $mobile, $rate);
    $stmt->execute();
    $bookingId = $stmt->insert_id; // Retrieve the generated booking ID

    // Process member fields
    for ($i = 0; $i < $numTickets; $i++) {
        $memberName = $_POST['member-name-' . $i];
        $memberAge = $_POST['member-age-' . $i];
        $memberDocument = $_FILES['document-' . $i];

        // Prepare and execute the member details query
        $stmt = $conn->prepare("INSERT INTO members (booking_id, name, age, document) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $bookingId, $memberName, $memberAge, $memberDocument);
        $stmt->execute();
    }

    // Close the prepared statement
    $stmt->close();

    // Display success message or perform further operations
    header("Location: paymentoptions.php");
    exit();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Darshan Ticket Booking</title>
    <style>
        /* CSS styling for the page */
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            padding: 20px;
            background-image: url("darshanbackground.avif");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .booking-container {
            max-width: 500px;
            margin: 0 auto;
        }

        .booking-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .booking-form input,
        .booking-form select,
        .booking-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .booking-form .member-fields {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .booking-form .member-fields label {
            display: block;
            margin-bottom: 5px;
        }

        .booking-form .member-fields input {
            width: 100%;
            padding: 8px;
        }

        .booking-form button {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .booking-form button:hover {
            background-color: #555;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <script>
        function generateMemberFields() {
            var numTickets = parseInt(document.getElementById('tickets').value);
            var memberFieldsContainer = document.getElementById('member-fields-container');

            // Clear existing member fields
            memberFieldsContainer.innerHTML = '';

            // Generate member fields based on the number of tickets
            for (var i = 0; i < numTickets; i++) {
                var memberFields = document.createElement('div');
                memberFields.classList.add('member-fields');

                var memberNameLabel = document.createElement('label');
                memberNameLabel.textContent = 'Member ' + (i + 1) + ' Name';

                var memberNameInput = document.createElement('input');
                memberNameInput.type = 'text';
                memberNameInput.name = 'member-name-' + i;
                memberNameInput.required = true;

                var memberAgeLabel = document.createElement('label');
                memberAgeLabel.textContent = 'Member ' + (i + 1) + ' Age';

                var memberAgeInput = document.createElement('input');
                memberAgeInput.type = 'number';
                memberAgeInput.name = 'member-age-' + i;
                memberAgeInput.required = true;

                var documentLabel = document.createElement('label');
                documentLabel.textContent = 'Attach Document';

                var documentInput = document.createElement('input');
                documentInput.type = 'file';
                documentInput.name = 'document-' + i;
                documentInput.accept = '.pdf, .doc, .docx';

                memberFields.appendChild(memberNameLabel);
                memberFields.appendChild(memberNameInput);
                memberFields.appendChild(memberAgeLabel);
                memberFields.appendChild(memberAgeInput);
                memberFields.appendChild(documentLabel);
                memberFields.appendChild(documentInput);

                memberFieldsContainer.appendChild(memberFields);
            }
        }
    </script>
</head>
<body>
    <header>
        <h1> Darshan Ticket Booking</h1>
    </header>

    <div class="booking-container">
        <form class="booking-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <label for="date">Select a Date:</label>
            <select id="date" name="date" required>
                <option value="">Choose a date</option>
                <option value="2023-07-01">July 1, 2023</option>
                <option value="2023-07-02">July 2, 2023</option>
                <option value="2023-07-03">July 3, 2023</option>
            </select>

            <label for="time">Time Slot:</label>
            <select id="time" name="time" required>
                <option value="">Choose a time slot</option>
                <option value="09:00">9:00 AM - 10:00 AM</option>
                <option value="10:00">10:00 AM - 11:00 AM</option>
                <option value="11:00">11:00 AM - 12:00 PM</option>
                <option value="14:00">2:00 PM - 3:00 PM</option>
                <option value="15:00">3:00 PM - 4:00 PM</option>
                <option value="16:00">4:00 PM - 5:00 PM</option>
            </select>

            <label for="tickets">Number of Tickets:</label>
            <input type="number" id="tickets" name="tickets" min="1" required onchange="generateMemberFields()">

            <label for="rate">Rate:</label>
            <select id="rate" name="rate" required>
                <option value="">Choose a rate</option>
                <option value="50">50 Rupees</option>
                <option value="100">100 Rupees</option>
                <option value="300">300 Rupees</option>
            </select>

            <div id="member-fields-container"></div>

            <label for="mobile">Mobile Number (Booking Person's):</label>
            <input type="text" id="mobile" name="mobile" required>

            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>

