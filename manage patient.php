<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital Patient Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #219150;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #ffffff;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #2980b9;
            color: white;
        }
    </style>
</head>
<body>
    <h1>City Hospital Patient Management</h1>

    <form id="patientForm">
        <label for="name">Patient Name:</label>
        <input type="text" id="name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" required>

        <label for="gender">Gender:</label>
        <select id="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="disease">Disease:</label>
        <input type="text" id="disease" required>

        <button type="submit">Add Patient</button>
    </form>

    <table id="patientTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Disease</th>
            </tr>
        </thead>
        <tbody>
            <!-- Patient data will appear here -->
        </tbody>
    </table>

    <script>
        const form = document.getElementById('patientForm');
        const tableBody = document.getElementById('patientTable').querySelector('tbody');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const name = document.getElementById('name').value;
            const age = document.getElementById('age').value;
            const gender = document.getElementById('gender').value;
            const disease = document.getElementById('disease').value;

            // Add new row to table
            const row = tableBody.insertRow();
            row.insertCell(0).textContent = name;
            row.insertCell(1).textContent = age;
            row.insertCell(2).textContent = gender;
            row.insertCell(3).textContent = disease;

            // Reset form
            form.reset();
        });
    </script>
</body>
</html>
