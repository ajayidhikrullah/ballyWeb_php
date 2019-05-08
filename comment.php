<?php
// <!-- //we want to insert data to db --> if u want to insert to databas, use SETS
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

//how to show commentto the users from database
// /get something ffor==rom database, use GETS

function getComments($conn){
	// sql to query in d database
	$sql = "SELECT * FROM comments";
	$result = $conn -> query($sql);
	//fetch out the datas in d database
	// $row = $result->fetch_assoc(); --> this will onlyt fetch one result frin d column
	//lets loop through
	while($row = $result->fetch_assoc()){
		echo "<div class='show-comment'>";
			echo $row['u_name'];
			$date = $row['date'];
			echo "<p class='ShowDate'> $date </p>";
			//lets show d line breaks to some long text
			echo nl2br($row['message']) . "<br><br>"; 
	
		echo "</div>" . '<br>';

	}

	//echo out one data from the column
	// echo $row['message'];

}


?>