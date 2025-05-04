<?php

$ename = $_POST['emp_name'];
$ephone = $_POST['emp_phone'];
$eposition = $_POST['emp_position'];
$esalary = $_POST['emp_salary'];
$joining = $_POST['date_of_joining'];

 //creating connection
 $conn = mysqli_connect("localhost","root","","crud") or die("Connection failed");
 //sql Command line
 $sql = "INSERT INTO employee(emp_name,emp_phone,emp_position,emp_salary,date_of_joining)
  VALUES('{$ename}','{$ephone}','{$eposition}','{$esalary}','{$joining}')";

 $result = mysqli_query($conn, $sql) or die("Failed");


header("Location: http://localhost/surgiem/home.php");

mysqli_close($conn);

?> 