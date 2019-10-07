<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
require '../database/connect.php';

if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location:access-a.php');
    exit;
}
?>
<?php
if (isset($_POST["save"])) {


    $about = $_POST["about"];

    $sql = "UPDATE `about` SET `about`='$about' ";
    if ($conn->query($sql) === TRUE) {
        $message = "Changes saved successfully! Redirecting to home page..";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo"<script>document.location='logout.php';</script>";
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
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.css" type="text/css"/>

        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/css/uikit.min.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <style>
            h4{
                font-size: 18px;
            }
            .a{
                color: black !important;
                font-family: 'oswald',sans-serif !important;
                padding:30px; 
            }
            a {text-decoration: underline !important;}
            a:hover {text-decoration: none !important;}
            nav{
                background-color: white !important;
            }
            textarea {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;

                width: 100%;
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
                            <li class="uk-active"><a class="a" href="../index.php"><u style="color:orange">About Me</u></a></li>
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
                            <img src="img/tahasin handwriting logo-01.png"  style="width:150px;height: 80px;"/></li>

                        <li>
                            <hr>
                        </li>
                        <li class="uk-text-center">
                            <h3>Menu</h3>
                        </li>
                        <li class="uk-active"><a href="index.php"><u style="color:orange">About Me</u></a></li>
                        <li><a  href="projects.php">Projects</a></li>
                        <li><a  href="effects.php">Effects & Animations</a></li>
                        <li><a  href="blogs.php">Blogs</a></li>
                        <li><a  href="download.php">Downloads</a></li>
                        <li><a  href="contact-me.php">Contact Me</a></li>
                        <li><a class="a" href="access/access-a.php"><span uk-icon="sign-in" style="color:#cccccc"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>





        <div class="col-sm-12" style="">

            <div class="col-sm-6 pro-pic">
                <?php include '../parts/me.php'; ?>
            </div>


            <div class="col-sm-6 about-me">
                <h1 class="animated bounce" id="mytext"></h1><br/>
                <h4  style="margin-right:60px" class="delayedShow"> 
                    <form method="POST" action="">
                        <textarea name="about" style="">
                
                            <?php
                            $sql = "SELECT *FROM `about`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                ?>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <?php echo $row['about']; ?> 
                                <?php } ?>
                                <?php
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </textarea>
                        <input style="margin-top: 3px;background-color: black;color:white;" type="submit" name="save" value="SAVE" class="btn btn-default"/>
                    </form>
                </h4>
            </div>

        </div>
        <footer>
            <a class="footer" href="http://www.reliablecounter.com/" target="_blank"><img src="http://www.reliablecounter.com/count.php?page=tahasin.tk2&amp;digit=style/plain/6/&amp;reloads=1" alt="" title="" border="0"></a><br /><a href="http://" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;"></a>
        </footer>
        <script>

            var myText = "ABOUT ME",
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


</html>
