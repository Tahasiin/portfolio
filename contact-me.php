<?php
include './query/message.php';
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
        <link href="css/social-links.css" rel="stylesheet">  
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

            body
            {  
               /*background-image: url('img/p25.jpg');*/
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
            a {text-decoration: underline !important;color:orange}
            a:hover {text-decoration: none !important;}
            input{width: 67% !important; border-color:black !important;}
            nav{
                background-color: white !important;
            }
            textarea {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;

                width: 67% !important;
            }
            @import url(https://fonts.googleapis.com/css?family=Poppins:300,900);

            *,:before,:after{
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                box-sizing:border-box;
            }

            #contact-nav {
                color: orange;
                
            }
            #contact-sidenav {
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




        <div class="col-sm-12" style="margin-top: 2%">
            <div class="col-sm-4 pro-pic" style="margin-top: 80px">
                <?php include './parts/me.php'; ?>
            </div>
            <div class="col-sm-4 about-me" style="margin-top: 12%;text-align: center">
                <h1 class="animated bounce" id="mytext"></h1><br/>
                <?php
                require './database/connect.php';
                $sql = "SELECT * FROM `contact`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <h3><span uk-icon="home"></span><mark style="color:blue;"><?php echo $row['address']; ?></mark></h3><br/>
                        <h3><span uk-icon="mail"></span><mark style="color:blue;">E-MAIL:</mark><a href="mailto:<?php echo $row['email']; ?>" target="_top" title="click to mail me!"><?php echo $row['email']; ?></a></h3><br/>
                        <h3><span uk-icon="receiver"></span><mark style="color:blue;">MOBILE NUMBER:</mark><?php echo $row['phone']; ?></h3><br/>
                    <?php } ?>
                    <?php
                } else {
                    echo "0 results";
                }
                ?>
            </div>
            <div class="col-sm-4 about-me" style="margin-top: 6%;text-align: center">
                <div class="social-container-wrap">
                    <div class="social-container">
                        <a href="https://twitter.com/islam_tahasin" target="_blank" class="twitter" title="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/tahasin.tahasinislam" target="_blank" class="facebook" title="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="googleplus" title="googleplus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="pinterest" title="pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="https://codepen.io/Tahasin/" target="_blank" class="codepen" title="codepen"><i class="fa fa-codepen"></i></a>
                        <a href="#" class="dribbble" title="dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="access/access-me.php" onclick="basicPopup(this.href); return false" class="instagram" title="update-me"><i class="fa fa-camera"></i></a>
                        <a href="https://www.linkedin.com/in/tahasin-islam-39ba01152/" target="_blank"class="linkedin" title="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="mailto:tahasinislam39@gmail.com" class="envelope" title="email"><i class="fa fa-envelope"></i></a>

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

        <?php include './parts/scripts.php'; ?>
        <script>
            var url = "access/access-c.php";
            document.getElementById("url").href = url;
        </script>
        <script>
            var url2 = "access/access-c.php";
            document.getElementById("url2").href = url2;
        </script>
    </body>
</html>
