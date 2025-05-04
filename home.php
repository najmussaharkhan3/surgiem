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
/>

</head>
<body>
  <div style ="background-image:url(images/main.jpg) ; ">
  <div class="header"><a  href="#"><img class="header" src="images/logo removebg.png" alt=""></a></div>
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
  <section class="home">
    <div class="home-content">
        <h1>Surgiem Surgical</h1>
        <h3>Instruments</h3>
        <p> At SurgiEm, we specialize in providing high-quality surgical instruments designed to meet the rigorous demands of modern medical procedures. Our precision-crafted tools are trusted by healthcare professionals for their reliability and performance. Whether you're looking for specialized instruments or general surgical tools, SurgiEm offers a comprehensive selection to support excellence in patient care. Choose SurgiEm for instruments that embody precision, quality, and innovation.</p>
            <a href="about.php" class="btn">View More</a>
    </div>
    <div class="home-img">
        <div class="rhombus">
            <img class="img" src="images/Surgical-Instruments-with-Marks-1.webp" >
        </div>
    </div>
    <div class="rhombus2"></div>
    <br><br>
</section>
<br><br><br><br>
<h1 style="color: #004aad; font-weight:600; text-align: center;">Surgical Instruments</h1>
  <br><br>
  <div class="container" style="background-color:#004aad;">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/Surgical-Instruments-with-Marks-1.webp" alt="Surgical Instruments 1">
        </div>
        <div class="swiper-slide">
          <img src="images/surgical-tools-displayed-stockcake.jpg" alt="Surgical Instruments 2">
        </div>
        <div class="swiper-slide">
          <img src="images/work.jpg" alt="Surgical Instruments 3">
        </div>
        <div class="swiper-slide">
          <img src="images/back.jpg" alt="Surgical Instruments 4">
        </div>
        <div class="swiper-slide">
          <img src="images/3_63803250-d4a1-4a10-8c23-39c34b9fd8cf.webp" alt="Surgical Instruments 5">
        </div>
        <div class="swiper-slide">
          <img src="images/Untitled design (2).jpg" alt="Surgical Instruments 5">
        </div>
      </div>
      <!-- Navigation Buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      autoplay: { delay: 2000 },
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>




<br><br><br><br><br><br><br>
<h2  style="color: #004aad; font-weight:600; font-size:39px; text-align: center;" >Employe Record</h2>;
<br>
<div class="container">
  
<?php
    //creating connection
    $conn = mysqli_connect("localhost","root","","crud");
    //sql Command line
    $sql = "SELECT employee.emp_id, employee.emp_name, employee.emp_phone, emp.cname, employee.emp_salary, employee.date_of_joining 
    FROM employee 
    LEFT JOIN emp ON employee.emp_position = emp.c_id";

    
    $result = mysqli_query($conn, $sql) or die("connection failed");
 
    //to check if there is any data inside $result command or not
    if(mysqli_num_rows($result) > 0){

    ?>





    
    <table class="table table-light table-bordered" >
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th >Phone</th>
        <th >Position</th>
        <th>Salary</th>
        <th>Joining Date</th>
        <th colspan="3" class="text-center">Action</th>
        </thead>
        <tbody>
        <?php
        
         while($row = mysqli_fetch_assoc($result)){
         
          ?>
          <tr>
              <td><?php echo $row['emp_id'];?></td>
              <td><?php echo $row['emp_name'];?></td>
              <td><?php echo $row['emp_phone'];?></td>
              <td><?php echo $row['cname'];?></td>
              <td><?php echo $row['emp_salary'];?></td>
              <td><?php echo $row['date_of_joining'];?></td>
              <td class="text-center">
              <a href='edit.php?id=<?php echo $row['emp_id']; ?>' class="btn btn-primary">Edit</a>
                  
              </td>
              <td class="text-center">
              <a href='delete.php?id=<?php echo $row['emp_id']; ?>' class="btn btn-danger">Delete</a>
              </td>
              <td class="text-center">
              <a href='add.php?id=<?php echo $row['emp_id']; ?>' class="btn btn-dark">Add</a>
              </td>
          </tr>
          <?php
       }
       ?>
        </tbody>
    </table>
<?php
    }
?>
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