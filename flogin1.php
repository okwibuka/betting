<?php


$email=$_POST['email'];
$password=$_POST['psw'];
$conn= new MySQLi('localhost','root','','registering');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

else{
	$stmt=$conn->prepare("select * from cregister where email=? AND Password=? ");
	$stmt->bind_param("ss",$email,$password);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
	
		echo '<script>
		window.location="amount.php";
		</script>';
	
}
	else{
		echo '<script>
         alert("Wrong email_number or Password");
		</script>';
		
	}

}

?>
	