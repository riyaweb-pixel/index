

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City Hospital Blog</title>
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
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: #f4f6f8;
            color: #333;
        }
        header {
            background-color: #0077b6;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }
        h2 {
            color: #0077b6;
            margin-bottom: 20px;
            text-align: center;
        }
        .blog-post {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .blog-post h3 {
            color: #023e8a;
            margin-bottom: 8px;
        }
        .blog-post .date {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }
        .read-more {
            color: #0077b6;
            text-decoration: none;
            font-weight: bold;
        }
        footer {
            text-align: center;
            padding: 15px;
            background-color: #023e8a;
            color: white;
            margin-top: 30px;
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
            <a href="make appointment.php"class="btn">Make Appointment</a>


            </div>
        </div>
        </header>


        <!-- header section ended -->
    !-- Home section started -->

        <div class="main-home">

            <div class="home">
                <div class="home-left-content">
                    <span>City Hospital blogs</span>
                    <h2>Setting the standard for precission,accuracy,and patient-centered care.</h2>
                    <p class="lorem">City hospital blogs provide essential advice on preventative health,
                     such as washing hands, getting vaccinated, and eating healthy to avoid seasonal 
                     infections. They also offer tips for hospital stays, including bringing personal
                     items for comfort, understanding safety measures like fall prevention, and 
                     managing medication. 
                     </p> 

                     <div class="home-btn">
                            <a href="readmore.php">Read More</a>
                            <a class="homebtnsec"href="adminmodule appointment.php">Appointment</a>
                        </div>


                        </div>

                     <div class="home-right-content">
                    <img src="images/blogs topic.jpg"alt="">

                </div>

    </header>
    <div class="container">
    <h2>Latest Blog Posts</h2>

    <div class="blog-post">
        <h3>Importance of Regular Health Checkups</h3>
        <div class="date">January 10, 2026</div>
        <a href="regular health checkup.php"><img src="images/impotance of regular health.jpg"></a>
        <p>
            Regular health checkups help in early detection of diseases and improve
            long-term health outcomes. Learn why preventive care is essential.
        </p>
        <a href="regular health checkup.php" class="read-more">Read More</a>
    </div>

    <div class="blog-post">
        <h3>Tips for a Healthy Heart</h3>
        <div class="date">January 3, 2026</div>
        <a href="heart tips.php"><img src="images/health tips.jpg"></a>
        <p>
            Heart disease can be prevented with simple lifestyle changes. Our doctors
            share easy tips to keep your heart healthy and strong.
        </p>
        <a href="heart tips.php" class="read-more">Read More</a>
    </div>

    <div class="blog-post">
        <h3>Managing Stress in Daily Life</h3>
        <div class="date">December 20, 2025</div>
        <a href="stress mangening.php"><img src="images/stress-managment-in-your-life.jpg"></a>
        <p>
            Stress affects both mental and physical health. Discover practical ways
            to manage stress and improve your overall well-being.
        </p>
        <a href="stress mangening.php" class="read-more">Read More</a>
    </div>
</div>

<footer>
    <p>&copy; 2026 City Hospital. All Rights Reserved.</p>
</footer>

</body>
</html>

