<?php
require ('db.php');
if (isset($_POST['submit'])){
	// lets take d values
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$oPwd = mysqli_real_escape_string($conn, $_POST['oPwd']);
	$nPwd = mysqli_real_escape_string($conn, $_POST['nPwd']);

	$sql = "SELECT * FROM signups WHERE email='$email' AND pwd= '$oPwd'";
	$sqlConn = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($sqlConn) < 1){
		// echo "<p class='gmail'>Password successfully Updated</p>";
		echo '<p class="gmail">wrong email or oldpassword</p>';
	} else{
		$update = "UPDATE signups SET pwd = '$nPwd', re_pwd = '$nPwd' WHERE email = '$email'";
		$updSql = mysqli_query($conn, $update);
		echo header("Location: login.php?Success" . "<p class='gmail'>Password Successfully Updated</p>");
		echo "<p class='gmail'>Password Successfully Updated</p>";
		
	}


} else{
	// echo 'error' . mysqli_errno($conn);
};




?>























<!DOCTYPE html>
<html lang="en">
<head>
    <!-- important tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Title-->
    <title>[M N L]</title>

    <!--favicon-->
    <link rel="shortcut icon" href="img/favicon/">

    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Railway:100,200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <!--Font- awesome-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
    <!--Boostrap css-->
    <!-- <link rel="stylesheet" href="boostrap.css"> -->
    <!-- <script src="main.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
    <script src=""></script>
    
    
</head>

	
<body>
	<div class="container">
        <header class="header-container">
            <div class="header-logo"><a href="index.php"><img src="img/favicon/favicon.png" alt="Our Logo" style="width:50px; height:50px"><span class="logo-name">|[AJDHIK]|</span></a></div>
        </header>
        <hr />        
        <nav class="main-navv">
            <ul class="main-nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Sign Up</a></li>
				<!-- <li><a href="welcome.php">Reset Password</a></li> -->
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
	</div>


	<div class="signup-page">
		<h4>Reset Password</h4>
		<form action="forgot_pwd.php" method="POST">
			<div>
				<label for="email">User Email</label>
				<input type="text" id="email" name="email" placeholder="Your email">
			</div>

			<div>
				<label for="password">Old Password</label>
				<input type="password" name="oPwd" placeholder="Your Old password" id="password">
			</div>

			<div>
				<label for="new-password">New Password</label>
				<input type="password" name="nPwd" placeholder="Your New password" id="new-password">
			</div>
			
			<input type="submit" value="Change Password" name="submit">
		</form>



	</div>
		
</body>