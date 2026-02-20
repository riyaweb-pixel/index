<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Hospital - Staff Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
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
            background-color: #fff;
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
            background-color: #2980b9;
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
    <h1>Hospital Staff Management</h1>

    <form id="staffForm">
        <label for="staffName">Staff Name:</label>
        <input type="text" id="staffName" required>

        <label for="role">Role:</label>
        <select id="role" required>
            <option value="">Select Role</option>
            <option value="Nurse">Nurse</option>
            <option value="Technician">Technician</option>
            <option value="Receptionist">Receptionist</option>
            <option value="Support Staff">Support Staff</option>
            <option value="Other">Other</option>
        </select>

        <label for="department">Department:</label>
        <input type="text" id="department" required>

        <label for="contact">Contact Number:</label>
        <input type="text" id="contact" required>

        <button type="submit">Add Staff</button>
    </form>

    <table id="staffTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Department</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Staff members will appear here -->
        </tbody>
    </table>

    <script>
        const staffForm = document.getElementById('staffForm');
        const staffTableBody = document.getElementById('staffTable').querySelector('tbody');

        staffForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const name = document.getElementById('staffName').value;
            const role = document.getElementById('role').value;
            const department = document.getElementById('department').value;
            const contact = document.getElementById('contact').value;

            // Insert new row in table
            const row = staffTableBody.insertRow();
            row.insertCell(0).textContent = name;
            row.insertCell(1).textContent = role;
            row.insertCell(2).textContent = department;
            row.insertCell(3).textContent = contact;

            // Add delete button
            const actionCell = row.insertCell(4);
            const deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'Delete';
            deleteBtn.className = 'action-btn';
            deleteBtn.addEventListener('click', () => row.remove());
            actionCell.appendChild(deleteBtn);

            staffForm.reset();
        });
    </script>
</body>
</html>
