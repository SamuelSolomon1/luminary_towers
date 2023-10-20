<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="icon" type="image/x-icon" href="../images/logo/brandlogoygold.png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../CSS/contact.css">
</head>

<body>
  <!-- navbar start -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
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
            <a class="nav-link" href="./ammenities.php">AMMENITIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php">CONTACT</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends -->
  <!-- Your Main Content Starts Here -->
  <div class="mainBodybackground">
    <div class="container " id="mainConContacts">
      <div class="row">
        <div class="spacer">
          <h6>&nbsp;</h6>
        </div>
        <div class="col-lg-6 col-sm-12" id="box1">
          <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1557.3573677820407!2d121.05074506543471!3d14.551601408235447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8f3d8fdbde1%3A0x9c4b1e671e138f93!2sTrack%2030th!5e0!3m2!1sen!2sph!4v1697702130283!5m2!1sen!2sph" width="645" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-4 withborder" id="contactInfo">
                <h5>Address</h5>
                <p>
                  <strong>Property Management Office</strong> &nbsp;
                  30th Ave Bonifacio Global City,
                  Taguig City, 1634 Philippines
                </p>

                <p>www.luminarytowers.ph</p>
              </div>
              <div class="col-4 withborder" id="contactInfo">
                <h5>Contacts</h5>
                <p>
                  <strong>Admin:</strong> (02) 7718-4364
                  <strong>Engineering:</strong> (02) 7000-2381
                  <strong> Finance:</strong> (02) 8711-5598
                </p>

              </div>
              <div class="col-4" id="contactInfo">
                <h5>Business Hours</h5>
                <p>
                  <strong> Monday to Friday,</strong> 9:00 AM - 12:00 PM, 1:00 PM - 6:00 PM. <br>
                  <strong> Saturday,</strong> 9:00 AM - 1:00 PM. <br>
                  <strong>Sunday and holidays</strong>, Closed.
                </p>

              </div>

            </div>
          </div>

        </div>

        <div class="col-lg-6 col-sm-12 border-primary" id="box2">

          <h2>How can we help you? </h2>
          <p>Please get in touch with us</p>
          <form onsubmit="return validateForm()">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputName" required placeholder="Enter your full-name">
            </div>
            <div class="mb-3">
              <label for="exampleInputContactNumber" class="form-label">Contact Number</label>
              <input type="text" class="form-control" id="exampleInputContactNumber" required placeholder="Enter your contact number">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail" required placeholder="Enter your valid email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea name="message" rows="3" required class="form-control" id="message" placeholder="Type your message here"></textarea>
            </div>

            <center><button type="submit" class="btn btn-dark" id="conSubmitBtn">Submit</button></center>
          </form>
        </div>
      </div><!--end of row-->
    </div><!--end of container-->


    <div class="containerFAQ">

      <div class="container">
        <div class="row">
          <div class="col-md-12" id="box3">
            <h2>Frequently Asked Question</h2>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>How long has this condo been on the market?</b>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    You are likely to change lifestyles and priorities in the future, which may lead you to sell the property to someone else. However, condominium buildings typically have an average lifespan of 50 years which affects how resalable the property is at the given time.<br><br>
                    If you buy a unit from an older building, you may not gain much profit in the future from your initial investment. However, if you get a new unit or even score those that are in the pre-selling stage, it's likely that you got them at a lower price. This almost guarantees a positive return on investment.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <b>What is the neighborhood around the property like?</b>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Living in a condo in the Philippines can be considered ideal because of how convenient it is. But, before you buy a unit, ask your real estate agent what the area around the building looks like on a day-to-day basis. These can help you settle concerns about safety, noise, travel, and more.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <b>What's included in the sale?</b>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    The price of buying a condo unit does not come cheap. More often, apart from the unit itself, there are also other fees you need to cover. Asking about the inclusions can prevent unwanted surprises and expenses from coming your way, like association dues and parking fees.<br><br>
                    Discussing this will also let you know if you are entitled to other benefits that come with the unit, such as building amenities and repair services.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <b>Is the home in a flood zone or prone to other natural disasters?</b>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    The Philippines experiences typhoons regularly, which makes certain areas prone to flooding and other natural disasters. If you buy a unit in a flood-prone area, make sure that the building keeps you dry and safe during these difficult times.<br><br>
                    Ideally, roads should be passable even in the event of a storm or emergency. Having this information can save you the trouble of experiencing unwanted damage to your property and other belongings.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <b>Does it come with insurance? If so, what does it cover?</b>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Asking about the insurance policy is always a good idea because it can help you save money. In case of a disaster or theft, you can determine if the building will cover personal damages and other inconveniences that may come with the situation.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <b>What are the house rules, if there are any?</b>
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Some condominiums may have building owners that are more particular about how people use the properties. In some cases, these rules may affect your lifestyle habits, limiting what you can and cannot do inside and around the condominium.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="spacer">
            <h6>&nbsp;</h6>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End of your Content Here -->
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
  <!-- form validation -->
  <script>
    function validateForm() {

      var name = document.getElementById("exampleInputName").value;
      var contactNumber = document.getElementById("exampleInputContactNumber").value;
      var email = document.getElementById("exampleInputEmail").value;
      var message = document.getElementById("message").value;


      if (name === "" || contactNumber === "" || email === "" || message === "") {
        alert("All fields must be filled out");
        return false;
      }

      return true;
    }
  </script>
</body>

</html>