<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital Admin - Manage Doctors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #34495e;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2573a6;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #16a085;
            color: white;
        }
        .action-btn {
            background-color: #e74c3c;
            padding: 5px 8px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
        .action-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <h1>Admin Panel - Manage Doctors</h1>

    <form id="doctorForm">
        <label for="doctorName">Doctor Name:</label>
        <input type="text" id="doctorName" required>

        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" required>

        <label for="experience">Years of Experience:</label>
        <input type="number" id="experience" min="0" required>

        <label for="contact">Contact Number:</label>
        <input type="text" id="contact" required>

        <button type="submit">Add Doctor</button>
    </form>

    <table id="doctorTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Specialization</th>
                <th>Experience (Years)</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Doctors will appear here -->
        </tbody>
    </table>

    <script>
        const doctorForm = document.getElementById('doctorForm');
        const doctorTableBody = document.getElementById('doctorTable').querySelector('tbody');

        doctorForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('doctorName').value;
            const specialization = document.getElementById('specialization').value;
            const experience = document.getElementById('experience').value;
            const contact = document.getElementById('contact').value;

            const row = doctorTableBody.insertRow();

            row.insertCell(0).textContent = name;
            row.insertCell(1).textContent = specialization;
            row.insertCell(2).textContent = experience;
            row.insertCell(3).textContent = contact;

            // Action cell with delete button
            const actionCell = row.insertCell(4);
            const deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'Delete';
            deleteBtn.className = 'action-btn';
            deleteBtn.addEventListener('click', () => row.remove());
            actionCell.appendChild(deleteBtn);

            doctorForm.reset();
        });
    </script>
</body>
</html>
