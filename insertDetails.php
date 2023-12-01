<?php
	$fullName = $_POST["fullName"];
    $email = $_POST["email"];
	$phone = $_POST["phone"];
    $nationality = $_POST["nationality"];
    $gender = $_POST["gender"];
    $arrivaldate = $_POST["arrivaldate"];
    $departuredate = $_POST["departuredate"];
    $notravellers = $_POST["notravellers"];
    $destination = $_POST["destination"];
	$comment = $_POST["comment"];
	
	$connection = mysqli_connect("localhost","root","","venturevista");
	
	if(!$connection){
		die("Connection faild : ". mysqli_error($connection));
	}
	
	$insertQuery = "INSERT INTO appointment VALUES('$fullName','$email','$phone',' $nationality','$gender','$arrivaldate','$departuredate','$notravellers','$destination','$comment') ;";
	
	if(mysqli_query($connection,$insertQuery)){
		echo "
			<script>
				alert('Booking Successfully Recoded!!!');
			</script>
		";
		header("Location:Booking.php");
	}else{
		echo "Insert Error: ".mysqli_error($connection);
	}
	
	mysqli_close($connection);
?>

