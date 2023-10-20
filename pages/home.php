
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
                    <a class="nav-link" href="">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">PROPERTIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.html">AMMENTIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
          
            </ul>
        </div>
    </div>
</nav>
<!-- End of Navbar -->

<!-- Start of Hero Page -->

<div id="carouselHomePage" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images//background/hero3lobby.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/background/hero3concierge.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../images/background//hero1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomePage" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHomePage" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Open gap bet NavBar & Bulletin -->





<!-- End of open gap bet NavBar & Bulletin -->
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
                        <p><center><i>List of events on December<br> will be announce on November 2, 2023.</i></center></p>
                        
                        </div>
                        
                       
                    </div>
                    <div>
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
                        <p>Only for thriteen (13) years of age and below</p>
                        <p>Reseration will be ended on October 30, 2023, 3pm</p>
                    </div>
                </div>
                <center><a href="registration.html" class="btn btn-dark" id="regBtn">Register Now</a></center>
            </div>
                </div>
            </div>
        
</div>



<!-- Start of Footer -->
<footer class="custom-footer py-4 mt-4">
        <div class="container">
            <div class="row">
    
        
                <!-- Column 1 -->

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 text-white">
                    <strong style="color: #ffff;">BUSINESS HOURS</strong><br>
                      Monday to Friday: 9:00 AM - 12:00 PM, 1:00 PM - 6:00 PMSaturday: 9:00 AM - 1:00 PM
                      Sunday and holidays: Closed</a><br><br>
                      <strong style="color: #ffff;">ADDRESS</strong><br>
                    2/F Tower 1, Lumina Tower 31st Ave, BGC Taguig City, Philippines<br>
                </div>
    
                <!-- Column 2 -->

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 text-white">
                    <strong style="color: #ffff;">YOU MAY REACH US</strong><br>
                    Admin: (02) 7718-4364Engineering: (02) 7000-2381
                    Engineering: (02) 7000-2381
                    Billing and Collection: (02) 8711-5598,(0998) 936-3766 (Smart), (0967) 203-9054 (Globe) <br>
                    
                </div>
              
    
                <!-- Column 3 -->
                <div class="col-lg-4 col-md-6 text-white" id="footBranding">
                    <!-- <img src="../images/logo/Untitled design (6).png" alt="" id="footerLogo"> -->
                    <strong style="color: #ffff;">CUSTOMER SERVICE</strong><br>
                    SM Development CorporationG/F Tower A, Two E-Com CenterOcean Drive, Mall Of Asia ComplexPasay City, 1300, PhilippinesPhone: (02) 8858-0300Email: customerservice@smdevelopment.com.<br>
                    
                </div>
            </div>
            
        </div>  
      
    </footer>
<!-- End of Footer -->
    <div class="col-lg-12 col-md-6 mb-4 mb-lg-0 text-white text-center" id="copyRight">
              
              <div  id="copyNote">
                  © 2016 - 2023 Luminary Towers Condominium Corporation. All rights reserved.
              </div>
          </div>
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