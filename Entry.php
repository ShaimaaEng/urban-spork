<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 27/10/2018
 * Time: 04:09 م
 */
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid darkcyan;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    .w3-btn:hover{
        background-color: darkcyan;
        color: white;
    }
</style>
<nav class="navbar navbar-inverse" style="background-color: darkcyan;color: aliceblue;">
    <div class="container-fluid">
        <div class="navbar-header"  style="float: right;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="DescribeMe.php"><div class="w3-cell"><span>صفني</span></div><div class="w3-cell w3-container"><img src="Logo%20(1).png"></div></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="CallUs.php">اتصل بنا</a></li>
                <li><a href="Aboutthesite.php">عن الموقع</a></li>
                <li><a href="Entry.php">دخول</a></li>
                <li><a href="SignUp.php">تسجيل</a></li>
            </ul>
        </div>
    </div>
</nav>
<body>
<div class="yt" style="padding-top: 30px;text-align: center;">
    <p style="font-size: 20px;">تسجيل الدخول</p>
    <a href="https://www.facebook.com/v2.8/dialog/oauth?app_id=384287832085220&channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F__Bz3h5RzMx.js%3Fversion%3D42%23cb%3Df2b7f9dfd9a2f7c%26domain%3Dwww.syfni.com%26origin%3Dhttps%253A%252F%252Fwww.syfni.com%252Ff25d3b667d8cda%26relation%3Dopener&client_id=384287832085220&display=popup&domain=www.syfni.com&e2e=%7B%7D&fallback_redirect_uri=https%3A%2F%2Fwww.syfni.com%2F&locale=en_US&origin=1&redirect_uri=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F__Bz3h5RzMx.js%3Fversion%3D42%23cb%3Df35dc647efdb098%26domain%3Dwww.syfni.com%26origin%3Dhttps%253A%252F%252Fwww.syfni.com%252Ff25d3b667d8cda%26relation%3Dopener%26frame%3Df79c9d8c2f4864&response_type=token%2Csigned_request&sdk=joey&version=v2.8"><img src="fbconnect%20(1).png"></a>
</div>
<br><br>

<div class="container" style="padding-left: 40px;padding-bottom: 40px;padding-right: 40px;text-align: center;">
    <form action="">


        <input type="text" id="lname" name="lastname" placeholder="البريد أو اسم المستخدم" required>


        <input type="text" id="lname" name="lastname"  placeholder="الرقم السري" required>

        <input type="submit"  value="دخول" style="background-color: darkcyan;">

        <span>تذكرني</span><input type="checkbox" name="vehicle" value="Bike">


       <br><br>
        <a href="" style="color: darkgray;">نسيت الرقم السري</a>
    </form>
</div>


<br><br><br><br><br><br>
<nav class="navbar navbar-inverse" style="background-color: gainsboro;">

    <div class="navbar-header"  style="float: right;">
        <a class="navbar-brand" href="SignUp.php">- الخصوصية - القوانين<div class="fa fa-instagram"></div><div class="fa fa-facebook"></div><div class="fa fa-twitter"></div>صفني 2018 ©</a>
    </div>


</nav>
</body>
</html>
