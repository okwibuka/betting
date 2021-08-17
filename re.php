<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['name'];
$email=$_POST['email'];
$phone_number=$_POST['number'];
$password=$_POST['psw'];
$national_id=$_POST['id'];
$nationality=$_POST['nationality'];

$conn= new MySQLi('localhost','root','','registering');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO cregister (fname,lname,sex,email,number,password,id,nationality)
VALUES ('$fname','$lname','$sex','$email','$phone_number','$password','$national_id','$nationality')";

if (mysqli_query($conn, $sql)) {
	echo "Successfully Registerd<br><br>";
  echo "<a href=home.php>Back to login</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>