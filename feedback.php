<?php

$name = $_POST["name"];
$email = $_POST["email"];
$quality = $_POST["subject"];
$recommend = $_POST["recommend"];
$feedback = $_POST["feedback"];

$servername = "localhost";
$username = "id10582480_rockexams";
$password = "rockexams01";
$dbname = "	id10582480_books";

	//establishing the connection
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	// inserting
 the value into tables

		$sql = "INSERT INTO feedback('name') VALUES('$name');";
		if(mysqli_query($con,$sql))
		{
			
			echo "Feedback successfully submitted.";
		}else
		{
			echo "Something went Wrong...";
		}
	
	// closing the connection
	mysqli_close($con);

	// closing the window automatically
	echo '<script> window.setTimeout("window.close()", 2000); </script>';


?>