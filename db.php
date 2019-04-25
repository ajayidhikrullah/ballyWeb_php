<?php
	// $servername = 'localhost';
	// $username = 'root';
	// $password = '';

	// //create connection
	// $conn = mysqli_connect($servername, $username, $password);

	// //check connection
	// if (!$conn) {
	// 	# code...
	// 	die('Connection Failed: ' . mysqli_connect_error());
	// }
	// echo 'Connected Successfully';

	// //use mysqli to create table
	
//Traversy way of procedural connection MYSQLI
//create connection
//Create a Connection to a MySQL Database
//Before you can access data in a database, you must create a connection to the database. In PHP, this is done with the mysql_connect() function.

$conn = mysqli_connect('localhost', 'root', '', 'bally_php');

//check connection
if (mysqli_connect_errno()) {
	# code...
	echo ' Failed to Connect to MySQL ', mysqli_connect_errno();
}else{
	// echo '<p class="gmail">server Running..............</p>';
};

//=============================

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	
</body>
</html>