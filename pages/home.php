

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" type="image/x-icon" href="../images/logo/brandlogoygold.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.example.com/path-to-your-font.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="../CSS/home.css">
</head>

<body>
    <!-- Start of Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="main.html">
                <img src="../images/logo/brandlogowhite.png" alt="Logo" id="navbar-logo">
                LUMINARY TOWERS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #EDCA38;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./community.php">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ammenities.php">AMMENTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item dropdown"> <!-- Add 'dropdown' class to the parent li -->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                            if(!isset($_SESSION)) {
                                session_start();
                            } 
                            if(isset($_SESSION["UserLogin"])) {
                                echo " " .$_SESSION["UserLogin"];

                            } else {
                                echo "Guest";
                            }

                            ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" id="logoutdrop">
                        <center><a href="logout.php">Logout</a> 
                    </center>
                    </div>
                    

                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Start of Hero Page -->

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <video autoplay muted loop width="100%">
                <source src="../video/Sequence 01.mp4" type="video/mp4">
            </video>
                <div class="carousel-caption d-none d-md-block">
                
                </div>
            </div>
            <!-- To make the video response. This code will have to stay in this line until line 106.  -->
            <div class="carousel-item">
                <img src="../images/background/hero3concierge.jpeg" class="d-block w-100" alt="This contains banner 2 of Luminary Towers"">
                <div class=" carousel-caption d-none d-md-block">
            </div>
            </div>
            <div class="carousel-item">
            <img src="../images/background//hero1.jpg" class="d-block w-100" alt="This contains banner 3 of Luminary Towers"">
            <div class=" carousel-caption d-none d-md-block">

            </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomePage" data-bs-slide="prev">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHomePage" data-bs-slide="next">
            </button>
              <!-- To make the video response. This code will have to stay in this line  -->
    </div>
    <!-- Open gap Bulletin -->

    <div class="background-container col-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 " id="announcementBox">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 circularPortion">
                                <div class="announcement">
                                    <center>
                                        <h2>ANNOUNCEMENT</h2>
                                    </center>
                                </div>
                                <p>Please see the following Circulars as of <span id="currentDate"></span>.</p>
                                <ul>
                                    <li>Circular 2023-102: Garbage Collection New Schedule</li>
                                    <li>Circular 2023-103: Genral Pest Control</li>
                                    <li>Circular 2023-104: Grease Trap Cleaning</li>
                                </ul>
                            </div>

                            <div class="row mx-1">
                                <div class="col-5 card  cardmainBody" style="width: 19rem;">
                                    <div class="card-body  ">
                                        <h5 class="card-title"><u>Important Reminders</u></h5>
                                        <h6 class="card-subtitle mb-2 text-muted">October01, 2023</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="card-link position-absolute bottom-0">Read now</a>

                                    </div>
                                </div>
                                <div class="col-5 card  cardmainBody " style="width: 19rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><u>Upcoming Holiday</u></h5>
                                        <h6 class="card-subtitle mb-2 text-muted">October 24, 2023</h6>
                                        <p class="card-text">During the holidays listed, please see below the name and contact number of the assigned Officers for your easy reference.</p>
                                        <a href="#" class="card-link position-absolute bottom-0">Read now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 " id="visualAnnouncement">
                    <div class="countDownCenter">
                        <h2 class="christmas-text">CHRISTMAS IS NEAR</h2>
                        <div class="xmasCountdown" id="countdown"></div>
                        <div class="xmasNote">
                            <p>
                                <center><i>List of events on December<br> will be announce on November 2, 2023.</i></center>
                            </p>

                        </div>


                    </div>
                    <div >
                        <img src="../images/christmas/christmas background2.jpg" alt="christmasBG">
                    </div>
                </div>
                <div class="col-12 ">&nbsp;</div>

                <div class="col-lg-6 col-sm-12 ">
                    <div class="slideshow-container">
                        <?php
                        $imageDirectory = "../images/trickortreat/";
                        $imageFiles = scandir($imageDirectory);

                        $imageFiles = array_diff($imageFiles, array('.', '..'));

                        foreach ($imageFiles as $image) {
                            echo '<div class="mySlides">';
                            echo '<img src="' . $imageDirectory . $image . '" alt="Image">';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 " id="upcomingEventBox">
                    <div class="upcomingEvent">
                        <center>
                            <h2>UPCOMING EVENT</h2>
                        </center>
                    </div>
                    <br>

                    <div class="upcomingdetails">
                        <p>Get Ready for a Spooktacular Halloween Trick-or-Treat Event!</p>
                        <div>
                            <ul>
                                <li> Date: October 31, 2023</li>
                                <li>Time: 5:00 PM - 8:00 PM</li>
                                <li>Location: Luminary Tower Event Hall</li>


                            </ul>
                            <p><i>Note. exclusive for Luminary Tower residents only</i></p>
                            <p>Only for thirteen (13) years of age and below</p>
                            <p>Reseration will be ended on October 30, 2023, 3pm</p>
                        </div>
                    </div>
                    
                    <?php
                        if (!isset($_SESSION)) {
                            session_start();
                        }

                        if (isset($_SESSION["UserLogin"]) && $_SESSION["UserLogin"] == 'member') {
                            echo '<center><a href="../pages/event.php" class="btn btn-dark" id="regBtn">Register Now</a></center>';
                        } else {
                            echo "<center><p>Welcome, Guest. The Event is for the members only<p></center>";
                        }
                        ?>
                 
                    <!-- <center><a href="../pages/event.php" class="btn btn-dark" id="regBtn">Register Now</a></center> -->
                </div>
            </div>
        </div>

    </div>

    <!-- End of open gap Bulletin -->

    <!-- Start of Footer -->
    <footer class="custom-footer py-4 mt-4">
        <div class="container">
            <div class="row">


                <!-- Column 1 -->

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 textStyle ">
                    <strong>BUSINESS HOURS</strong><br>
                    <p>Monday to Friday: 9:00 AM - 12:00 PM, 1:00 PM - 6:00 PMSaturday: 9:00 AM - 1:00 PM
                        Sunday and holidays: Closed</p></a><br><br>
                    <strong>ADDRESS</strong>
                    <p>2/F Tower 1, Lumina Tower 31st Ave, BGC Taguig City, Philippines</p><br>
                </div>

                <!-- Column 2 -->

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 textStyle">
                    <strong>YOU MAY REACH US</strong><br>
                    <p>Admin: (02) 7718-4364Engineering: (02) 7000-2381 <br>
                        Engineering: (02) 7000-2381<br>
                        Finance: (02) 8711-5598,(0998) 936-3766 (Smart), <br>(0967) 203-9054 (Globe) </p><br>

                </div>


                <!-- Column 3 -->
                <div class="col-lg-4 col-md-6 textStyle " id="footBranding">
                    <!-- <img src="../images/logo/Untitled design (6).png" alt="" id="footerLogo"> -->
                    <strong>CUSTOMER SERVICE</strong><br>
                    <p>
                        Luminary Development CorporationG/F Tower A, Two E-Com CenterOcean Drive, Mall Of Asia Complex Pasay City, 1300, PhilippinesPhone: (02) 8858-0300Email: customerservice@lumiratowers.com.
                    </p><br>

                </div>
            </div>
        </div>

    </footer>
    <!-- End of Footer -->
    <div class="col-lg-12 mb-lg-0 text-white text-center" id="copyRight">

        <div>
            <p id="copyNote">© 2016 - 2023 Luminary Towers Condominium Corporation. All rights reserved.</p>
        </div>
    </div>
    </div>
    <!-- scroll up -->
    <section><button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
            </svg>
        </button>
    </section>
    <!-- scroll up ends -->
    <!-- sroll to top -->
    <script>
        let mybutton = document.getElementById("btn-back-to-top");
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script>
        // Set the date of Christmas (December 25th)
        const christmasDate = new Date("2023-12-25T00:00:00").getTime();

        // Update the countdown every second
        const countdown = setInterval(function() {
            const now = new Date().getTime();
            const timeRemaining = christmasDate - now;

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            // provision if decided that there's an House and second countdown
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            const countdownElement = document.getElementById("countdown");
            countdownElement.innerHTML = `${days} days`;

            if (timeRemaining <= 0) {
                clearInterval(countdown);
                countdownElement.innerHTML = "Merry Christmas!";
            }
        }, 1000);
        // Script for Date
        var currentDate = new Date();


        var formattedDate = currentDate.toLocaleDateString();


        document.getElementById("currentDate").textContent = formattedDate;

        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000);
        }
    </script>

</body>

</html>