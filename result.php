<link rel="stylesheet" type="text/css" href="css/styles.css">
<div id="ht-section">
<form method="post">
<b>Employee ID :</b> <input class="hbox" type="text" name="empno">
<input class="submit" type="submit" name="treasure" value="Submit"></input>
</form>
<span>Ex: 1022</span>
</div>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$empdata = $_POST["empno"];
$sql = "SELECT * FROM empdetails where EmployeeNo='$empdata' ";

mysql_select_db('php-form');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
    die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{



echo '<div id="id-card">
<div class="id-details"><h3>YOUR DETAILS</h3></div>
<span class="det">Name:</span> <span class="code">'.$row['FirstName'].'.'.$row['LastName'].'<br></span>
<span class="det">Employee ID:</span> <span class="code">'.$row['EmployeeNo'].'<br></span>
<span class="det">Email:</span> <span class="code">'.$row['Email'].'<br></span>
<span class="det">Date of Birth:</span> <span class="code">'.$row['DateofBirth'].'<br></span>
<span class="det">Phone No.:</span> <span class="code">'.$row['PhoneNumber'].'<br></span>
<span class="det">Dept:</span> <span class="code">'.$row['Department'].'<br></span>
<span class="det">State:</span> <span class="code">'.$row['BloodGroup'].'<br></span>
<span class="det">State:</span> <span class="code">'.$row['State'].'<br></span>
<span class="det">City:</span> <span class="code">'.$row['City'].'<br></span>
</div>';
} 

echo '<div id="note">Fetched data successfully\n </div>';
mysql_close($conn);
$hallticket="";
?>

</div>
</body>
</html>
