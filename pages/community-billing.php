<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community-billing</title>
    <link rel="icon" type="image/x-icon" href="../images/logo/brandlogoygold.png">
    <link rel="stylesheet" href="../CSS/community.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- navbar starts -->
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
                            <a class="nav-link" href="#" style="color: #FFF4D6">PROPERTIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ammenities.php">AMMENITIES</a>
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
    <!-- navbar ends -->
    <main>
        <section>
            <div class="box1">
                <div class="container box">
                    <h1>General Provisions</h1><br>
                    <p class="box-padding">

                        1.1 These House Rules and Regulations (RULES), pursuant to the Master Deed with Declaration Restrictions of Luminary Towers (MASTER DEED), shall govern and regulate the use,<br>
                        occupancy and enforcement of the individual units, common areas, and limited common areas of the Condominium, to ensure their efficient and orderly management and to promote <br>
                        the common good of the unit owners and residents of Luminary Towers. <br><br>

                        1.2 All unit owners are required to comply with these RULES which must likewise be observed by (a) members of their family and their household help; (b) their lessees and members <br>
                        of the family and household help of said lessees; (c) their guest and guests of their lessees; (d) those transacting business with them, or visiting the Condominium. <br><br>

                        1.3 The Condominium Corporation or its duly authorized representative shall have full authority to implement these RULES which are a supplement to the bylaws and MASTER DEED <br>
                        and should be interpreted in relation there to. An authorized representative refers to any of the officers of the Condominium Corporation so empowered or the duly appointed <br>
                        Building Administration. Failure of the Condominium Corporation to enforce a rule or regulation or to render such determination shall in no way be construed as a waiver or an <br><br>
                        abandonment of said rule or regulation under any future application.

                        1.4 The Unit Owner may only be able to keep an animal or pet within the residential unit within Luminary Towers subject to compliance with the limitations and conditions prescribed <br>
                        in the RULES.

                        1.5 Each Unit Owner, occupant and/or tenant is obliged to keep and maintain his unit in a good tenant-able condition, a state of preservation and cleanliness and in a manner that will <br>
                        not cause any prejudice or damage to other units/or the common areas of Luminary Towers.</p>
                </div>
            </div> <!--box1 ends-->
            <!-- card navigation starts -->
            <div class="container bottom-box">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <!--add  <a class="nav-link active" aria-current="true" href="#"> for active tab-->
                                <a class="nav-link community-box" href="community.php">Administrative</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active community-box" aria-current="true" href="community-billing.php">Billing & Collection</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link community-box" href="community-engineering.php">Engineering</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Monthly Condominium Dues</h5>
                        <hr>
                        <!-- table starts-->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive"> <!-- Added table-responsive to scroll when viewport is small-->
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Distribution of Statement</th>
                                                    <th>Due Date</th>
                                                    <th>First Reminder Letter</th>
                                                    <th>Second Reminder Letter</th>
                                                    <th>First Legal Notice</th>
                                                    <th>Second Legal Notice</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15th day of the month</td>
                                                    <td>Every 30th of the month</td>
                                                    <td>7th of the succeeding bill month</td>
                                                    <td>Every 14th of succeeding bill month</td>
                                                    <td>The account is twenty-one (21) days overdue</td>
                                                    <td>The account reaches thirty (30) days overdue</td>
                                                    <td>The account reaches sixty (60) days overdue</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Late payment shall bear penalty equivalent to 2% per month.</td>
                                                    <td>It shall contain a reminder that the unit owner is given a period of seven (7) days from receipt of the letter within which to settle payment inclusive of the penalty.</td>
                                                    <td>It shall contain a reminder that the unit owner is given a period of seven (7) days from receipt of the letter within which to settle payment inclusive of the 2% penalty.</td>
                                                    <td>First demand letter.</td>
                                                    <td>Last and final demand.</td>
                                                    <td>Shall be issued by the Condo Corp's legal counsel and sent to delinquent accounts.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--card body div ends-->
                    <!-- table ends -->
                    <p class="card-text">For queries and clarification, you may contact the Property Management Office at (02) 8668-8124, (02) 7713-4364 or send us <br>
                        an email at luminary.admin@luminarytowers.ph or lma@luminaryresidences.ph.</p>
                    <p class="card-text">We apologize for the inconvenience and hope for your kind understanding. Thank you for your usual cooperation.</p>
                </div>
            </div>
            </div> <!-- div container ends -->
            <!-- card navigation ends -->
        </section>

    </main>
    <!-- footer starts -->
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
    <!-- footer ends -->
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
    <!--bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>