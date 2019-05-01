<?php
    // require('config.php');
    require('db.php');


    //check for the submit button if cliekced and do this ad that
    if(isset($_POST['submit'])){
    //include d link to ur dattabase below
    // include('db.php');
    //
    // get the data from each textbox and secure it
    $fname = mysqli_real_escape_string($conn, $_POST['fname']); //value for input firstname
    $lname = mysqli_real_escape_string($conn, $_POST['lname']); //value for input last name
    $email = mysqli_real_escape_string($conn, $_POST['email']); //vaue for email
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);//value for password
    $re_pwd = mysqli_real_escape_string($conn, $_POST['re_pwd']); //value for re-entering password

    //query the db to check for duplicate email
    $sql = "SELECT * FROM signups WHERE email = '$email'";
    //check for d pwd and re_enter pwd===================================//
    // $sql_pwd = "SELECT * FROM "

    // ================================================//
    //connect d above with d db connection
    // fetch and only checkfor emails
    $check_email = mysqli_query($conn, $sql);
    //go to d form to confirm is true in d php code down
    // print_r($check_email); <== or check back here
    if(mysqli_num_rows($check_email) > 0){
        echo '<p class="gmail">User already exists</p>';
        // echo('welcome.php);
        //============================================
        //lets check for confirmation of pssword in d same field;
    }   elseif($pwd != $re_pwd){
            echo '<p class="gmail">Passwords Doesnt Match</p>';
        }
        //=======================
        /*
        if($pwd != $re_pwd){
            echo '<p class="gmail">Please, enter correct password in the same field</p>';
        } else{
            // exit();
        }*/
        //===================
        else{
            //========harsh the password
            // actually, One password should harshed
            $hashPwd1 = password_hash($pwd, PASSWORD_DEFAULT);
            $hashPwd2 = password_hash($re_pwd, PASSWORD_DEFAULT);

            //==============



        //lets then collect the user details if he satisfies the above
        $accept_user = "INSERT INTO signups (/*this is the database field name*/f_name, l_name, email, pwd, re_pwd) VALUES(/*this is d value from d input field*/'$fname', '$lname', '$email','$hashPwd1', '$hashPwd2')";
        //run d accept user query code in d dbase
        //connect d above with the db connection
        $user_connect = $conn/*POINT TO query*/->query($accept_user);
                    //OR
        // $user_connect = mysqli_query($conn, $accept_user);
        //then send us to a so so so and pade
        // print_r($user_connect);
        // header('Location: signup.php?message=Successfully created');
        echo '<p class="gmail">Hello, Welcome ' . $fname . ' ' .$lname . '!' . '<br>You have successfully registered </p>';
    };
    
} else{
    //show d error
    //this is here because of dtabase not connecting
    header('Loction: signup.php?internal error');
}


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
<header>
                <div class="main-header">
                    LOGO
                </div>
        <!-- <div class="clear"></div> -->
                <nav class="main-nav">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./contact.php">Contact</a></li>
    <!--JUST ADDED NEW HEADER--><li><a href="#">About</a></li>
                        <li><a href="./signup.php">Sign Up</a></li>
                        <div class="searchbar">
                            <button type="submit"><i class="fa fa-search fa-5x"></i></button>
                        </div>
                    </ul>
                </nav>
            </header>



<!-- //OLD HEADER WITHOLD NAV
     <div class="container"> 
        <header class="header-container">
            <div class="header-logo"><a href="index.html"><img src="img/favicon/favicon.png" alt="Our Logo" style="width:50px; height:50px"><span class="logo-name">|[AJDHIK]|</span></a></div>
        </header>
        <hr />        
        <nav class="main-navv">
            <ul class="main-nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav> -->
<br/>

        <div class="signup-page">
        <?php
        //to know if the information is passing by
        // echo '<p>' . $fname . '</p>' . '<br>';
        // print_r($check_email) ;
        // print_r($accept_user);
        ?>
            <form action="signup.php" method="POST">
                <div id="form-content">
                    <div class="text-input">
                        <label for="fname">First Name:</label>
                            <input type="text" class="inp_fid" id="fname" name="fname" required placeholder="type in your firstname">
                    </div>
                    <div class="text-input">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="inp_fid" name="lname" id="lname" required placeholder="your surname">
                    </div>
                    <div class="text-input">
                        <label for="email">Email:</label>
                        <input type="email" class="inp_fid" name="email" id="email" required placeholder="your mail" >
                    </div>

                    <div class="text-input">
                        <label for="pwd">Password</label>
                        <input type="password" class="inp_fid" name="pwd"  id="pwd" required placeholder="your password">
                    </div>

                    <div class="text-input">
                        <label for="re_pwd">Re-enter Password</label>
                        <input type="password" class="inp_fid" name="re_pwd"  id="re_pwd" required placeholder="Re-enter password">
                    </div>
                </div>
                <input type="submit" value="Sign Up" class="inp_fid" name="submit">
                <!-- <button type="submit" class="btn-signup">Sign Up</button> -->
            </form>
        </div>

        <!-- <footer class="main-footer">
            <div class="footer1">
                <h5>Services</h5>
                <p>Fashion Bundles</p>
                <p>clothing neating</p>
                <p>On delivery</p>           
            </div> -->
            <!-- <div style="clear:both"></div> -->
            <!-- <div class="fosertercontent">
            <div class="foosup">
                <h5>Support</h5>
                <p>Registration Tips</p>
                <p>BallyApp</p>
                <p>BallyGoogle</p>
            </div>

            <div class="foolife">
                <h5>LifeStyle</h5>
                <p>Islamic Attire</p>
                <p>Islamic Modelling</p>
                <p>Islamic Events</p>
            </div>
        </div> -->
            <!-- <div style="clear:both"></div> -->

            <!-- <div class="fooform">
                <h4>NEWSLETTER Sign-Up</h4>
                <p>SignUp to stay Updated</p>
                <form action="#" method="post">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="user_name" required placeholder="Enter your Full Name">
                    </div>
                    <div>
                        <label for="mail">E-mail:</label>
                        <input type="email" id="mail" name="user_mail" required placeholder="Enter your Email address">
                    </div>

                    <div></div>

                    JAVASCRIPT ADDED 

                    <button type="submit" class="btn-signup">Click here to Sign-Up</button>
                </form>            
            </div> -->
            <div class="sm">
                <div class="fa fa-facebook fa-5x"></div>
                <div class="fa fa-twitter fa-5x"></div>
                <div class="fa fa-instagram fa-5x"></div>
                <div class="fa fa-linkedin fa-5x"></div>

            </div>
        


            <div style="clear:both"></div>
            
            <div class="fooadd">
                <address>                    
                    <i class="fa fa-phone fa-2x">Tel: <a href="tel: +234-081-8289-6889-">+234-081-8289-6889</a></i><br/>
                    <i class="fa fa-envelope-square fa-2x"> E-Mail: <a href="mailto:ajayidhikrullah@gmail.com">ajayidhikrullah@gmail.com</a></i><br/>
                    <hr>
                    <i class="fa fa-map-marker fa-5x"> <span class="p">2, Obokun Close, Allen Avenue, Ikeja Lagos state <br/></span></i>
                    <p class="p">&COPY; Copyright ajayidhikrullah2018</p>
                </address>
            </div>
        </footer>
        <script src="js/script.js"></script>
  
</body>
</html>