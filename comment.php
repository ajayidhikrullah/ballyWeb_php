<?php
// <!-- //we want to insert data to db -->
function setComments($conn){
	if(isset($_POST['submitComment']))/*is this is not set, dont do it*/ {	
		$u_name = $_POST['u_name'];
		$date = $_POST['date'];
		$msg = $_POST['message'];

		$sql = "INSERT INTO comments(u_name, date, message) VALUES('$u_name', '$date', '$msg')";
		// ceate a connection and query d above
		$result = $conn -> query($sql);
	}

}


?>