<?php include '../query/login.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tahasin's Door</title>
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
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/css/uikit.min.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <style>

            form input{
                text-align: center;


            }

            h4{
                font-size: 20px;
            }
            .a{
                color: black !important;
                font-family: 'oswald',sans-serif !important;
                padding:30px; 
            }
            img[src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]{
                visibility:hidden;
            }

            form{font-family: 'Oswald',sans-serif}

            a {text-decoration: underline !important;}
            a:hover {text-decoration: none !important;}
            nav{
                background-color: white !important;
            }
        </style>

    </head>
    <body>

        <div class="uk-offcanvas-content">
            <nav class="uk-navbar-container uk-light" uk-navbar="mode: click" uk-sticky="animation: uk-animation-slide-top; show-on-up: true">
                <div class="uk-navbar-left nav-overlay">
                    <img src="../img/tahasin handwriting logo-02.png"  style="width:150px;height: 80px;"/>

                </div>
                <div class="uk-navbar-right nav-overlay" >
                    <div class="uk-navbar-flip">
                        <ul class="uk-navbar-nav uk-visible@s">
                            <li><a class="a" href="../index.php">About Me</a></li>
                            <li><a class="a" href="../projects.php">Projects</a></li>
                            <li><a class="a" href="../effects.php">Effects & Animations</a></li>
                            <li><a class="a" href="resume.php">Blogs</a></li>
                            <li><a class="a" href="download.php">Downloads</a></li>
                            <li><a class="a" href="contact-me.php">Contact Me</a></li>
                            <li  class="uk-active"><a class="a" href="#"><span uk-icon="sign-in" style="color: orange"></span></a></li>
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
                        <li><a  href="../projects.php">Projects</a></li>
                        <li><a  href="../effects.php">Effects & Animations</a></li>
                        <li><a  href="../resume.php">Blogs</a></li>
                        <li><a  href="../download.php">Downloads</a></li>
                        <li><a  href="../contact-me.php">Contact Me</a></li>
                        <li class="uk-active"><a class="a" href="login.php"><span uk-icon="sign-in"  style="color:orange"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>  

        <div class="col-sm-12" style="margin-top: 5%">
            <div class="col-sm-6 pro-pic">
                <?php include '../parts/me.php'; ?>
            </div>


            <div class="col-sm-1"></div>
            <div class="col-sm-5 about-me">
                <h4 style="">Tahasin's Door!<i class="fa fa-home"></i> &nbsp ↓ &nbspWanna Knock?<i class="fa fa-bell"></i></h4>

                <form method="POST" action="">

                    <input type="hidden" name="size" value="1000000">
                    <label></label>
                    <input style="width: 270px; border-color:black;" type="text" name="name" placeholder="Who is it?" class="form-control" required="">
                    <label></label>
                    <input style="width: 270px;border-color:black" type="text" name="cause" class="form-control" placeholder="Why did you come?" required="">
                    <br/>
                    <input type="submit" value="KNOCK" name="submit" class="btn btn-default " style="width: 270px;border-color:blue;color:white;background-color: black">
                    <h4 style="float:left" class="text-center text-danger"><?php echo $message; ?></h4>
                </form>
            </div>

        </div>

        <?php include '../parts/scripts.php'; ?>

</html>
