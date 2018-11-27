<?php

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Header: Origin, Content-Type"); 

	$servername="sql12.freemysqlhosting.net";
	$username="sql12267260";
	$password="W425IL8gJd";
	$dbName="sql12267260";

	$conn=mysqli_connect($servername, $username, $password, $dbName);

	if($conn->connect_error)
	{
		die("connection failed" . $conn->connect_error);
	}
	$res_json = file_get_contents("php://input");
	$_POST= json_decode($res_json, true);

	$name = ($_POST['username']);
	$country = $_POST["password"];


	$sql = 'INSERT INTO usuario VALUES(" ","' .$name. '","' .$country. '")';

	echo $name;
	echo $country;

	if($conn->query($sql)=== TRUE)
	{
		$outp="Inserted" .$name. "and" .$country;
	}
	else
	{
		echo json_encode("Error".$conn->error);	
	}
	
	$conn->close();

?>
