<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>City Hospital Information</title>

<style>
  body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    padding: 20px;
  }

  .container {
    max-width: 900px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 6px;
  }

  h1 {
    text-align: center;
    color: #007BFF;
  }

  button {
    padding: 10px 14px;
    margin: 6px;
    background: #007BFF;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 4px;
  }

  button:hover {
    background: #0056b3;
  }

  .section {
    display: none;
    margin-top: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  th, td {
    border: 1px solid #ccc;
    padding: 8px;
  }

  th {
    background: #eee;
  }
  img{
    width:700px;
    hight:700%;
  }
  about.img{
    width:500px;
    hight:300%
}

</style>
</head>

<body>

<div class="container">
  <h1>City Hospital</h1>
  <p style="text-align:center;">Click buttons to read hospital information</p>

  <!-- Main Buttons -->
  <div style="text-align:center;">
    <button onclick="showSection('about')">About Us</button>
    <button onclick="showSection('doctors')">Doctors & Fees</button>
    <button onclick="showSection('tests')">Tests & Prices</button>
    <button onclick="showSection('rooms')">Rooms & Services</button>
    <button onclick="showSection('departments')">Departments</button>
    <button onclick="showSection('facilities')">Facilities</button>
    <button onclick="showSection('timing')">Doctor Availability</button>
  </div>

  <!-- About Us -->
  <div id="about" class="section">
    <h3>About City Hospital</h3>
    <p>
      City Hospital provides quality healthcare with advanced medical facilities,
      experienced doctors, and 24/7 emergency services. Patient care and safety
      are our top priorities.
    </p>
    <img src="images/city hospital d.jpg">
  </div>

  <!-- Doctors -->
  <div id="doctors" class="section">
    <h3>Doctors Name & Fees</h3>
    <table>
      <tr>
        <th>Doctor Name</th>
        <th>Specialist</th>
        <th>Fees</th>
        <th>dr.info</th>
      </tr>
      <tr>
        <td>Dr.joe</td>
        <td>pediatrics</td>
        <td>₹700</td>
        <td><a class="homebtnsec"href="doctors.php/dr.joe.php">pediatrics</a></td>
      </tr>
      <tr>
        <td>Dr.Gagandeep </td>
        <td>Oncologists</td>
        <td> ₹2000 </td>
        <td><a class="homebtnsec"href="doctors.php/de.gagandeep.php">oncologistis</a></td>
      </tr>
      <tr>
        <td>Dr. sunil kumar</td>
        <td>Determatologists</td>
        <td>₹800</td>
       <td> <a class="homebtnsec"href="doctors.php/dr.sunil kumar.php">Determatologists</a></td>
      </tr>
      <tr>
        <td>Dr. A. Verma</td>
        <td>Cardiologist</td>
        <td>₹800</td>
        <td> <a class="homebtnsec"href="doctors.php/dr. verma.php">Cardiologist</a></td>
      </tr>
      <tr>
        <td>Dr. R. Singh</td>
        <td>Orthopedic</td>
        <td>₹900</td>
        <td> <a class="homebtnsec"href="doctors.php/dr. r singh.php">Orthopedic</a></td>
      </tr>
      <tr>
        <td>Dr. S. Khan</td>
        <td>Neurologist</td>
        <td>₹1000</td>
        <td> <a class="homebtnsec"href="doctors.php/dr. s khan.php">Neurologist</a></td>
      </tr>
    </table>
  </div>

  <!-- Tests -->
  <div id="tests" class="section">
    <h3>Test Name & Price</h3>
    <table>
      <tr>
        <th>Test Name</th>
        <th>Price</th>
      </tr>
      <tr>
        <td>Blood Test</td>
        <td>₹250</td>
      </tr>
      <tr>
        <td>X-Ray</td>
        <td>₹400</td>
      </tr>
      <tr>
        <td>MRI</td>
        <td>₹3000</td>
      </tr>
      <tr>
        <td>CT scan</td>
        <td>₹4500</td>
      </tr>
      <tr>
        <td>Radiology</td>
        <td>₹4000</td>
      </tr>
      <tr>
        <td>orthopechics</td>
        <td>₹2000</td>
      </tr>
      <tr>
        <td>Cardiology</td>
        <td>₹4000</td>
      </tr>
      <tr>
        <td>Neurology</td>
        <td>₹5000</td>
      </tr>
      <tr>
        <td>ECG & ECHO</td>
        <td>₹2400</td>
      </tr>
      <tr>
        <td>ultrasound</td>
        <td>₹800</td>
      </tr><tr>
        <td>Pathology</td>
        <td>₹1200</td>
      </tr>
      

    </table>
  </div>

  <!-- Rooms -->
  <div id="rooms" class="section">
    <h3>Room Services & Price</h3>
    <table>
      <tr>
        <th>Room Type</th>
        <th>Price / Day</th>
        <th>Images</th>
      </tr>
      <tr>
        <td>General Ward</td>
        <td>₹1000</td>
        <td><img src="images/gernal ward.jpg">
      </tr>
      <tr>
        <td>Private Room</td>
        <td>₹4000</td>
        <td><img src="images/private_room.png">
      </tr>
      <tr>
        <td>ICU</td>
        <td>₹8000</td>
        <td><img src="images/icu.jpeg"></td>
      </tr>
    </table>
  </div>

  <!-- Departments -->
  <div id="departments" class="section">
    <h3>Departments & Doctors</h3>
    <ul>
      <li>Pediatrics – Dr. Joe</li>
      <li>oncologistis– Dr. Gagandeep</li>
      <li>Determatologists– Dr. Sunil Kumar</li>
      <li>Cardiologist – Dr. Verma</li>
      <li>Orthopedic – Dr. R.Singh</li>
      <li>Neurologist – Dr. S khan</li>
    </ul>
  </div>

  <!-- Facilities -->
  <div id="facilities" class="section">
    <h3>Hospital Facilities</h3>
    <ul>
      <li>24/7 Emergency</li>
      <li>Ambulance Service</li>
      <li>Pharmacy</li>
      <li>Laboratory</li>
      <li>MRI & CT Scan</li>
      <li>Free Parking</li>
    </ul>
  </div>

  <!-- Doctor Timing -->
  <div id="timing" class="section">
    <h3>Doctor Availability Time</h3>
    <table>
      <tr>
        <th>Doctor</th>
        <th>Available Time</th>
        <TH>DAYS</TH>
      </tr>
      <tr>
        <td>Dr. Joe</td>
        <td>10:00 AM – 2:00 PM</td>
        <td> Monday-Saturday</td>
      </tr>
      <tr>
        <td>Dr. gagandeep</td>
        <td>11:00 AM – 4:00 PM</td>
        <td> Monday-Friday</td>
        
      </tr>
      <tr>
        <td>Dr. sunil kumar</td>
        <td>10:00 AM – 3:00 PM</td>
        <td> Monday-Saturday</td>
      </tr>
      <tr>
        <td>Dr. A. Verma</td>
        <td>9:00 AM – 1:00 PM</td>
        <td> Monday-Saturday</td>
      </tr>
      <tr>
        <td>Dr. R. Singh</td>
        <td>12:00 PM – 4:00 PM</td>
        <td> Monday-Saturday</td>
      </tr>
      <tr>
        <td>Dr. S. Khan</td>
        <td>11:00 AM – 3:00 PM</td>
        <td> Monday-Friday</td>
      </tr>
    </table>
  </div>

</div>

<script>
  function showSection(id) {
    let sections = document.querySelectorAll('.section');
    sections.forEach(section => section.style.display = 'none');
    document.getElementById(id).style.display = 'block';
  }
</script>

</body>
</html>
