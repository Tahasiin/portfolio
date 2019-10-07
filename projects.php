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
            }
            h3{
                font-size: 20px;
            }
            .a{
                color: black !important;
                font-family: 'oswald',sans-serif !important;
                padding:30px; 
            }
            .project{

                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 300px;
                height: 150px
            }
            a {text-decoration: underline !important;}
            a:hover {text-decoration: none !important;}
             nav{
                background-color: white !important;
            }  
            #projects-nav {
                color: orange;
                
            }
            #projects-sidenav {
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

        <div class="col-sm-12">
            <div class="col-sm-6 pro-pic" style="margin-top:9%">
                <?php include './parts/me.php'; ?>
            </div>


            <div class="col-sm-6 about-me" style="text-align: center">
                <h1 class="animated bounce" id="mytext"></h1><br/>
                <div style="overflow: auto;height: 300px;">
                    <div class="col-sm-12" style="margin-bottom: 10px">
                        <div class="col-sm-6" style="margin-left: -30px;">
                            <a href="http://skynetbd.net/" onclick="basicPopup(this.href); return false">
                                <img src="img/project1.png" alt="" class="project">
                            </a>

                        </div>
                        <div class="col-sm-6" style="margin-left: 30px">
                            <h3><a href="http://skynetbd.net/" onclick="basicPopup(this.href); return false"><u>SKYNETBD.NET</u></a></h3>
                            <h4>THIS SITE WAS ACTUALLY DESIGNED BY <a href="http://newzentech.com/" onclick="basicPopup(this.href); return false">NEWZENTECH.COM</a> & NOW I AM THE DEVELOPER OF THIS SITE.</h4>
                        </div>
                    </div>
                    <div class="col-sm-12"style="margin-bottom: 10px">
                        <div class="col-sm-6" style="margin-left: -30px">
                            <a href="http://newzentech.com/" onclick="basicPopup(this.href); return false">
                                <img src="img/project2.png" alt="" class="project">
                            </a>
                        </div>

                        <div class="col-sm-6" style="margin-left: 30px">

                            <h3><a href="http://newzentech.com/" onclick="basicPopup(this.href); return false"><u>NEWZENTECH.COM</u></a></h3>
                            <h4>IT'S A TEAM WORK PROJECT & I AM A LEAD DEVELOPER IN THIS PROJECT.</h4>
                        </div>
                    </div>
                    <div class="col-sm-12"style="margin-bottom: 10px">
                        <div class="col-sm-6" style="margin-left: -30px">
                            <a href="http://skynetbd.net/tamplate/index.html" onclick="basicPopup(this.href); return false">
                                <img src="img/demo1.png" alt="" class="project">
                            </a>
                        </div>

                        <div class="col-sm-6" style="margin-left: 30px">

                            <h3><a href="http://skynetbd.net/tamplate/index.html" onclick="basicPopup(this.href); return false"><u>PRO-SMS DEMO</u></a></h3>
                            <h4>IT'S A DEMO OF MY SMS[SCHOOL MANAGEMENT SYSTEM] PROJECT.THIS PROJECT IS IN THE FINAL STAGE NOW.</h4>
                        </div>
                    </div>
                    <div class="col-sm-12"style="margin-bottom: 10px">
                        <div class="col-sm-6" style="margin-left: -30px">
                            <a href="#">
                                <img src="img/dev.jpg" alt="" class="project">
                            </a>
                        </div>

                        <div class="col-sm-6" style="margin-left: 30px">

                            <h3><a href="#"><u>PROJECT-IDEA</u></a></h3>
                            <h4>THIS PROJECT IS IN THE FINAL STAGE AND COMING ONLINE SOON.</h4>
                        </div>
                    </div>
                    <div class="col-sm-12"style="margin-bottom: 10px">
                        <div class="col-sm-6" style="margin-left: -30px">
                            <a href="#">
                                <img src="img/dev.jpg" alt="" class="project">
                            </a>
                        </div>

                        <div class="col-sm-6" style="margin-left: 30px">

                            <h3><a href="#"><u>PROJECT-IDEA</u></a></h3>
                            <h4>THIS PROJECT IS IN THE FINAL STAGE AND COMING ONLINE SOON.</h4>
                        </div>
                    </div>
                    <div class="col-sm-12"style="margin-bottom: 10px">
                        <div class="col-sm-6" style="margin-left: -30px">
                            <a href="#">
                                <img src="img/dev.jpg" alt="" class="project">
                            </a>
                        </div>

                        <div class="col-sm-6" style="margin-left: 30px">

                            <h3><a href="#"><u>PROJECT-IDEA</u></a></h3>
                            <h4>THIS PROJECT IS IN THE FINAL STAGE AND COMING ONLINE SOON.</h4>
                        </div>
                    </div>
                    <div class="col-sm-12"style="margin-bottom: 10px">
                        <div class="col-sm-6" style="margin-left: -30px">
                            <a href="#">
                                <img src="img/dev.jpg" alt="" class="project">
                            </a>
                        </div>

                        <div class="col-sm-6" style="margin-left: 30px">

                            <h3><a href="#"><u>PROJECT-IDEA</u></a></h3>
                            <h4>THIS PROJECT IS IN THE FINAL STAGE AND COMING ONLINE SOON.</h4>
                        </div>
                    </div>
                    <div class="col-sm-12"style="margin-bottom: 10px;border: black">
                        <div class="col-sm-6" style="margin-left: -30px">
                            <a href="#">
                                <img src="img/dev.jpg" alt="" class="project">
                            </a>
                        </div>

                        <div class="col-sm-6" style="margin-left: 30px">

                            <h3><a href="#"><u>PROJECT-IDEA</u></a></h3>
                            <h4>THIS PROJECT IS IN THE FINAL STAGE AND COMING ONLINE SOON.</h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <script>

            var myText = "MY PROJECTS",
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
            var url = "access/access-p.php";
            document.getElementById("url").href = url;
        </script>
        <script>
            var url2 = "access/access-p.php";
            document.getElementById("url2").href = url2;
        </script>
    </body>
</html>
