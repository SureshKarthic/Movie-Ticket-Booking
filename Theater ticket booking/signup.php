<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Container */
        .container {
            width: 40%;
            margin: 0 auto;
        }

        /* Login */
        #div_login {
            border: 1px solid gray;
            border-radius: 3px;
            width: 470px;
            height: 270px;
            box-shadow: 0px 2px 2px 0px gray;
            margin: 0 auto;
        }

        #div_login h1 {
            margin-top: 0px;
            font-weight: normal;
            padding: 10px;
            background-color: cornflowerblue;
            color: white;
            font-family: sans-serif;
        }

        #div_login div {
            clear: both;
            margin-top: 10px;
            padding: 5px;
        }

        #div_login .textbox {
            width: 96%;
            padding: 7px;
        }

        #div_login input[type=submit] {
            padding: 7px;
            width: 100px;
            background-color: lightseagreen;
            border: 0px;
            color: white;
        }
    </style>
</head>

<body style="background-image: url('img/photo-1613210434051-4b00d62d03fb.jpeg');background-size: 100%;z-index: -1;">
   <h1 style="color:#fff;text-align: center;">Presedio Cinemas</h1>
    <div class="container" style="padding-top:200px;" >
        <form method="post" action="">
            <div id="div_login" style="background-color: #fff;">
                <h1>User sign up</h1>
                <div>
                    <input type="text" class="textbox" id="txt_uname" name="txt_email" placeholder="Email" />
                </div>
                <div>
                    <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                </div>
                <div>
                    <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password" />
                </div>
                <div>
                    <input type="submit" value="Register" name="but_submit" id="but_submit" />
                </div>
                <a href="signin.php">login</a>
            </div>
        </form>
    </div>
</body>

</html>

<?php
include "connection.php";

if (isset($_POST['but_submit'])) {
    $email=$_POST['txt_email'];
    $uname=$_POST['txt_uname'];
    $password=$_POST['txt_pwd'];
    if ($uname != "" && $password != "" && $email!="") {
        $sql="INSERT INTO user_details values('$uname','$password','$email')";
        if(mysqli_query($con,$sql)){
            if($_POST['but_submit']){
                echo '<script>alert("account created sucessfully")</script>';
            }
            else{
                echo '<script>alert("not inserted")</script>';
            }
        }

}
}
?>