<link rel="stylesheet" type="text/css" href="css/styles.css">

<div id="id-card">
<div class="id-details"><h3>YOUR DETAILS</h3></div>
<span class="det">Name:</span> <span class="code"><?php echo $_POST["firstname"]." ".$_POST["lastname"]; ?><br></span>
<span class="det">Employee ID:</span> <span class="code"><?php echo $_POST["empno"]; ?><br></span>
<span class="det">Email:</span> <span class="code"><?php echo $_POST["email"]; ?><br></span>
<span class="det">Date of Birth:</span> <span class="code"><?php echo $_POST["dob"]; ?><br></span>
<span class="det">Phone No.:</span> <span class="code"><?php echo $_POST["phno"]; ?><br></span>
<span class="det">Dept:</span> <span class="code"><?php echo $_POST["dept"]; ?><br></span>
<span class="det">Blood Group:</span> <span class="code"><?php echo $_POST["bloodgrp"]; ?><br></span>
<span class="det">State:</span> <span class="code"><?php echo $_POST["state"]; ?><br></span>
<span class="det">City:</span> <span class="code"><?php echo $_POST["city"]; ?><br></span>
</div>


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

