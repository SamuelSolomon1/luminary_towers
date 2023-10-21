<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="../CSS/Booking_Lounge.css">
    <script src="https://kit.fontawesome.com/db2451deb4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>

<body>
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
                    <a class="nav-link" href="">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">PROPERTIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.html">AMMENITIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
          
            </ul>
        </div>
    </div>
</nav>
    <!--nav end-->


    <div class="container">
        <div class="row">
            <h1> SOCIAL LOUNGE</h1>
            <div class="col-lg-7 border border-primary" id="box-left">

                <div class="big-img">
                    <img src="../images/amenities/socialhall1.jpg">
                </div>

                <div class="images">
                    <div class="small-img">
                        <img src="../images/amenities/socialhall2.jpg" onclick="showImg(this.src)">
                    </div>

                    <div class="small-img">
                        <img src="../images/amenities/socialhall3.jpg" onclick="showImg(this.src)">
                    </div>

                    <div class="small-img">
                        <img src="../images/amenities/socialhall4.jpg" onclick="showImg(this.src)">
                    </div>

                    <div class="small-img">
                        <img src="../images/amenities/socialhall5.jpg" onclick="showImg(this.src)">
                    </div>

                </div>

                <div class="accomodation1 border border-primary">
                    <p>Properties:</p>
                    <p>Accomodates: 60 pax</p>
                    <p>10 Tables & 60 chairs</p>
                </div>
            </div><!-- left -->


            <div class="col-5  border border-primary" id="box-right ">
               <div class="col-4 col-sm-7 border border-primary" id="formRightSide">
               <p>From</p>
                <p class="price">₱ 4000 </p>
                <p>first four (4) hours</p>

                <form>


                    <div class="mb-3">
                        <label for="checkin">Check-in Date:</label>
                        <input type="date" id="checkin" name="checkin" class="form-control">
                    </div>

                    <div class="mb-3">
                            <label for="time">Select a time:</label>
                            <input type="time" id="time" name="time" min="08:00" max="22:00">
                    </div>

                    <div class="mb-3">
                        <label for="event">Type of Event</label>
                        <input type="text" id="text" name="text" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-dark">Book Now</button>
                </form>

            </div><!-- right -->
               </div>

        </div><!-- row -->

        <hr>


        <!-- MORE INFO--->
        <div class="container border border-primary">
            <div class="row">

                <div class="row">
                    <div class="col col-lg-2 border border-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fan" viewBox="0 0 16 16">
                            <path d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0 0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668Zm0 5c0 .073-.004.146-.012.217 1.018-.019 2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944 2.346-1.656 3.079.277.343.442.78.442 1.254Zm-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535 2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8 10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216 2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6 8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37 8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8Zm-3.347-.632c1.267-.34 2.498-.355 3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06 4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" />
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14Zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16Z" />
                        </svg> Air Conditioning
                    </div>

                    <div class="col col-lg-2 border border-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                            <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z" />
                        </svg> Full Bar
                    </div>

                    <div class="col col-lg-3 border border-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z" />
                            <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z" />
                        </svg> Microphone & Sound System <br><br><br>
                    </div>
                </div>


                <div class="col col-lg-2 border border-primary">
                    <b>More info:</b>
                </div>

                <div class="col-5 border border-primary">

                    Php4,000.00 for the first (4) hours; and additional Php1,000 (for succeeding hour)
                    Deposit Bond of Php 5,000 (Refundable)<br><br>

                    1. Use of the function room is restricted to purely private social parties of unit owners and registered lessee; this is for exclusive enjoyment of the resident and their guests.<br>

                    2. User shall keep the function room clean and tidy reasonably clean after use<br>

                    3. Damaged caused to persons and property/ies shall be paid for the concerned of the residents.<br>

                    4. Operating hour of the function room is from 7:00am to 12:00 midnight; function room must be clean and vacated before 1:00am<br>

                    5. One hour is given free for set up time, before the event.<br>

                    6. The residents who reserved the function room shall be responsible for the actions of his/her guests at all times. He/she shall see to it that there will be no disturbing activity/ies such as loud and offensive music, unruly actions and loitering in any other places of Luminary Towers.<br>
                </div>

            </div>
        </div>

    </div><!-- Container -->


 
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

    <div class="col-lg-12 col-md-6 mb-4 mb-lg-0 text-white text-center" id="copyRight">
              
              <div>
                  <p id="copyNote">© 2016 - 2023 Luminary Towers Condominium Corporation. All rights reserved.</p>
              </div>
          </div>


    <!-- Javascript of image (5 img)-->
    <script>
        let bigImg = document.querySelector('.big-img img');

        function showImg(pic) {
            bigImg.src = pic;
        }
    </script>


    <!-- script -->

    <script>
        // Get the date input element
        const checkinInput = document.getElementById('checkin');

        // Get the current date
        const currentDate = new Date();
        const year = currentDate.getFullYear();
        const month = String(currentDate.getMonth() + 1).padStart(2, '0');
        const day = String(currentDate.getDate()).padStart(2, '0');

        // Set the min attribute of the date input to the current date
        checkinInput.min = `${year}-${month}-${day}`;
    </script>

</body>


        
</html>