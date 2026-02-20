<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City Hospital Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f8fb;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>City Hospital Appointment</h2>

    <form>
        <label>Patient Name</label>
        <input type="text" placeholder="Enter your name" required>

        <label>Age</label>
        <input type="number" placeholder="Enter your age" required>

        <label>Gender</label>
        <select required>
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <label>Department</label>
        <select required>
            <option value="">Select</option>
            <option>General Medicine</option>
            <option>Cardiology</option>
            <option>Orthopedics</option>
            <option>Pediatrics</option>
        </select>

        <label>Appointment Date</label>
        <input type="date" required>

        <label>Contact Number</label>
        <input type="tel" placeholder="Enter phone number" required>

        <label>Problem Description</label>
        <textarea rows="3" placeholder="Describe your problem"></textarea>

        <button type="submit">Book Appointment</button>
    </form>
</div>

</body>
</html>
