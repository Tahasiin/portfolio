<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!isset($_SERVER['HTTP_REFERER'])) {
//redirect them to your desired location
   header('location:access-c.php');
    exit;
}

require '../database/connect.php';


if (isset($_POST["save"])) {


    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $sql = "UPDATE `contact` SET `address`='$address',`email`='$email',`phone`='$phone'";
    if ($conn->query($sql) === TRUE) {
        $message = "Changes saved successfully! Redirecting to home page..";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo"<script>document.location='../contact-me.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>portfolio.me</title>
        <link rel="icon" type="image/png" href="../img/Sherman_smiles_at_us.png"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="../css/style.min.css" rel="stylesheet">  
        <link href="../css/style.css" rel="stylesheet">  
        <link href="../css/message.css" rel="stylesheet">  
        <link href="../css/social-links.css" rel="stylesheet">  
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../vendor/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet"/>

        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/css/uikit.min.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <style>

            body
            {  
                <!--background-image: url('img/p25.jpg');-->
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            h4{
                font-size: 18px;
            }
            h3{
                font-size: 15px;
                font-family: 'Oswald', sans-serif !important;
            }
            h3 a{
                color:black
            }
            .a{
                color: black !important;
                font-family: 'oswald',sans-serif !important;
                padding:30px; 
            }
            label{
                font-weight: 500
            }
            a {text-decoration: underline !important;}
            a:hover {text-decoration: none !important;}
            input{width: 95% !important; border-color:black !important;}
            nav{
                background-color: white !important;
            }
            
            fieldset{
             
                border:1px solid black;
                font-family:'Oswald', sans-serif;
                width: 69%;
                min-height: 150px;
                border-radius: 30%;
                text-align: center;
                margin-bottom: 3%
             }
         
        </style>

    </head>
    <body>

        <div class="uk-offcanvas-content">
            <nav class="uk-navbar-container uk-light" uk-navbar="mode: click" uk-sticky="animation: uk-animation-slide-top; show-on-up: true">
                <div class="uk-navbar-left nav-overlay">
                    <img src="../img/tahasin handwriting logo-01.png"  style="width:150px;height: 80px;"/>

                </div>
                <div class="uk-navbar-right nav-overlay" >
                    <div class="uk-navbar-flip">
                        <ul class="uk-navbar-nav uk-visible@s">
                            <li class="uk-active"><a class="a" href="../contact-me.php"><u style="color:orange">Contact Me</u></a></li>
                        </ul>

                        <ul class="uk-navbar-nav uk-hidden@s">
                            <li><a class="uk-navbar-toggle" style="color:black !important" uk-navbar-toggle-icon uk-toggle="target: #mobile-navbar"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="mobile-navbar" uk-offcanvas="mode: slide; flip: false">
                <div class="uk-offcanvas-bar">
                    <!-- off-canvas close button-->
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <!-- off-canvas close button-->
                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                        <!-- logo or title-->
                        <li class="uk-text-center" style="padding: 0 0 25px 0;">
                            <img src="../img/tahasin handwriting logo-01.png"  style="width:150px;height: 80px;"/></li>

                        <li>
                            <hr>
                        </li>
                        <li class="uk-text-center">
                            <h3>Menu</h3>
                        </li>
                        <li><a href="index.php">About Me</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="effects.php">Effects & Animations</a></li>
                        <li><a href="resume.php">Blogs</a></li>
                        <li><a href="download.php">Downloads</a></li>
                        <li  class="uk-active"><a  href="contact-me.php"><u style="color:orange">Contact Me</u></a></li>
                        <li><a class="a" href="#"><span uk-icon="sign-in" style="color:#cccccc"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>




        <div class="col-sm-12" >
            <div class="col-sm-4 pro-pic" style="margin-top: 80px">
                <?php include '../parts/me.php'; ?>
            </div>
            <div class="col-sm-3 about-me">
                <h1 class="animated bounce" id="mytext"></h1><br/>
                <form method="POST" action="">
                    <?php
                    $sql = "SELECT *FROM `contact`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <h3><span uk-icon="home"></span><mark style="color:blue;">ADDRESS</mark><input class="form-control" name="address" value="<?php echo $row['address']; ?>"/></h3><br/>
                            <h3><span uk-icon="mail"></span><mark style="color:blue;">E-MAIL:</mark><input class="form-control" name="email" value="<?php echo $row['email']; ?>"/></h3><br/>
                            <h3><span uk-icon="receiver"></span><mark style="color:blue;">MOBILE NUMBER:</mark><input class="form-control" name="phone" value="<?php echo $row['phone']; ?>"/></h3>
                            <input style="margin-top: 3px;background-color: black;color:white;" type="submit" name="save" value="SAVE" class="btn btn-default"/>
                        <?php } ?>
                        <?php
                    } else {
                        echo "0 results";
                    }
                    ?>

                </form>
            </div>
           <div class="col-sm-5 about-me">
               <div class="social-container-wrap">
                 <div class="social-container">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="googleplus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="codepen"><i class="fa fa-codepen"></i></a>
                        <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="envelope"><i class="fa fa-envelope"></i></a>

                    </div>
                </div>
            </div>

        </div>


        <script>

            var myText = "CONTACT ME",
                    i = 0;
            window.onload = function () {
                'use strict';

                var typeWriter = setInterval(function () {
                    document.getElementById('mytext').textContent += myText[i];
                    i++;

                    if (i > myText.length - 1) {
                        clearInterval(typeWriter);
                    }

                }, 150);

            };

        </script> 

        <?php include '../parts/scripts.php'; ?>
        <?php $conn->close(); ?>
</html>
