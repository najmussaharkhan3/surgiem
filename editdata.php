<?php


$eid = $_POST['eid'];
$ename = $_POST['ename'];
$ephone = $_POST['ephone'];
$eposition = $_POST['eposition']; // Ensure the key matches the form field name
$esalary = $_POST['esalary'];
$joining = $_POST['ejoining'];

// Creating connection
$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

$sql = "UPDATE employee SET emp_name = '{$ename}', emp_phone = '{$ephone}', 
        emp_position = '{$eposition}', emp_salary = '{$esalary}', 
        date_of_joining = '{$joining}' 
        WHERE emp_id = {$eid}";


$result = mysqli_query($conn, $sql) or die("Failed");

header("Location: http://localhost/surgiem/home.php");

mysqli_close($conn);
?>
