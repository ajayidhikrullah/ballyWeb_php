<?php
session_start();
require('db.php');
//get d submit to click
if(isset($_POST['submit'])){
    // get value from user
    $email = mysqli_real_escape_string($conn, $_POST['user_mail']);
    //query the above by selecting d user input to later check for duplicate entry
    $sql_duplicate = "SELECT * FROM newsletters WHERE user_email='$email'";
    //run d connection with d query or performs query/action against database
    $conn_sql = mysqli_query($conn, $sql_duplicate);

    //use if...else to confirm if none is in db
    if(mysqli_num_rows($conn_sql) > 0){
    echo '<p class="gmail"> User already exists</p>';
    // header('Location: index.php?message=Email Already Exist');
    }
    // then if not exist or not greater dan 0 above; then INSERT
    else{                        //db_table; db_column; ===== 'this is d evans '
        $ins_email = "INSERT INTO newsletters (user_email) VALUES ('$email')";
        $conn_sql = mysqli_query($conn, $ins_email);
        echo '<p class="gmail">Thank You, you have successfully subscribed to our NewsLetter and it has been recorded.</p>';
        // exit;

    }
} else{
    // echo 'Connection Error: '. mysqli_connect_error();

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
        <?php
            
            // echo "<p class='gmail'> yh </p> ";
            $show = $_SESSION['f_name'];
            echo "<p class='gmail'> Welcome  $show </p>";



            // if (isset($_SESSION['id'])){
            // // echo "<p class='gmail'> Welcome You are loggedin as $id </p>";
            // echo $_SESSION['$id'];
            // }      
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
                        <div class="searchbar">
                            <button type="submit"><i class="fa fa-search fa-5x"></i></button>
                        </div>
                    </ul>
                </nav>
            </header>
            
            
    <!-- <div class="container">
        <header class="header-container">
            <div class="header-logo"><a href="index.html"><img src="img/favicon/favicon.png" alt="Our Logo" style="width:50px; height:50px"><span class="logo-name">|[AJDHIK]|</span></a></div>
        </header>
        <hr />        
        <nav class="main-navv">
            <ul class="main-nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="signup.html">Sign Up</a></li>
            </ul>
        </nav> -->

        <section class="sect">
            <main class="banner-sect">
                <h3 class="banner-head">WELCOME TO <span class="banner-head-name"> HAMZARTS </span>FASHION HOME</h3>
                <p class="banner-address">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </main>
        </section>

        <section>
            <div class="images-container">
                <div class="container-text"><h1>CHECK OUT</h1></div>
                <article class="img-title1"><h4>Women Outfit</h4>
                    <div class="img-container1">
                        <img src="./img/balqeesimg/bannerimg.png" alt="Men">
                    </div>
                </article>            
                <article class="img-title1"><h4>CEO</h4>
                        <div class="img-container2">
                            <img src="./img/balqeesimg/bally.jpg" alt="bally" href="balqees.html">
                        </div>
                </article>
                <div style="clear:both"></div>
            </div>
            
            <div class="colum-content-container">
                <h4 class="offer">Offer</h4>
                <article>
                    <div class="article-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sunt, et nisi. At vero sequi natus perfe
                        rendis asperiores eaque, illo rem labore,
                        veniam doloribus voluptas animi, inventore adipisci neque ipsum in!...<a href="#">read more</a>
                    </div>
                </article>
                
                <aside>
                    <div class="article-content-aside">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sunt, et nisi. At vero sequi natus perfe
                                    rendis asperiores eaque, illo rem labore,
                                    veniam doloribus voluptas animi, inventore adipisci neque ipsum in!</p>
                    </div>
                </aside>
                <div style="clear:both"></div>
            </div>        
        </section>
    </div>
    

        <footer class="main-footer">
            <div class="footer1">
                <h5>Services</h5>
                <p>Fashion Bundles</p>
                <p>clothing neating</p>
                <p>On delivery</p>           
            </div>
            <!-- <div style="clear:both"></div> -->
            <div class="fosertercontent">
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
        </div>
            <!-- <div style="clear:both"></div> -->

            <div class="fooform">
                <h4>NEWSLETTER Sign-Up</h4>
                <p>SignUp to stay Updated</p>
                <form action="" method="post">

<!-- exclude this fr now 
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="user_name" required placeholder="Enter your Full Name">
                    </div>
-->
<?php
'<p class="gmail">User Mail Already Exist</p>';

?>

<div> 
                        <label for="mail">E-mail:</label>
                        <input type="email" id="mail" name="user_mail" required placeholder="Enter your Email address">
                    </div>

                    <div></div>

                    <!-- JAVASCRIPT ADDED -->

                    <button type="submit" name="submit" class="btn-signup">Click  to Sign-Up</button>
                </form>            
            </div>
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