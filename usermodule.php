<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital User Module</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #28a745;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        nav {
            width: 200px;
            background-color: #343a40;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }

        nav a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
            margin: 5px 0;
        }

        nav a:hover {
            background-color: #495057;
        }

        main {
            margin-left: 220px;
            padding: 20px;
        }

        h2 {
            color: #343a40;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #28a745;
            color: white;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        form {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            margin-top: 20px;
            border-radius: 5px;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        City Hospital User Dashboard
    </header>

    <nav>
        <a href="#profile">My Profile</a>
        <a href="#doctors">View Doctors</a>
        <a href="#book-appointment">Book Appointment</a>
        <a href="#appointments">My Appointments</a>
    </nav>

    <main>
        <!-- Profile Section -->
        <section id="profile">
            <h2>My Profile</h2>
            <form>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="John Doe">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="john@example.com">

                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" value="1234567890">

                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="123 Main St, City">

                <input type="submit" value="Update Profile">
            </form>
        </section>

        <!-- Doctors Section -->
        <section id="doctors">
            <h2>View Doctors</h2>
            <table>
                <tr>
                    <th>Doctor ID</th>
                    <th>Name</th>
                    <th>Specialization</th>
                </tr>
                <tr>
                    <td>D001</td>
                    <td>Dr.joe</td>
                    <td>Pediatrics</td>
                </tr>
                <tr>
                    <td>D002</td>
                    <td>Dr. gagandeep</td>
                    <td>Oncologistis</td>
                </tr>
                <tr>
                    <td>D003</td>
                    <td>Dr. Sunil Kumar</td>
                    <td>Determatologists</td>
                </tr>
                <tr>
                    <td>D004</td>
                    <td>Dr. Verma </td>
                    <td>Cardiologist</td>
                </tr>
                <tr>
                    <td>D005</td>
                    <td>Dr. R.Singh</td>
                    <td>orthopedic</td>
                </tr>
                <tr>
                    <td>D006</td>
                    <td>Dr. S.Khan</td>
                    <td>Neurologist</td>
                </tr>
            </table>
        </section>

        <!-- Book Appointment Section -->
        <section id="book-appointment">
            <h2>Book Appointment</h2>
            <form>
                <label for="doctor">Select Doctor</label>
                <select id="doctor" name="doctor">
                    <option value="D001">Dr. Joe (Pediatrics)</option>
                    
                <option value="D002">Dr. Gagandeep (oncologistis)</option>
                <option value="D002">Dr. Sunil kumar (oncologistis)</option>
                <option value="D002">Dr. Verma(oncologistis)</option>
                <option value="D002">Dr. R.Singh (oncologistis)</option>
                <option value="D002">Dr. S khan (oncologistis)</option>
                </select>

                <label for="date">Select Date</label>
                <input type="date" id="date" name="date">

                <label for="time">Select Time</label>
                <input type="time" id="time" name="time">

                <input type="submit" value="Book Appointment">
            </form>
        </section>

        <!-- My Appointments Section -->
        <section id="appointments">
            <h2>My Appointments</h2>
            <table>
                <tr>
                    <th>Appointment ID</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>A001</td>
                    <td>Dr. Joe</td>
                    <td>2026-02-10</td>
                    <td>10:00 AM</td>
                    <td>Confirmed</td>
                </tr>
                <tr>
                    <td>A002</td>
                    <td>Dr. Gangandeep</td>
                    <td>2026-02-12</td>
                    <td>2:00 PM</td>
                    <td>Pending</td>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>
