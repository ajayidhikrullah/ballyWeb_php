<?php
require('db.php');
if(isset($_POST['submit'])){
	//lets get d values
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    //check for hasrhed password
   /*
    $sqlPwd = "SELECT * FROM signups WHERE pwd = '$pwd'";
    $SqlConn = mysqli_query($conn, $SqlConn);
    $row = mysqli_fetch_assoc($SqlConn);
    $UnHarshPwd = password_verify($pwd, $SqlConn);
*/
// yet to be resolved
	//lets query the values
	$compare_signup = "SELECT * FROM signups WHERE email = '$email'"/* AND pwd = '$pwd'"*/;
	//connect the query
    // $result = $conn->query($compare_signup);
    $result = mysqli_query($conn, $compare_signup);
    //check the query - and retuen hw many kind of row founded in d db
    $resultCheck = mysqli_num_rows($result);

    //lets first take users password and save it
    $row = mysqli_fetch_assoc($result); //fetches d values in db with d connection
    $UnharshPwd = password_verify($pwd, $row['pwd']); //this returns either 1 or 0; tre of false
    
    //lets check if d value of d user that is coming is less dan 1
    if ($resultCheck < 1 || $UnharshPwd != 1){
        //dehasrhing d password
        // $UnharshPwd = password_verify($pwd, $row['pwd']);
        echo '<p class="gmail">Email and password dont exist</p>';
    }
    /*if($UnharshPwd == false){
        echo '<p class="gmail">Email and password dont exist</p>';
    }*/ else /*($UnharshPwd == true)*/{
            // log d user in
		echo "<p class='gmail'> Welcome You are loggedin as $email </p>";
        }
	/*if(!$resultCheck = $result->fetch_assoc()){
        // $UnHarshPwd = password_verify($pwd, $resultCheck['pwd']);
        echo '<p class="gmail">Email and password dont exist</p>';
    //  else($resultCheck < 1){
    }
        else{
		echo "<p class='gmail'> Welcome You are loggedin as $email </p>";
        // header('Location: index.php');
        }*/
        
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
				<li><a href="welcome.php">Welcome HEre</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
	</div>


	<div class="signup-page">
		<h4>Kindly Login Here</h4>
		<form action="login.php" method="POST">
			<div>
				<label for="email">User Email</label>
				<input type="text" id="email" name="email" placeholder="Your email">
			</div>

			<div>
				<label for="password">Password</label>
				<input type="password" name="pwd" placeholder="Your password" id="password">
			</div>

			<input type="submit" value="Login" name="submit">
		</form>

        <!-- password reset -->
        <h4>Password Reset?<i><a href="forgot_pwd.php">Click Here</a></i></h4>


	</div>
		
</body>