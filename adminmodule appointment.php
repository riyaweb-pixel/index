<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f7f8;
        }

        header {
            background-color: #2a9df4;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        nav {
            width: 200px;
            background-color: #333;
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
            background-color: #575757;
        }

        main {
            margin-left: 220px;
            padding: 20px;
        }

        h2 {
            color: #333;
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
            background-color: #2a9df4;
            color: white;
        }

        button {
            background-color: #2a9df4;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d7ac4;
        }
    </style>
</head>
<body>
    <header>
        Admin Dashboard
    </header>

    <nav>
        <a href="manage patient.php">Manage Patients</a>
        <a href="manage doctor.php">Manage Doctors</a>
        <a href="full appointment.php">Appointments</a>
        <a href="hospital staff.php">Hospital Staff</a>
        <a href="usermodule.php">user admin</a>
        <a href="doctor admin.php">doctor admin</a>
    </nav>

</body>
</html>