<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 13/10/2018
 * Time: 02:12 م
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
<style>


    div.transbox {

        background-color: darkblue;
        height: 100%;
        padding-top: 10%;
        padding-bottom: 30%;
        opacity: 0.6;
        filter: alpha(opacity=60); /* For IE8 and earlier */
        width: 40%;
    }

    div.transbox p {
        margin: 20%;


    }
    div.transbox1 {

        background-color: lightskyblue;
        height: 100%;
        padding-top: 10%;
        padding-bottom: 15%;
        opacity: 0.6;
        filter: alpha(opacity=60); /* For IE8 and earlier */
        width: 40%;
    }

    div.transbox1 p {
        margin: 20%;
        font-weight: bold;

    }


    .active{
        color: darkorange;
    }
    .fixed-bg1 {
        background-image: url("pic.PNG");
        min-height: 600px;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        width: 100%;
    }

    .active1{
        color: red;
    }
    .fixed-bg2 {
        background-image: url("back2.PNG");
        min-height: 500px;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        width: 100%;
    }
    .fixed-bg3 {
        background-image: url("img_mountains.jpg");
        min-height: 800px;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        width: 100%;
        /* For IE8 and earlier */
        background-color: darkblue;
    }
    div.transbox3 {

        background-color: darkblue;
        height: 100%;
        padding-top: 10%;
        padding-bottom: 20%;
        opacity: 0.6;
        filter: alpha(opacity=60); /* For IE8 and earlier */
        width: 40%;
    }
    div.transbox3 p {
        margin: 20%;
        font-weight: bold;

    }
    .fixed-bg4 {
        background-color: white;
        min-height: 680px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
    }
    .fixed-bg {
        background-color: darkblue;
        min-height: 400px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
    }



    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 35%;
    }

    .button1 {
        background-color: white;
        color: darkorange;
        border: 2px solid darkorange;
        height: 60px;

    }

    .button1:hover {
        background-color: darkorange;
        color: white;
    }


    .button3 {
        background-color: lightgray;
        color: darkorange;
        border: 2px solid darkorange;
        height: 60px;

    }

    .button3:hover {
        background-color: darkorange;
        color: white;
    }

    .button2 {
        background-color: darkblue;
        color: white;
        border: 2px solid white;
        height: 60px;

    }

    .button2:hover {
        background-color: white;
        color: darkblue;
    }

    .img-bg {
        border-radius: 50%;
    }
    .pic{
        opacity: 1;
        filter: alpha(opacity=100);

    }
    .pic:hover {
        opacity: 0.3;
        filter: alpha(opacity=30);
    }

    .fixed-bg4 {
        background-image: url("pic1.PNG");
        min-height: 500px;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        width: 100%;
    }
.w3-button:hover{
    background-color: blue;;
}
</style>
<body style="background-color: white;">
<!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar" id="myNavbar" style="background-color:bisque;color: darkblue;">
            <a href="#Home" class="w3-bar-item w3-button w3-wide">
                <img src="logo5.png" style="height: 85px;"></a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small"  style="padding-top: 15px;">
                <a href="#Home" class="w3-bar-item w3-button"><span class="active1">Home</span></a>
                <a href="#About" class="w3-bar-item w3-button">About</a>
                <a href="#Services" class="w3-bar-item w3-button">Services</a>
                <a href="#Blog" class="w3-bar-item w3-button">Blog</a>
                <a href="#Contact" class="w3-bar-item w3-button">Contact</a>


                <p style="background-color: darkblue;color: bisque;float: right;padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">CALL 123-456-7890</p>

            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()" style="padding-top: 20px;">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="#Home" onclick="w3_close()" class="w3-bar-item w3-button"><span class="active1">Home</span></a>
        <a href="#About" onclick="w3_close()" class="w3-bar-item w3-button"  style="color: black;">About</a>
        <a href="#Services" onclick="w3_close()" class="w3-bar-item w3-button"  style="color: black;">Services</span></a>
        <a href="#Blog" onclick="w3_close()" class="w3-bar-item w3-button"  style="color: black;">Blog</a>
        <a href="#Contact" onclick="w3_close()" class="w3-bar-item w3-button"  style="color: black;">Contact</a>
    </nav>
    <!-- Add Google Maps -->
    <script>
        function myMap()
        {
            myCenter=new google.maps.LatLng(41.878114, -87.629798);
            var mapOptions= {
                center:myCenter,
                zoom:12, scrollwheel: false, draggable: false,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }
    </script>
<div class="vt">
    <div class="w3-container" style="background-color: bisque;padding-bottom: 20px;padding-top: 20px;">
        <div class="container" style="padding-top: 60px;padding-bottom: 60px;">
            <div class="w3-content  w3-padding-32" style="max-width:100%;">

                <!-- Project Section -->
                <div  class="w3-container  w3-padding-32" id="Home">
        <div class="w3-half w3-animate-left">
            <p style="color: darkblue;font-size: 30px;font-family: 'Arial Black';">
                <span style="color: darkblue;font-size: 150px;"><b>Pet<br>
                Care</b></span><br>
                House Call Veterinarian</p>
       <br>
            <div class="w3-bar">
                <button class="w3-button" style="background-color: darkblue;color: bisque;">SCHEDULE A VISIT</button>
                </div>
            </div>
            <div class="w3-half w3-animate-right">

                <img class="img-bg" src="dog.webp" alt="" style="width:100%;">

            </div>
        </div>


    </div>
</div>
        </div>
    </div>

<div class="ft" style="background-color: white;padding-top: 30px;padding-bottom: 30px;">
    <div class="w3-container"  style="padding-top: 60px;padding-bottom: 60px;">
        <div class="container">
            <div class="w3-content  w3-padding 64" style="max-width:100%;">

                <!-- Project Section -->
                <div  class="w3-container  w3-padding-64" id="About">
            <div class="w3-half w3-animate-left">
                <img src="vet.webp" class="img-bg" alt="" style="width:70%;">
            </div>
            <div class="w3-half w3-animate-right">
                <p style="color: darkblue;font-size: 20px;">
                <span style="color: darkblue;font-size: 100px;font-family: Arial;"><b>About Me
                        </b></span><br>
                    I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                <br>
                <div class="w3-bar">
                    <button class="w3-button" style="background-color: darkblue;color: bisque;">READ MORE</button>
                </div>
            </div>

        </div>

    </div>
</div>
        </div>
    </div>

<div class="ft" style="background-color: white;padding-top: 30px;padding-bottom: 30px;text-align: center;">
    <div class="w3-container">
        <div class="container">
            <div class="w3-content  w3-padding 64" style="max-width:100%;">

                <!-- Project Section -->
                <div  class="w3-container  w3-padding-64" id="Services">
            <p style="text-align: center;color: darkblue;font-size: 80px;font-family: 'Arial';"><b>Services</b></p>
            <div class="w3-third w3-animate-left">
                <img src="dog1.webp" class="img-bg" alt=""><br>
                <p style="color: darkblue;font-size: 15px;">
                <span style="color: darkblue;font-size: 40px;"><b>Grooming
                    </b></span><br>
                    Use this area to describe one of your services. You can change the title to the service you provide and use this text area to describe your service. Feel free to change the image. </p>
                <br>
                <div class="w3-bar">
                    <button class="w3-button" style="background-color: darkblue;color: bisque;">BOOK NOW</button>
                </div>
            </div>
            <div class="w3-third  w3-animate-top">
                <img src="cqat.webp" class="img-bg" alt=""><br>
                <p style="color: darkblue;font-size: 15px;">
                <span style="color: darkblue;font-size: 40px;"><b>Checkup
                    </b></span><br>
                    Use this area to describe one of your services. You can change the title to the service you provide and use this text area to describe your service. Feel free to change the image. </p>
                <br>
                <div class="w3-bar">
                    <button class="w3-button" style="background-color: darkblue;color: bisque;">BOOK NOW</button>
                </div>
            </div>
            <div class="w3-third w3-animate-right">
                <img src="dog2.webp" class="img-bg" alt=""><br>
                <p style="color: darkblue;font-size: 15px;">
                <span style="color: darkblue;font-size: 40px;"><b>Dental Care
                    </b></span><br>
                    Use this area to describe one of your services. You can change the title to the service you provide and use this text area to describe your service. Feel free to change the image. </p>
                <br>
                <div class="w3-bar">
                    <button class="w3-button" style="background-color: darkblue;color: bisque;">BOOK NOW</button>
                </div>
            </div>

        </div>

    </div>
</div>
        </div>
    </div>

<div class="ft" style="background-color: white;padding-top: 30px;padding-bottom: 30px;text-align: center;">
    <div class="w3-container">
        <div class="container"
            <div class="w3-content  w3-padding 64" style="max-width:100%;">

                <!-- Project Section -->
                <div  class="w3-container  w3-padding-64" id="Blog">
            <p style="text-align: center;color: darkblue;font-size: 80px;font-family: 'Arial';"><b>Love My Clients</b></p>
            <div class="w3-third w3-animate-left">
                <img src="1.PNG"  class="pic" alt="" style="width: 350px;height: 250px;"><br><br>
                <img src="4.PNG"  class="pic" alt="" style="width: 350px;height: 250px;">
                </div>
            <div class="w3-third w3-animate-bottom">
                <img src="2.PNG"  class="pic" alt="" style="width: 350px;height: 250px;"><br><br>
                <img src="5.PNG"  class="pic" alt="" style="width: 350px;height: 250px;">
            </div>
            <div class="w3-third w3-animate-right">
                <img src="3.PNG"  class="pic" alt="" style="width: 350px;height: 250px;"><br><br>
                <img src="6.PNG"  class="pic" alt="" style="width: 350px;height: 250px;">
            </div>

        </div>

    </div>
</div>
        </div>

<div class="ft" style="background-color: white;padding-top: 30px;padding-bottom: 30px;text-align: center;">
    <div class="w3-container w3-center w3-animate-left">
        <div class="container">
            <div class="w3-content  w3-padding-32" style="max-width:100%;">

                <!-- Project Section -->
                <div  class="w3-container" id="">
            <p style="text-align: center;color: darkblue;font-size: 80px;font-family: 'Arial';"><b>What Pet Owners Say</b></p>
            <div class="w3-third">
                <p style="color: darkblue;font-size: 20px;">
                <span style="color: darkblue;font-size: 40px;"><b>"Very Professional"
                    </b></span><br>
                    “I'm a testimonial. Click to edit<br> me and add text that says <br>something nice about you and <br>your services. Let your customers <br>review you and tell their friends<br> how great you are.”
<br><br><br>
                    <b>Daria Cowan</b></p>
            </div>
            <div class="w3-third">
                <p style="color: darkblue;font-size: 20px;">
                <span style="color: darkblue;font-size: 40px;"><b>"Great Service"
                    </b></span><br>
                    “I'm a testimonial. Click to edit<br> me and add text that says <br>something nice about you and <br>your services. Let your customers <br>review you and tell their friends<br> how great you are.”
                    <br><br><br>
                    <b>Tom Rankin</b></p>
            </div>
            <div class="w3-third">
                <p style="color: darkblue;font-size: 20px;">
                <span style="color: darkblue;font-size: 40px;"><b>"Kind & Loving"
                    </b></span><br>
                    “I'm a testimonial. Click to edit<br> me and add text that says <br>something nice about you and <br>your services. Let your customers <br>review you and tell their friends<br> how great you are.”
                    <br><br><br>
                    <b>Eva Kendall</b></p>
            </div>

        </div>

    </div>
</div>
        </div>
    </div>

<div class="ft" style="background-color: darkblue;padding-top: 30px;text-align: center;">
    <div class="w3-container w3-animate-left">
        <div class="container">
            <div  style="max-width:100%;">

                <!-- Project Section -->
                <div  class="w3-container" id="Contact">
            <p style="text-align: center;color: white;font-size: 80px;font-family: 'Arial';"><b>Contact</b></p><br><br><br>
    <div class="w3-quarter" style="color: white;font-size: 20px;">
<p><b>Phone</b></p>
        <br>
        <p  style="font-size: 18px;">123-456-7890</p>
    </div>
        <div class="w3-quarter" style="color: white;font-size: 20px;">
<p><b>Email</b></p><br>
            <a href  style="font-size: 18px;text-decoration: none;
            text-underline: none;color: white;">info@mysite.com</a>
        </div>
        <div class="w3-quarter" style="color: white;font-size: 20px;">
<p><b>Hours of Operation</b></p><br>
            <p style="font-size: 18px;">Mon - Fri: 9am - 8pm<br>


                ​​Saturday: 9am - 4pm</p>
        </div>
        <div class="w3-quarter" style="color: white;font-size: 20px;">
<p><b>Area of Service</b></p><br>
            <p  style="font-size: 18px;">San Francisco &<br>

                the Peninsula</p>
        </div>
            <br>
            <br><br><br><br>
            <div class="container" style="width: 100%;text-align: center;padding-left: 100px;padding-top: 40px;">
            <form class="form-horizontal" method="POST" action="">
                <div class="w3-half">
            <div class="form-group">
                <div class="col-md-12">
                    <input id="Name" type="text" class="form-control" name="name" style="color:white;width: 80%;background-color: transparent;border-top-color: transparent;border-left-color: transparent;border-right-color: transparent;"  placeholder= "Name" required>


                </div>
            </div>
        </div>
        <div class="w3-half">

            <div class="form-group">
                <div class="col-md-12">
                    <input id="email" type="text" class="form-control" name="email"   style="color: white;width: 80%;background-color: transparent;border-top-color: transparent;border-left-color: transparent;border-right-color: transparent;"  placeholder="email" required>


                </div>
            </div>

        <br></div>
        <br>
        <div class="form-group">
            <div class="col-md-12">
                <input id="Subject" type="text" class="form-control" name="Subject"   style="color: white;width: 90%;background-color: transparent;border-top-color: transparent;border-left-color: transparent;border-right-color: transparent;"  placeholder="Subject" required>


            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-md-12">
                <textarea id="Message"  class="form-control"  cols="20" ROWS="6" name="Message" placeholder="Message" style="color: white;width: 90%;background-color: transparent;border-top-color: transparent;border-left-color: transparent;border-right-color: transparent;"></textarea>


            </div>
        </div>
        <br>
        <div class="form-group">
                <button   style="width: 90%;display: inline-block;color: white;text-align: center;text-decoration: none;text-underline: none;background-color: transparent;border-top-color: transparent;border-left-color: transparent;border-right-color: transparent;border-bottom-color: transparent;"><i>Send</i></button>
        </div>
        </form>
</div>
            <div class="container" style="text-align: center;">
                <div class="w3-half"  style="float: left;">
                <img src="ddog.webp">
                    </div>
                <div class="w3-half" style="width: 15%;padding-top: 70px;text-align: center;">
                <div class="w3-quarter">
                    <img src="facebook.webp">
                </div>
                <div class="w3-quarter">
<img src="twitter.webp">
                </div>
                <div class="w3-quarter">
<img src="youtube.webp">
                </div>
                <div class="w3-quarter">
<img src="instegram.webp">
                </div>
            </div>
    </div>
    </div>
        </div>
</div>
        </div>
    </div>
<footer style="background-color: white;color: cornflowerblue;text-align: center;padding-top: 30px;padding-bottom:30px;">
    <p class="w3-animate-bottom">©2023 by Dr. Mark. Proudly created with <a href="" style="color: cornflowerblue;text-decoration: underline;">Shaimaa.com</a></p>
</footer>
</body>
</html>
