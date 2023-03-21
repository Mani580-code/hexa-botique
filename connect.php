<?php
	$=$_POST['FirstName'];
	$=$_POST['LastName'];
	$=$_POST['Email'];
	$=$_POST['PhoneNumber'];
	$=$_POST['CompanyName'];
	$=$_POST['AddresLine1'];
	$=$_POST['AddressLine2'];
	$=$_POST['Town'];
	$=$_POST['State'];
	
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $ conn->prepare("insert into billing (FirstName, LastName, Email, PhoneNumber, CompanyName, AddressLine1, AddressLine2, Town, State)values(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssi",$FirstName, $LastName, $Email, $PhoneNumber, $CompanyName, $AddressLine1, $AddressLine2, $Town, $State);
		$stmt->execute();
		echo"successful...";
		$stmt->close();
		$conn->close();
		
		
	}
?>
