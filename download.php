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

            .x{
                font-family: 'Dosis', sans-serif;   
            }


            #wrap {
                margin: 20px auto;
                text-align: center;
            }

            .btn-slide, .btn-slide2 {
                position: relative;
                display: inline-block;
                height: 50px;
                width: 230px;
                line-height: 50px;
                padding: 0;
                border-radius: 50px;
                background: #fdfdfd;
                border: 2px solid #0099cc;
                margin: 10px;
                transition: .5s;
            }

            .btn-slide2 {
                border: 2px solid #efa666;
            }

            .btn-slide:hover {
                background-color: #0099cc;
            }

            .btn-slide2:hover {
                background-color: #efa666;
            }

            .btn-slide:hover span.circle, .btn-slide2:hover span.circle2 {
                left: 100%;
                margin-left: -45px;
                background-color: #fdfdfd;
                color: #0099cc;
            }

            .btn-slide2:hover span.circle2 {
                color: #efa666;
            }

            .btn-slide:hover span.title, .btn-slide2:hover span.title2 {
                left: 40px;
                opacity: 0;
            }

            .btn-slide:hover span.title-hover, .btn-slide2:hover span.title-hover2 {
                opacity: 1;
                left: 40px;
            }

            .btn-slide span.circle, .btn-slide2 span.circle2 {
                display: block;
                background-color: #0099cc;
                color: #fff;
                position: absolute;
                float: left;
                margin: 5px;
                line-height: 42px;
                height: 40px;
                width: 40px;
                top: 0;
                left: 0;
                transition: .5s;
                border-radius: 50%;
            }

            .btn-slide2 span.circle2 {
                background-color: #efa666;
            }

            .btn-slide span.title,
            .btn-slide span.title-hover, .btn-slide2 span.title2,
            .btn-slide2 span.title-hover2 {
                position: absolute;
                left: 90px;
                text-align: center;
                margin: 0 auto;
                font-size: 16px;
                font-weight: bold;
                color: #30abd5;
                transition: .5s;
            }

            .btn-slide2 span.title2,
            .btn-slide2 span.title-hover2 {
                color: blue;
                left: 80px;
            }

            .btn-slide span.title-hover, .btn-slide2 span.title-hover2 {
                left: 80px;
                opacity: 0;
            }

            .btn-slide span.title-hover, .btn-slide2 span.title-hover2 {
                color: #fff;
            }
            img[src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]{
                visibility:hidden;
            }
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
            #downloads-nav {
                color: orange;
                
            }
            #downloads-sidenav {
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

        <div class="col-sm-12" style="margin-top:">
            <div class="col-sm-6 pro-pic" style="margin-top:90px">
                <?php include './parts/me.php'; ?>
            </div>


        
                <div class="col-sm-6 about-me">

                    <h1 class="animated bounce"><span id="mytext"></span><img src="img/download%20(3).png"/></h1><br/>
                    <div id="wrap" style="float: left;" class="x">
                        <a href="www.w3schools.com.html" class="btn-slide2" download title="w3schools.com offline">
                            <span class="circle2"><i class="fa fa-download"></i></span>
                            <span class="title2">www.w3schools.com</span>
                            <span class="title-hover2">Download [ 9.4MB ]</span>
                        </a>
                    </div>

                </div>

            <div>
                <span style="padding-left:40px">Total downloads:</span><a href="http://www.reliablecounter.com/" target="_blank"><img src="https://www.reliablecounter.com/count.php?page=tahasin.tk/downloads.html&amp;digit=style/plain/12/&amp;reloads=1" alt="unavailable!" title="free website hit counter code" border="0"></a><br /><a href="http://www.reliablecounter.com/ar/" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;"></a>
            </div>
        </div>

        <script>

            var myText = "DOWNLOADS",
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
            var url = "access/access-d.php";
            document.getElementById("url").href = url;
        </script>
        <script>
            var url2 = "access/access-d.php";
            document.getElementById("url2").href = url2;
        </script>
    </body>
</html>
