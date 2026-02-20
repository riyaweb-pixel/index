<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital Doctors Module</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #eef2f3;
        }

        header {
            background-color: #6f42c1;
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
            background-color: #6f42c1;
            color: white;
        }

        button {
            background-color: #6f42c1;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        button:hover {
            background-color: #563d7c;
        }

        form {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            margin-top: 20px;
            border-radius: 5px;
        }

        form input, form select, form textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form input[type="submit"] {
            background-color: #6f42c1;
            color: white;
            border: none;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #563d7c;
        }
    </style>
</head>
<body>
    <header>
        City Hospital - Doctors Module
    </header>

    <nav>
        <a href="#profile">My Profile</a>
        <a href="#appointments">My Appointments</a>
        <a href="#patients">Patient Details</a>
        <a href="#reports">Add Reports</a>
    </nav>

    <main>
        <!-- Profile Section -->
        <section id="profile">
            <h2>My Profile</h2>
            <form>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" value="Dr. Joe">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="alice.brown@example.com">

                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" value="1234567890">

                <label for="specialization">Specialization</label>
                <input type="text" id="specialization" name="specialization" value="pediatrics">

                <input type="submit" value="Update Profile">
            </form>
        </section>

        <!-- Appointments Section -->
        <section id="appointments">
            <h2>My Appointments</h2>
            <table>
                <tr>
                    <th>Appointment ID</th>
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>A001</td>
                    <td>joe dhone</td>
                    <td>2026-02-10</td>
                    <td>10:00 AM</td>
                    <td>Confirmed</td>
                </tr>
                <tr>
                    <td>A002</td>
                    <td>Jane Smith</td>
                    <td>2026-02-12</td>
                    <td>2:00 PM</td>
                    <td>Pending</td>
                </tr>
            </table>
        </section>

        <!-- Patient Details Section -->
        <section id="patients">
            <h2>Patient Details</h2>
            <table>
                <tr>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Condition</th>
                </tr>
                <tr>
                    <td>P001</td>
                    <td>John Doe</td>
                    <td>45</td>
                    <td>Male</td>
                    <td>Heart Disease</td>
                </tr>
                <tr>
                    <td>P002</td>
                    <td>Jane Smith</td>
                    <td>32</td>
                    <td>Female</td>
                    <td>Migraine</td>
                </tr>
            </table>
        </section>

        <!-- Add Reports Section -->
        <section id="reports">
            <h2>Add Patient Report</h2>
            <form>
                <label for="patient">Select Patient</label>
                <select id="patient" name="patient">
                    <option value="P001">John Doe</option>
                    <option value="P002">Jane Smith</option>
                </select>

                <label for="report">Report Details</label>
                <textarea id="report" name="report" rows="5" placeholder="Enter patient report..."></textarea>

                <input type="submit" value="Submit Report">
            </form>
        </section>
    </main>
</body>
</html>
