<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	
<?php
require('db.php');
// include('db.php');
// include('contact.php');
// check for submit
    if (isset($_POST['name'])) {
		# code...
// include('db.php');
		

        // echo $_POST['user_mail'];exit;
				//get form data - email
				//Accept user email from Input field and store in vaiable
				$email = mysqli_real_escape_string($conn, $_POST['user_mail']);
				
				//USE SQL QUERY TO FETCH ALL EMAILS THAT IS EQUAL TO USERINPUT
				$check_db = "SELECT * FROM emails";

/*
				 $sql = "SELECT * FROM emails WHERE user_email='$email'"; //thi fetch the uerinput that is submitted
				 $sql = "SELECT * FROM emails"; //thi fetch the uerinput that is submitted
*/
				//  echo $sql;

				// insert to database
				/*
				$query = "INSERT INTO emails(user_email) VALUES('$email')";

        if(mysqli_query($conn, $query)){
				include('welcome.php'); //this takes me to welcome page and shw d success messg
				// header('Location: welcome.php?');
				exit();


				}*/
		// else{
            echo 'Error: ' . $query . mysqli_error($conn);
		}
		 







		//CHECKING FOR DUPLICATE ENTRY OF EMAIL

	// check for d connection and go into d database to query it
	// $email = mysqli_real_escape_string($conn, $_POST['user_mail']);
/*
	$sql = "SELECT * FROM emails WHERE user_email = '$email'";
	// check query to un in db
	// echo $sql;
	$result = mysqli_query($conn, $sql);
	// check for anykind of result in db
	$resCheck = mysqli_num_rows($result);
/*
	// echo $resCheck;

	//if there is a result, it returns a row; and den if there is a row more dan 0, throw error below
	/*
	if($resCheck > 0){
		header('Location: contact.php?contact=usertaken');
		include('welcome.php');
		exit();
	} else{
		include('Welcome.php');
		header('Location: ../contact.php?contact=userCreated');
		exit();
	}*/
		


		








	// };
	









?>



</body>
</html>
