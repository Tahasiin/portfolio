<?php
require './database/connect.php';
?>
<?php require 'database/connect.php'; ?>
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
                font-family: 'oswald',sans-serif;
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
            #effects-nav {
                color: orange;
                
            }
            #effects-sidenav {
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



        <div class="col-sm-12 effects" style="margin-top:6%">
            <div class="col-sm-4 pro-pic">
                <?php include './parts/me.php'; ?>
            </div>

            <div class="col-sm-8" style="text-align: center">
                <?php
                $sql = "SELECT *FROM `effects`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <h1 class="animated bounce" id="mytext" style="text-align: center"></h1><br/>
                        <div class="col-sm-4">
                            <h4><?php echo $row['titel1']; ?> </h4>
                            <?php echo $row['effect1']; ?> 
                        </div>
                        <div class="col-sm-4">
                            <h4><?php echo $row['titel2']; ?> </h4>
                            <?php echo $row['effect2']; ?> 
                        </div>
                        <div class="col-sm-4">
                            <h4><?php echo $row['titel3']; ?> </h4>
                            <?php echo $row['effect3']; ?> 
                        </div>

                        <h2 style="font-family: 'Anton', sans-serif;text-align: center">To see more effects visit my <a href="https://codepen.io/Tahasin/" target="_blank">code-pen</a></h2>
                    <?php } ?>
                    <?php
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
        </div>
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

        <?php include './parts/scripts.php'; ?>
        <script>
            var url = "access/access-e.php";
            document.getElementById("url").href = url;
        </script>
        <script>
            var url2 = "access/access-e.php";
            document.getElementById("url2").href = url2;
        </script>
        
    </body>
</html>
