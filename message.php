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
        <link href="css/message.css" rel="stylesheet">  
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
            fieldset{

                border:1px solid black;
                font-family:'Oswald', sans-serif;
                width: 69%;
                min-height: 105px;
                border-radius: 50%;
                text-align: center;
                margin-bottom: 3%
            }
            #message-nav {
                color: orange;

            }
            #message-sidenav {
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




        <div class="col-sm-12" >
            <div class="col-sm-4 pro-pic" style="margin-top: 80px">
                <?php include './parts/me.php'; ?>
            </div>
            <div class="col-sm-4 about-me">
                <h1 style="letter-spacing: 10px"class="animated bounce" id="mytext"></h1>

                <form method="POST" action="" style="font-family: 'oswald', sans-serif;">
                    <input type="hidden" name="ip" value="<?php echo $ipaddress; ?>"  />
                    <label>Your Name:</label>
                    <input  type="text" name="name" placeholder="What should I call you?" class="form-control" required=""/>

                    <label>Your E-mail:</label>
                    <input type="email" name="email" class="form-control" placeholder="Your e-mail'll be private!" required=""/>

                    <label>Your Website:</label>
                    <input type="url" title="add https:// before website address" name="website" class="form-control" placeholder="Optional">

                    <label>Your Message:</label>
                    <textarea style="border-color:black;resize: none" id="text" cols="15" rows="3" name="text" class="form-control" placeholder="Say something..." required=""></textarea>
                    <input style="margin-top: 3px;background-color: black;color:white" type="submit" style="width: 270px;" name="submit" value="SEND" class="btn btn-default"/>

                </form>

            </div>
            <div class="col-sm-4 about-me">
                <h1 style="letter-spacing: 10px"class="animated bounce"><img src="img/message.png" style="width:100px;height: 90px;margin-top:-13px"/>-ZONE</h1>
                <div  style="overflow: auto;height: 350px">
                    <?php
                    require './database/connect.php';
                    $sql = "SELECT * FROM cmnt ORDER BY id DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <fieldset>
                                <legend style="color:blueviolet"><span class="fa fa-user"></span><?php echo $row['name']; ?>&nbsp;&nbsp;<time class="message__time"><i class="fa fa-clock-o"></i><?php echo $row['timestamp']; ?></time></legend>
                                <span style="margin-bottom:10%;color:blue "><span class="fa fa-envelope-open-o"></span> <?php echo $row['text']; ?></span> <br>
                            </fieldset>
                        <?php } ?>
                        <?php
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
            </div>


        </div>


        <script>

            var myText = "MESSAGE",
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
            var url = "access/access-m.php";
            document.getElementById("url").href = url;
        </script>
        <script>
            var url2 = "access/access-m.php";
            document.getElementById("url2").href = url2;
        </script>
    </body>
</html>
