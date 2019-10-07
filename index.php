<?php
require './database/connect.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <title>portfolio.me</title>
        <link rel="icon" type="image/png" href="img/Sherman_smiles_at_us.png"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="css/style.min.css" rel="stylesheet">  
        <link href="css/style.css" rel="stylesheet">  
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
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
            #about-nav {
                color: orange;

            }
            #about-sidenav {
                color: orange;
                padding-left: 5px;
                border-left: 2px solid #545454;
            }
        </style>

    </head>
    <body>


        <div class="uk-offcanvas-content">
            <?php include './parts/nav.php'; ?>
        </div>




        <div class="col-sm-12" style="margin-top: 5%">

            <div class="col-sm-6 pro-pic">
                <?php include './parts/me.php'; ?>
            </div>


            <div class="col-sm-5 about-me" style="text-align: center">
                <h1 class="animated bounce" id="mytext"></h1><br/>
                <h4  style="margin-right:" class="delayedShow"> 
                    <?php
                    $sql = "SELECT *FROM `about`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <?php echo $row['about']; ?> 
                        <?php } ?>
                        <?php
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>


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
        <?php include './parts/scripts.php'; ?>

        <script>
            var url = "access/access-a.php";
            document.getElementById("url").href = url;
        </script>
        <script>
            var url2 = "access/access-a.php";
            document.getElementById("url2").href = url2;
        </script>

    </body>
</html>
