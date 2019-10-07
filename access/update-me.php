<?php
require '../database/connect.php';

if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:access-me.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

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
            @import url(https://fonts.googleapis.com/css?family=Lato);
            @import url(https://fonts.googleapis.com/css?family=Oswald);
            @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
            
            body{
               
            }
            .snip1559 {
                font-family: 'Lato', Arial, sans-serif;
                position: relative;
                display: inline-block;
                overflow: hidden;
                margin: 8px;
                min-width: 250px;
                max-width: 310px;
                width: 100%;
                background-color: #ffffff;
                color: #2B2B2B;
                text-align: center;
                font-size: 16px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            }

            .snip1559 * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            .snip1559 .profile-image {
                padding: 15% 10% 0;
            }

            .snip1559 .profile-image img {

            }

            .snip1559 figcaption {
                padding: 5% 10% 15%;
            }

            .snip1559 h3 {
                font-family: 'Oswald';
                text-transform: uppercase;
                font-size: 20px;
                font-weight: 400;
                line-height: 24px;
                margin: 3px 0;
            }

            .snip1559 h5 {
                font-weight: 400;
                margin: 0;
                text-transform: uppercase;
                color: #888;
                letter-spacing: 1px;
            }

            .snip1559 .icons i {
                color: #999;
                display: inline-block;
                margin-right: 5px;
                font-size: 1.5em;
            }

            .snip1559 .icons i:hover {
                color: #555;
            }

            .snip1559 .icons i a {
                text-decoration: none;
            }


            /* Demo purposes only */

            body {
                background-color: #212121;
                text-align: center;
            }
            figure{
                height:430px}

            label{
                font-family: oswald,sans-serif;
                display:inline-block;
                border:3px solid #ccc;
                color:#666;
                font-weight:bold;
                background:#eee;
                padding:8px 15px;
                border-radius:5px;
                cursor:pointer;
                margin-top: 10px
            }
            fieldset{

            }
            legend{
                font-family: oswald,sans-serif;
            }
            h4{
                font-family:oswald,sans-serif; 
                color: blue

            }
            input{
                border-color: black;
                font-family: 'Oswald',sans-serif;
                width: 180px;

            }

            select{
                min-width: 180px;
                height: 28px;
                border-color: black;
                border: 2px solid;
                font-family:oswald,sans-serif;
                font-weight: 100
            }
            .input{
              
                font-family: oswald, sans-serif;
                margin-top: 10px;
                height: 50px;
                margin-bottom: 7%;
            }
            h1{
                font-family: oswald, sans-serif;
            }
            nav{
                color: white;
                font-family: oswald, sans-serif;
                margin-left: 64%;
                margin-top: 3%
            }
            a:hover{
                color: white
            }
            img[src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]{
                display: none;
            }
            i{
                color:red;
            }
        </style>

    </head>

    <body>
        <?php
        $sql = "SELECT * FROM me";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            ?>
            <div class="col-sm-12">
                <div class="col-sm-2"></div>
                <div class="col-sm-4" style="margin-top:8%">


                    <?php while ($row = $result->fetch_assoc()) { ?> 
                        <form action="" method="POST" enctype="multipart/form-data">
                            <figure class="snip1559">
                                <fieldset>
                                    <legend>Profile Picture</legend>
                                    <div class="profile-image">
                                        <div style="margin-top: -50px">
                                            <img id="blah" class="img-thumbnail"  src="<?php echo $row['pro_pic']; ?>" style="height: 300px; width: 300px;border:1px black" alt="your image" />
                                        </div>
                                        <label for="upload"><i class="fa fa-camera"></i>
                                            <input type='file' name="pro_pic" value="<?php echo $row['pro_pic']; ?>" accept="image/gif,image/jpeg,image/png" id="upload" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" style="display: none">
                                        </label> 

                                    </div>
                                </fieldset>

                            </figure>
                            <input class="input" type="submit" value="Change Picture" name="change-pic" style=""/>
                        </form>
                    </div>

                    <div class="col-sm-4" style="margin-top:8%">
                        <form action="" method="POST">
                           


                            <figure class="snip1559">

                                <fieldset>
                                    <legend>Social Links</legend>
                                    <h4><i class="fa fa-facebook"></i> Facebook</h4><input type="url" name="facebook_link" value="<?php echo $row['facebook_link']; ?>" placeholder="facebook link" style="text-align: center" required="required"/>
                                    <h4><i class="fa fa-linkedin"></i> Linkedin</h4><input type="url" name="linkedin_link" value="<?php echo $row['linkedin_link']; ?>" placeholder="linkedin link" style="text-align: center" required="required"/>
                                    <h4><i class="fa fa-envelope"></i> Twitter</h4><input type="url" name="twitter_link" value="<?php echo $row['twitter_link']; ?>" placeholder="twitter link" style="text-align: center" required="required"/>
                                    <h4><i class="fa fa-user-secret"></i> Full Name</h4><input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="name" style="text-align: center" required="required"/>
                                    <h4><i class="fa fa-vcard"></i> Position</h4>
                                    <select name="position">
                                        <option selected="selected"><?php echo $row['position']; ?></option>
                                        <option>Software Developer</option>
                                        <option>Designer & Developer</option>
                                        <option>Graphics Designer</option>
                                        <option>Marketer</option>
                                    </select>

                                </fieldset>

                            </figure>  

                            <input class="input" type="submit" value="Save Changes" name="change" style=""/>
                        </form>
                    </div>
                <div class="col-sm-2"></div>
                </div>
            <?php } ?>

            <?php
        } else {
            
        }
        ?>



        <?php
        if (isset($_POST["change"])) {

            $name = $_POST["name"];
            $position = $_POST["position"];
            $facebook_link = $_POST["facebook_link"];
            $linkedin_link = $_POST["linkedin_link"];
            $twitter_link = $_POST["twitter_link"];



            $sql = "UPDATE `me` SET `name`='$name',`position`='$position',`twitter_link`='$twitter_link',`facebook_link`='$facebook_link',`linkedin_link`='$linkedin_link' ";
                   
            if ($conn->query($sql) === TRUE) {
                $message = "Changes saved successfully! Redirecting to home page..";
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo"<script>document.location='../index.php';</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>

        <?php
        if (isset($_POST["change-pic"])) {

            $directory = 'gallery/';
            $pro_pic = $directory . basename($_FILES['pro_pic']['name']);

            move_uploaded_file($_FILES['pro_pic']['tmp_name'], $pro_pic);


            $sql = "UPDATE `me` SET `pro_pic`='$pro_pic' ";
            if ($conn->query($sql) === TRUE) {
                $message = "Profile picture changed successfully! Redirecting to home page..";
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo"<script>document.location='../index.php';</script>";
            } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        ?>



        <script>
            function preview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#img').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#upload").change(function () {
                $("#img").css({top: 0, left: 0});
                preview(this);
                $("#img").draggable({containment: 'parent', scroll: false});
            });
        </script>


        <script>
            /* Demo purposes only */
            $(".hover").mouseleave(
                    function () {
                        $(this).removeClass("hover");
                    }
            );

        </script>
        <?php include '../parts/scripts.php'; ?>
    </body>
</html>