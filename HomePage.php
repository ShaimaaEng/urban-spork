<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 26/10/2018
 * Time: 08:42 م
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
    .img-bg {
        border-radius: 50%;
        width: 15%;
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
<br><br><br>
<div class="container" style="text-align: center;padding-top: 50px;">
    <form action="">

            <img src="img_avatar.png"  class="img-bg">
            <br>
        <label for="subject">Message</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" autofocus required></textarea>
        <input type="submit" value="صارح" style="background-color: darkcyan;">
</div>
<br><br><br><br><br><br>
<nav class="navbar navbar-inverse" style="background-color: gainsboro;">

    <div class="navbar-header"  style="float: right;">
        <a class="navbar-brand" href="SignUp.php">- الخصوصية - القوانين<div class="fa fa-instagram"></div><div class="fa fa-facebook"></div><div class="fa fa-twitter"></div>صفني 2018 ©</a>
    </div>


</nav>
</body>
</html>
 