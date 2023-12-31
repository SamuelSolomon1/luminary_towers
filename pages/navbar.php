
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/navbar.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.html">
            <img src="../images/logo/brandlogoygold.png" alt="Logo" id="navbar-logo">
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
                    <a class="nav-link" href="booking.html">AMENITIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
                <li class="nav-item dropdown"> <!-- Add 'dropdown' class to the parent li -->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DROPDOWN
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
               
            </ul>
        </div>
    </div>
</nav>



<!-- Footer Starts Here -->
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
                    <strong >CUSTOMER SERVICE</strong><br>
                    <p>
                    Luminary Development CorporationG/F Tower A, Two E-Com CenterOcean Drive, Mall Of Asia Complex Pasay City, 1300, PhilippinesPhone: (02) 8858-0300Email: customerservice@lumiratowers.com.
                    </p><br>
                    
                </div>
            </div>
            
        </div>  
      
    </footer>
<!-- Footer Ends Here -->
    <div class="col-lg-12 col-md-6 mb-4 mb-lg-0 text-white text-center" id="copyRight">
              
              <div>
                  <p id="copyNote">© 2016 - 2023 Luminary Towers Condominium Corporation. All rights reserved.</p>
              </div>
          </div>


</body>
</html>