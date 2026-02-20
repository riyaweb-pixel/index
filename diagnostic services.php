<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Diagnostic Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f4f8;
        }
        header {
            background-color: #004aad;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }
        h2 {
            color: #004aad;
            text-align: center;
            margin-bottom: 30px;
        }
        .diagnostic-services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .service-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .service-card h3 {
            color: #004aad;
            margin-bottom: 10px;
        }
        footer {
            background-color: #004aad;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>City Hospital</h1>
        <p>Advanced Diagnostic Services for Accurate Healthcare</p>
    </header>

    <div class="container">
        <h2>Our Diagnostic Services</h2>
        <div class="diagnostic-services">
            <div class="service-card">
                <h3>Blood Tests</h3>
                <p>Comprehensive blood tests including CBC, glucose, cholesterol, and more.</p>
            </div>
            <div class="service-card">
                <h3>X-Ray</h3>
                <p>High-quality X-ray imaging for bones, chest, and other body parts.</p>
            </div>
            <div class="service-card">
                <h3>MRI Scan</h3>
                <p>Magnetic Resonance Imaging for detailed images of organs and tissues.</p>
            </div>
            <div class="service-card">
                <h3>CT Scan</h3>
                <p>Advanced computed tomography scans for precise internal imaging.</p>
            </div>
            <div class="service-card">
                <h3>Ultrasound</h3>
                <p>Safe ultrasound imaging for abdomen, pelvis, and pregnancy checkups.</p>
            </div>
            <div class="service-card">
                <h3>Pathology</h3>
                <p>Accurate analysis of tissue samples and biopsies for disease diagnosis.</p>
            </div>
            <div class="service-card">
                <h3>ECG & ECHO</h3>
                <p>Heart diagnostic tests including electrocardiogram and echocardiography.</p>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2026 City Hospital. All Rights Reserved.
    </footer>

</body>
</html>
