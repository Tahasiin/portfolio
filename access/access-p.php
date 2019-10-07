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
       <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
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
                font-family: 'oswald',sans-serif !important;
            }
            #access-nav{
                color: orange;

            }
            .access-sidenav {
                color: orange !important;
                padding-left: 5px;
                border-left: 2px solid #545454;
            }
        </style>

    </head>
    <body>

        <div class="uk-offcanvas-content" style="font-family: 'oswald',sans-serif !important; ">
            <?php include '../parts/nav2.php'; ?>
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
