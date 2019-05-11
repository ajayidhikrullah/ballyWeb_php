
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
    <link rel="shortcut icon" href="img/favicon/favicon.ico">

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
<?php
include 'comment.php';
include 'db.php';
$id = mysqli_real_escape_string($conn, $_POST['id']);
$u_name = mysqli_real_escape_string($conn, $_POST['u_name']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$msg = mysqli_real_escape_string($conn, $_POST['message']);

echo "<form method='POST' action='".editComments($conn)."'>
	<input type='hidden' name='id' value='".$id."'>
	<input type='hidden' name'u_name' value='".$u_name."'>
	<input type='hidden' name='date' value='".$date."'>
	<textarea name='message'>".$msg."</textarea><br>
	<button type='submit' name='editComm'>Edit</button>
</form>";
?>

</body>
</html>