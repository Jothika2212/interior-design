<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','con');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into details(firstName, lastName, number) values(?, ?, ?)");
		$stmt->bind_param("sss", $firstName, $lastName, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thank you for contacting....";
		$stmt->close();
		$conn->close();
	}
?>