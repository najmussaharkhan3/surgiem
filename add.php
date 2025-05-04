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
<style>
    body{
        background-color: lightgray;
    }
</style>
</head>
<body>
 
  
  <nav class="navbar navbar-expand-lg bg-white " style="position:relative;">
    <div class="container-md">
    <a class="navbar-brand" href="#"><img src="images/logo removebg.png" alt="" class="ima"></a>
      <button class="navbar-toggler "  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
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
 <br><br><br><br>

 <div class="container mt-5">
    <h2 style="color: #004aad; font-weight:600; text-align: center;"><b>Add Student Records Here</b></h2>


    <form action="save.php" method="post">



    
        <br>
        <div class="form-group">
            <label for="name"><b>Name</b></label>
            <input type="text" class="form-control" id="name" name="emp_name" placeholder="Enter name">
        </div>
        <br>
        <div class="form-group">
            <label for="name"><b>Phone</b></label>
            <input type="text" class="form-control" id="phone"  name="emp_phone" placeholder="Enter Phone number">
        </div>
        <br>
        <div class="form-group">
            <label for="dropdown"><b>Select Position</b></label>
            <select class="form-control" id="dropdown" name="emp_position">
                <option> Select</option>
                
             <?php
              //creating connection
              $conn = mysqli_connect("localhost","root","","crud") or die("Connection failed");
              //sql Command line
              $sql = "SELECT * FROM emp";
    
              $result = mysqli_query($conn, $sql) or die("Failed");
 

              while($row = mysqli_fetch_assoc($result)){

             ?>
                <option><?php echo $row['c_id']?> . <?php echo $row['cname']?></option>
                <?php
                }
                ?>
            </select>
        </div><br>
        <div class="form-group">
            <label for="name"><b>Salary</b></label>
            <input type="text" class="form-control" id="salary"  name="emp_salary" placeholder="Enter Salary">
        </div>
        <br>
        <div class="form-group">
            <label for="name"><b>Joining Date</b></label>
            <input type="text" class="form-control" id="phone"  name="date_of_joining" placeholder="Enter Joining Date">
        </div>
      
        <br>
        <button type="submit" class="btn btn-primary">Add student Record</button>
    </form>
</div>









 <br><br><br><br><br><br>


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