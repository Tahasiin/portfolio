<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location:access-e.php');
    exit;
}

require '../database/connect.php';

if (isset($_POST["save"])) {


    $effect1 = $_POST["effect1"];
    $effect2 = $_POST["effect2"];
    $effect3 = $_POST["effect3"];
    $titel1 = $_POST["titel1"];
    $titel2 = $_POST["titel2"];
    $titel3 = $_POST["titel3"];

    $sql = "UPDATE `effects` SET `effect1`='$effect1',`titel1`='$titel1',`effect2`='$effect2',`titel2`='$titel2',`effect3`='$effect3',`titel3`='$titel3' ";
    if ($conn->query($sql) === TRUE) {
        $message = "Changes saved successfully! Redirecting to home page..";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo"<script>document.location='../effects.php';</script>";
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
            h3{
               

            }
            input{
                width:30% !important;
                border-color: black !important;
            }
            textarea {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;

                width: 80%;
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
                            <li class="uk-active"><a class="a" href="../effects.php"><u style="color:orange">EFFECTS & ANIMATIONS</u></a></li>
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
                        <li class="uk-active"><a href="index.php"><u style="color:orange">About Me</u></a></li>
                        <li><a  href="projects.php">Projects</a></li>
                        <li><a  href="effects.php">Effects & Animations</a></li>
                        <li><a  href="blogs.php">Blogs</a></li>
                        <li><a  href="download.php">Downloads</a></li>
                        <li><a  href="contact-me.php">Contact Me</a></li>
                        <li><a class="a" href="access/access-e.php"><span uk-icon="sign-in" style="color:#cccccc"></span></a></li>
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
                    <div style="overflow: auto;height: 300px">
                    <form method="POST" action="">
                        <?php
                        $sql = "SELECT *FROM `effects`";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <h3>EFFECT-1</h3>
                                <input type="text" name="titel1" value="<?php echo $row['titel1']; ?> " class="form-control" />  
                                <textarea  name="effect1"><?php echo $row['effect1']; ?> </textarea>
                                <h3>EFFECT-2</h3>
                                <input type="text" name="titel2" value="<?php echo $row['titel2']; ?> " class="form-control"/>  
                                <textarea name="effect2"><?php echo $row['effect2']; ?> </textarea>
                                <h3>EFFECT-3</h3>
                                <input type="text" name="titel3" value="<?php echo $row['titel3']; ?> " class="form-control"/>  
                                <textarea name="effect3"><?php echo $row['effect3']; ?> </textarea>
                                <input style="margin-top: 3px;background-color: black;color:white;" type="submit" name="save" value="SAVE" class="btn btn-default"/>
                            <?php } ?>
                            <?php
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                    </form>
                    </div>
                </h4>
            </div>

        </div>
        <footer>
            <a class="footer" href="http://www.reliablecounter.com/" target="_blank"><img src="http://www.reliablecounter.com/count.php?page=tahasin.tk2&amp;digit=style/plain/6/&amp;reloads=1" alt="" title="" border="0"></a><br /><a href="http://" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;"></a>
        </footer>
        <script>

            var myText = "EFFECTS & ANIMATIONS",
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
