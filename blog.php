<?php
session_start();
include 'db.php';

include 'comment.php';
date_default_timezone_set('Nigeria');





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
        <?php       
            // echo "<p class='gmail'> yh </p> ";
            $show = $_SESSION['f_name'];
            // echo "<p class='gmail'> Welcome  $show </p>";
            if (isset(/*$_SESSION['f_name']*/ $show )){
            echo "<p class='success'>Hi, $show </p>";
            // echo $_SESSION['$f_name'];
            }else{
                echo "<p class='failed'>you are not LoggedIN</p>";
            }
            ?>
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
                        <li><a href="blog.php">Blog</a></li>
                        
                    </ul>
                    <form action="logout.php">
                            <button id="logout">Log Out</button>
                        </form>

                        <div class="searchbar">
                            <input type="text" name="search">
                            <button id="logout" type="submit"><i class="fa fa-search fa-5x"></i></button>
                        </div>
                </nav>
            </header>
<div class="full_section">
           
    <div class="images-container">       
            <iframe src="" frameborder="0" allowfullscreen></iframe>
        <br>
<?php
    echo
        " <form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='u_name' value='anonymmous'>
            <input type='hidden' class='ShowDate' name='date' value='".date('Y-m-d H:i:s')."'> <br> <br>
            <textarea name='message' id='' cols='30' rows='10'></textarea> <br>
            <button type='submit' class='btn-signup' name='submitComment'>Comment</button>
        </form>";
        getComments($conn);
    ?>
    </div>


















</div>            






<br>









<footer class="main-footer">
        <div class="footer1">
            <h5>Services</h5>
            <p>Fashion Bundles</p>
            <p>clothing neating</p>
            <p>On delivery</p>           
        </div>
        <!-- <div style="clear:both"></div> -->
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
        
        <!-- <div style="clear:both"></div> -->

        
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