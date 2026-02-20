<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services | City Hospital</title>
    <script src="https://kit.fontawesome.com/c1df782baf.js"></script>
     <link rel="stylesheet" href="style.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

:root{
    --maincolor:#2ec8a6;
    --secondcolor:#f8a803;
    --thirdcolor:#f4ab01;
    --textcolor:#4A5764;
}
*{
    margin:0; 
    padding:0;
    box-sizing: border-box;
    outline: none; 
    border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition:all .2s linear;
    font-family:"Inter", sans-serif;;
    
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
}
header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem 7%;
    width: 100%;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    z-index: 1000;
    background-color: white !important;

}


logo{
    width: 100px;
}
.logo img{
    width: 50%
}   
navbar a{
    color: var(--textcolor);
    font-size: 1.7rem;
    margin: 1rem;
    position: relative;
    transition: 0.5s;

}
.navbar a:hover{
    color: var(--maincolor);
}
.navbar a::after{
    content: "";
    background-color: var(--maincolor);
    width: 0;
    position: absolute;
    height: 0.2rem;
    left: 0;
    margin-top: 0.5rem;
    top: 100%;
    transition: 0.5s;
}
.navbar a:hover::after{
    width: 100%;
}
#menu-bars{
    color: var(--textcolor);
    font-size: 2.5rem;
    cursor: pointer;
     margin-right: 1rem;
    display: none;
    
}
#menu-bars:hover{
    color: var(--maincolor);
}
.right-icons .btn{

    padding: 1.2rem 2rem;
    font-size: 1.7rem;
    color: var(--textcolor);
    border: 0.2rem solid var(--maincolor);
     text-decoration: none;
     cursor: pointer;
}
.right-icons .btn:hover{
    background-color: var(--maincolor);
}

/* header section ended */







.main-about{
    padding: 2rem 7%;
    width: 100%;
    background-image: url(images/backgroung-pattern-1png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.home{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 6rem;
    flex-wrap: wrap;
    gap: 1rem;
}
.home .home-left-content{
    flex: 1 1 40rem;
}
.home-left-content span{
    font-size: 2rem;
    color: var(--maincolor);
    padding: 1rem 0;
    font-weight: bolder;
}
    .home-left-content h2{
    font-size: 48px;
    margin: 1rem 0;
    
}

.home-left-content p{
    font-size: 1.7rem;
    color: var(--textcolor);
    line-height: 3rem;
}

.home .home-right-content  img{
    flex: 1 1 45rem;
}

.home .home-right-content  img{
         width: 100%;
         margin-top: 4rem;
}






@media (max-width:768px) {

    html{
        font-size: 55%;
    }
    .right-icons{
        display: flex;
        align-items: center;
    }

    header{
        padding: 2rem;
        background-color: white;
    }

    #menu-bars{
        
        display: initial;
    }

    .navbar{
        position: absolute;
        top: 100%;
        left: -100;
        height: 100vh;
        width: 100%;
    
    }
    .navbar.active{
        left: 0;
    }

    .navbar a{
        display: block;
        margin: 2rem;
        padding: 1rem;
        border: 1px solid var(--textcolor);
    }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 75%;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            margin-top: 30px;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            color: #0077b6;
        }
        h2 {
            color: #023e8a;
        }
        ul {
            line-height: 2;
        }
    </style>
</head>
<body>
    
<header>
        
        <div class="logo"><img src="images/logo3.png"alt=""></div>
    

        <nav class="navbar">
            <a href="INDEX.php">home</a>
            <a href="about.php">About</a>
            <a href="service.php">Service</a>
            <a href="gallery.php">Gallery</a>
            <a href="bolg.php">blog</a> 
            <a href="contact.php">contact</a> 
            


        </nav>


    
             <div class="right-icons">
            <div id="menu-bars" class="fas fa-bars"></div>
            <a href="make appointment.php" class="btn">Make Appointment</a>


            </div>
        </div>
        </header>


        <!-- header section ended -->
    !-- Home section started -->

        <div class="main-home">

            <div class="home">
                <div class="home-left-content">
                    <span>Services of  City Hospital</span>
                    <h2>TAKE CARE OF YOUR HEALTH, THAT IT MAY SERVE TO YOUR SERVE GOD.</h2>
                    <p class="lorem">City Hospital refer to the range of medical, diagnostic,
                         emergency, and support facilities provided by the hospital to ensure
                          the health and well-being of patients. These include outpatient and
                          inpatient care, specialized treatments in departments like cardiology,
                          pediatrics, orthopedics, and gynecology, 24/7 emergency.
                     </p> 

                     <div class="home-btn">
                            <a href="readmore.php">Read More</a>
                        
                            <a class="homebtnsec"href="adminmodule appointment.php">Appointment</a>
                        
                         <div class="home-right-content">
                    <img src="images/doctor services.png"alt="">

                </div>


                        </div>
    

<div class="container">
    <h1>Our Services</h1>

    <h2>Medical Services</h2>
    <a href="medical services.php"><img src="images/gernal medicine.jpg"></a>
    <ul>
        <li>General Medicine</li>
        <li>Cardiology</li>
        <li>Orthopedics</li>
        <li>Pediatrics</li>
        <li>Gynecology and Maternity Care</li>
        <li>Dermatology</li>
    </ul>

    <h2>Emergency and Critical Care</h2>
    <a href="emergeancy services.php"><img src="images/24hours 7days.jpg"></a>
    <ul>
        <li>24/7 Emergency Services</li>
        <li>Accident and Trauma Care</li>
        <li>Intensive Care Unit (ICU)</li>
        <li>Ambulance Services</li>
    </ul>

    <h2>Diagnostic Services</h2>
    <a href="diagnostic services.php"><img src="images/diagnastic services.jpg"></a>
    <ul>
        <li>Laboratory and Blood Testing</li>
        <li>X-Ray and Ultrasound</li>
        <li>CT Scan and ECG</li>
    </ul>

    <h2>Support Services</h2>
    <a href="support services.php"><img src="images/support services.jpg"></a>
    <ul>
        <li>Pharmacy Services</li>
        <li>Physiotherapy and Rehabilitation</li>
        <li>Health Check-up Packages</li>
        <li>Patient Counseling</li>
    </ul>
</div>

</body>
</html>
