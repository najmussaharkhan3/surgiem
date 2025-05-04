<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SURGIEM</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/><style>
.con{
    background-image:url(images/main.jpg) ;
}
.cons{
    background-color: white;
    padding-top:0px ;
    border-radius: 10px;
    box-sizing: border-box;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}
</style>

</head>
<body>
 
  
  <nav class="navbar navbar-expand-lg bg-white " style="position:relative;">
    <div class="container-md">
    <a class="navbar-brand" href="#"><img src="images/logo removebg.png" alt="" class="ima"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active ari " style="text-align: center;
    align-items: flex-end;padding-left: 160px;"  href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ari " aria-current="page" style="text-align: center;
    align-items: flex-end;padding-left: 160px;" href="about.php">ABOUT-US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ari " style="text-align: center;
    align-items: flex-end;padding-left: 160px; " href="contact.php">CONTACT-US</a>
          </li>
        </ul>
      </div>
      <div class="icony">
      <a href="https://www.instagram.com/accounts/login/?next=%2Flivein.now%2Ftagged%2F&source=profile_tagged_tab"><i class='bx bxl-instagram-alt'></i></a>
      <a href="https://www.facebook.com/login/"><i class='bx bxl-facebook' ></i></a>
      <a href="#"><i class='bx bxl-twitter' ></i></a>
      </div>
    </div>
  </nav>
</div>
<div class="con">
  <!-- Contact Us Form Section -->
  <br>
    <div class="container cons "><br><br><br><br>
      <h2 class="text-center mb-4" style="color: #004aad; font-weight:600; font-size:55px;">Contact-Us</h2><br>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form id="contactForm" onsubmit="return validateForm()">
            <div class="mb-3">
              <label for="name" class="form-label"  style="font-size:18px; color :black; font-weight: 500; padding-top: 6px;">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
              <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label"  style="font-size:18px; color :black; font-weight: 500; padding-top: 6px;">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your mail">
              <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label"  style="font-size:18px; color :black; font-weight: 500; padding-top: 6px;">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Your message"></textarea>
              <div class="invalid-feedback">Please enter a message.</div>
            </div>
<br>
            <div class="mb-3">
              <label for="map" class="form-label" style="font-size:18px; color :black; font-weight: 600; padding-top: 6px;">Our Location</label>
              <iframe 
                class="container-fluid"
                width="100%"
                height="300"
                src="https://maps.google.com/maps?q=Pakistan Karachi&t=&z=15&ie=UTF8&iwloc=&output=embed"
                frameborder="0"
                style="border:0"
                allowfullscreen
              ></iframe>
            </div>
<br>
            <button type="submit" style="  color:black;
  font-size: 20px;
  border-right: 5px solid #004aad;
  border-top: 5px solid #004aad;
  border-bottom: 5px solid #004aad;
  font-weight: 600;
  border-left: 5px solid #004aad;
  border-radius: 12px;
  text-align:center;padding:10px;
  " class="btn">Submit</button>
          </form>
        </div>
      </div><br><br><br><br>
    </div>
  <br>
  </div>
    <!-- Contact Call-to-Action Section -->
    <section class="contact-cta py-5 text-white text-center" style="background-image: url(images/main.jpg);">
        <div class="container get">
            <h2>Get in Touch</h2>
            <p class="lead">We'd love to hear from you. Whether you're interested in our products or have any questions, our team is here to help.</p>
            <a href="contact.php" class="foo btn-light btn-lg mt-3" style="
  
  color: #004aad;
  font-weight: 500;
  font-size: 18px;
  padding: 12px;
  border: 2px solid white;
  text-decoration:none;
  padding-top:7px;
  " >Contact Us</a>
        </div>
    </section>


<footer  style="background-image:url(images/main.jpg);">
        <p class="p1">All Rights Reserved By <b>SURGIEM</b>(JADSONS LTD) &copy; since 2024</p>
        <p class="p2">All prices are inclusive of 13% GST</p>
    </footer>




</body>
</html>

  <!-- Script for form validation -->
  <script>
    function validateForm() {
      var valid = true;

      var name = document.getElementById("name");
      var email = document.getElementById("email");
      var message = document.getElementById("message");

      if (name.value.trim() === "") {
        name.classList.add("is-invalid");
        valid = false;
      } else {
        name.classList.remove("is-invalid");
      }

      var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!emailPattern.test(email.value.trim())) {
        email.classList.add("is-invalid");
        valid = false;
      } else {
        email.classList.remove("is-invalid");
      }

      if (message.value.trim() === "") {
        message.classList.add("is-invalid");
        valid = false;
      } else {
        message.classList.remove("is-invalid");
      }

      return valid;
    }

    function initMap() {
      const surgieM_Location = { lat: , lng: 67.0011 }; // Example coordinates for Karachi, Pakistan
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: surgieM_Location,
      });
      new google.maps.Marker({
        position: surgieM_Location,
        map: map,
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

</body>
</html>