Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<br>
Your employee no is: <?php echo $_POST["empno"]; ?>
<br>
Your first name is: <?php echo $_POST["firstname"]; ?>
<br>
Your lastname is: <?php echo $_POST["lastname"]; ?>
<br>
Your Date of Birth is: <?php echo $_POST["dob"]; ?>
<br>
Your Phone Number is: <?php echo $_POST["phno"]; ?>




<?php
$con=mysqli_connect("localhost","root","password", "php-form");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$empno = mysqli_real_escape_string($con, $_POST['empno']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$phno = mysqli_real_escape_string($con, $_POST['phno']);
$dept = mysqli_real_escape_string($con, $_POST['dept']);
$bloodgrp = mysqli_real_escape_string($con, $_POST['bloodgrp']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$addr = mysqli_real_escape_string($con, $_POST['addr']);


$sql="INSERT INTO empdetails (EmployeeNo, FirstName, LastName, Email, DateofBirth, PhoneNumber, Department, BloodGroup, State, City, Address)
VALUES ('$empno', '$firstname', '$lastname', '$email', '$dob', '$phno', '$dept', '$bloodgrp', '$state', '$city', '$addr')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>

