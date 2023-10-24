<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking-Swimming Pool</title>
    <link rel="icon" type="image/x-icon" href="../images/logo/brandlogoygold.png">
    <link rel="stylesheet" href="../CSS/Booking_Lounge.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://kit.fontawesome.com/db2451deb4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="backgrnd-overlay">
        <!--nav start-->
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
                            <a class="nav-link" href="./home.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./community.php">PROPERTIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #FFF4D6;">AMMENITIES</a>
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
                            <center><a href="logout.php">Logout</a> </center>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!--nav end-->
        <!-- Content Starts Here -->
        <div class="container mainbooking">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            <a href="../pages/ammenities.php"><i class='fas fa-arrow-left' style='font-size:40px' id="custom-icon"></i></a>
                            SWIMMING POOL
                        </h1>
                    </div>

                    <div class="col-8">
                        <!-- Booking Gallery -->

                        <div class="col-lg-12 col-sm-12" id="box-left">

                            <div class="big-img">
                                <img src="../images/sports facilities/swimmingpool1.jpg">
                            </div>

                            <div class="images">
                                <div class="small-img img-fluid">
                                    <img src="../images/sports facilities/swimmingpool2.jpg" onclick="showImg(this.src)">
                                </div>

                                <div class="small-img img-fluid">
                                    <img src="../images/sports facilities/swimmingpool3.jpg" onclick="showImg(this.src)">
                                </div>

                                <div class="small-img img-fluid">
                                    <img src="../images/sports facilities/swimmingpool4.jpg" onclick="showImg(this.src)">
                                </div>


                            </div>
                            <hr>
                            <div class="accomodation">
                                <p><b>Properties:</b> &nbsp; &nbsp; Accomodates max of 10 pax and
                                    with life guad on duty</p>

                            </div>
                            <div class="reservation">
                                <p><b>Reservation:</b></p>
                                Available only every <b>Monday, Wenesday</b> and <b>Friday</b> at 6:00am and 6:00pm.
                                Pool reservation must be maximum at 4 hours for sports training activity.
                                Php5,000.00 for the first (2) hours; and additional Php1,000 (for succeeding hour), maximum of 4 hours.
                                Deposit Bond of Php 10,000 (Refundable) <br>
                            </div>
                        </div>

                    </div>
                    <!-- Booking Form -->
                    <div class="col-lg-4 col-sm-12">
                        <div class="border" id="formRightSide">
                            <p>From</p>
                            <p class="price">₱ 5000 </p>
                            <p>first four (2) hours</p>
                            <!-- form -->
                            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                <div class="mb-3">
                                    <label for="checkin">Check-in Date:</label>
                                    <input type="date" id="checkin" name="checkin" class="form-control">
                                    <p style="font-size: 11px;"><i>Pool reservation available during M-W-F.</i></p>
                                </div>
                                <div class="mb-3">
                                    <label for="reservationTime">Reservation Time:</label>
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name="reservationTime" id="amOption" autocomplete="off" checked> AM
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="reservationTime" id="pmOption" autocomplete="off"> PM
                                        </label>
                                    </div>
                                    <p style="font-size: 11px;"><i>AM starts at 6:00am. PM starts at 6:00pm</i></p>
                                </div>
                                <!-- <center><button type="submit" class="btn btn-dark">Book Now</button></center> -->
                                <?php
                                    if (!isset($_SESSION)) {
                                        session_start();
                                    }

                                    if (isset($_SESSION["UserLogin"]) && $_SESSION["UserLogin"] == 'member') {
                                        echo '  <center><button type="submit" name="submit" class="btn btn-dark">Book Now</button></center>';
                                    } else {
                                        echo "<center><p>Welcome, Guest. Booking is for the members only.<p></center>";
                                    }
                                    ?>

                              
                                <!-- php for displaying done booking-->
                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                                    echo "Done booking";
                                }
                                ?>
                            </form>
                        </div>
                    </div>

                    <!-- End of Booking Form -->

                    <hr>

                    <div class="col-12 row">

                        <div class="col-1"></div>
                        <div class="col-lg-2 col-sm-12">
                            <p> <i class='fas fa-shower' style='font-size:24px'></i>Shower before entering</p>
                        </div>

                        <div class="col-lg-2 col-sm-12">
                            <p> <i class='fas fa-running' style='font-size:24px'></i>No horseplaying</p>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <p><i class='fas fa-hamburger' style='font-size:24px'></i>Food NOT allowed</p>
                        </div>

                    </div>
                    <!-- More Info  -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-12">

                            <button class="borderless-btn" onclick="toggleInfo()"><b>More info:</b></button>
                        </div>
                        <div class="col-lg-6 col-sm-12" id="info" style="display: none;">



                            <p> <b> Swimming Pool Rules and Regulations</b></p>
                            1. Pool Hours: The swimming pool is open from 6:00am to 10:00pm.<br>
                            Any changes to operating hours will be posted in advance. <br>
                            2. Admission and Fees: All guests must pay the required admission fee to access the pool area. <br>
                            Children under 10 years old must be accompanied by an adult.<br>
                            3. Health and Hygiene: All swimmers must take a shower before entering the pool.<br>
                            Persons with open wounds, infections, or contagious diseases are not allowed in the pool.<br>
                            Please use the restroom facilities before entering the pool.<br>
                            4. Pool Conduct:<br>
                            Running, pushing, and horseplay are strictly prohibited in the pool area.<br>
                            Diving is only allowed in designated areas. No diving in the shallow end.<br>
                            No food, glass containers, or chewing gum are allowed in the pool area.<br>
                            Alcoholic beverages and smoking are not permitted on pool premises.<br>
                            5. Lifeguard Instructions: Swimmers must follow the instructions of the lifeguards at all times.<br>
                            In case of an emergency, please obey lifeguard signals and exit the pool immediately.<br>
                            6. Pool Toys and Floatation Devices: Inflatable toys and floatation devices are allowed, but they should not interfere with other swimmers or obstruct the lifeguards' view.<br>
                            Large pool floats and oversized toys may be restricted by the lifeguards.<br>
                            7. Swim Attire: Appropriate swimwear is required. Cut-off jeans and street clothing are not permitted.<br>
                            Swim diapers are required for infants and young children who are not toilet trained.<br>
                            8. Noise and Music: Please keep noise levels to a minimum to ensure an enjoyable environment for all.<br>
                            Use of personal music devices with headphones is allowed.<br>
                            9. Pool Closure: The pool may be closed temporarily for cleaning, maintenance, or in case of inclement weather.<br>
                            10. Personal Belongings: The management is not responsible for lost or stolen items. Please secure your belongings.<br>
                            11. Pets: Pets are not allowed within the pool area.<br>
                            12. Code of Conduct: All visitors are expected to be respectful and considerate of others at all times.<br>
                            13. Non-Compliance: Failure to comply with these rules may result in expulsion from the pool area.<br>
                            14. Management's Discretion: The pool manager and lifeguards have the authority to enforce these rules and make decisions in the best interest of safety and enjoyment.<br>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Whole Booking Container -->

        <!-- Content Ends Here -->

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

        <div class="col-lg-12 mb-lg-0 text-white text-center" id="copyRight">

            <div>
                <p id="copyNote">© 2016 - 2023 Luminary Towers Condominium Corporation. All rights reserved.</p>
            </div>
        </div>


        <!-- Javascript of image (5 img)-->
        <script>
            //script for booking photos
            let bigImg = document.querySelector('.big-img img');

            function showImg(pic) {
                bigImg.src = pic;
            }
            //-----------------------------------------------------------
            // script for date form, to blocked the current and previous date
            document.addEventListener("DOMContentLoaded", function() {
                const checkinInput = document.getElementById("checkin");
                const today = new Date();

                checkinInput.addEventListener("input", function() {
                    const selectedDate = new Date(checkinInput.value);

                    if (selectedDate <= today) {
                        alert("Please select a future date.");
                        checkinInput.value = "";
                    } else {
                        const dayOfWeek = selectedDate.getDay(); // 0 = Sunday, 1 = Monday, 2 = Tuesday, ...
                        if (![1, 3, 5].includes(dayOfWeek)) {
                            alert("Check-in is only allowed on Mondays, Wednesdays, and Fridays.");
                            checkinInput.value = "";
                        }
                    }
                });
            });

            //-----------------------------------------------------------
            // script for More info toggle
            function toggleInfo() {
                var info = document.getElementById("info");
                if (info.style.display === "none") {
                    info.style.display = "block";
                } else {
                    info.style.display = "none";
                }
            }

            //-----------------------------------------------------------
            // script for More info toggle
        </script>

</body>



</html>