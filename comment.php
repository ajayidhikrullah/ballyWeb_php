<?php
// <!-- //we want to insert data to db --> if u want to insert to databas, use SETS
function setComments($conn){
	if(isset($_POST['submitComment']))/*if this is not set, dont do it*/ {	
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
	//echo out one data from the column
	// echo $row['message'];

	//lets loop through
	while($row = $result->fetch_assoc()){
		echo "<div class='show-comment'>";
			echo $row['u_name'];
			$date = $row['date'];
			echo "<p class='ShowDate'>$date</p>";
			//lets show d line breaks to some long text
			echo nl2br($row['message']) . "<br><br>"; 
	
		echo "
		<!--Delete Below-->

		<form method='POST' action='".deleteComments($conn)."' class='deleteBtn'>
			<input type= 'hidden' name='id' value='".$row['id']."'>

			<button name='commentDelete' type='submit'>Delete Comment</button>
		</form>


		<!-- Edit Below>-->
		<form method='POST' action='editcomment.php' class='editBtn'>
			<input type= 'hidden' name='id' value='".$row['id']."'>
			<input type= 'hidden' name='u_name' value='".$row['u_name']."'>
			<input type= 'hidden' name='date' value='".$row['date']."'>
			<input type= 'hidden' name='message' value='".$row['message']."'>
			<button>Edit</button>		
			
			</form>
		</div>" . '<br>';

	}


}

function editComments($conn){
	if (isset($_POST['editComm'])){
		$id = $_POST['id'];
		$u_name = mysqli_real_escape_string($cnn, $_POST['u_name']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);
		$msg = mysqli_real_escape_string($conn, $_POST['message']);

		$sql = "UPDATE comments SET message='$msg' WHERE id='$id'";
		$result = $conn -> query($sql);
		header("Location: blog.php");
	}
}

function deleteComments($conn){
	if (isset($_POST['commentDelete'])){
		$id = $_POST['id'];
		
		$sql = "DELETE FROM comments WHERE id='$id'";
		$result = $conn -> query($sql);
		header("Location: blog.php");
	}
};
?>