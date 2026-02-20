<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital - Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f4f8;
        }
        header {
            background-color: #0066cc;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }
        h2 {
            color: #0066cc;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input, select, textarea {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #0066cc;
            color: white;
            border: none;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #004aad;
        }
        .appointment-type {
            display: flex;
            gap: 20px;
            margin: 10px 0;
        }
        .appointment-type label {
            font-weight: normal;
        }
    </style>
</head>
<body>

    <header>
        <h1>City Hospital</h1>
        <p>Book Your Appointment Online or Offline</p>
    </header>

    <div class="container">
        <h2>Appointment Form</h2>
        <form action="#" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your contact number" required>

            <label>Appointment Type:</label>
            <div class="appointment-type">
                <label><input type="radio" name="appointment_type" value="online" required> Online</label>
                <label><input type="radio" name="appointment_type" value="offline"> Offline</label>
            </div>

            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="">-- Select Department --</option>
                <option value="cardiology">Cardiology</option>
                <option value="neurology">Neurology</option>
                <option value="pediatrics">Pediatrics</option>
                <option value="orthopedics">Orthopedics</option>
                <option value="radiology">Radiology</option>
            </select>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="notes">Additional Notes:</label>
            <textarea id="notes" name="notes" rows="4" placeholder="Enter any specific requests or concerns"></textarea>

            <input type="submit" value="Book Appointment">
        </form>
    </div>

    <footer style="background-color:#0066cc; color:white; text-align:center; padding:15px; margin-top:30px;">
        &copy; 2026 City Hospital. All Rights Reserved.
    </footer>

</body>
</html>
