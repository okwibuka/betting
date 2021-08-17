<?php

$choice_1=$_POST['first'];
$choice_2=$_POST['second'];
$choice_3=$_POST['third'];
$choice_4=$_POST['forth'];
$choice_5=$_POST['fifth'];
$choice_6=$_POST['sixth'];
$choice_7=$_POST['amount'];

$conn= new MySQLi('localhost','root','','choosing');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }
$sql = "INSERT INTO choices (choice_one,choice_two,choice_three,choice_four,choice_five,choice_six,amount)
VALUES ('$choice_1','$choice_2','$choice_3','$choice_4','$choice_5','$choice_6','$choice_7')";
if (mysqli_query($conn, $sql)) {
	echo "Successfully submitted<br><br>";
  echo "<a href=home.php>Back to home</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>