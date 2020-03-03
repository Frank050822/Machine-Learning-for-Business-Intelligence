<?php

$full_name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$education = $_POST["edu"];
$dbname = "FrankSQL";

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully\n";

	$sql = "INSERT INTO Test (Name, Age, Gender,education) VALUES('".$full_name."', '".$age."', '".$gender."', '".$education."')";

	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


echo"Thank you".$full_name."for submitting your data";

$conn->close();
?>
