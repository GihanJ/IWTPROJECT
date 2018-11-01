<?php
include ("db_connect.php");
session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>

    <link rel="stylesheet" href="style.css">
    <script language="JavaScript" type="text/javascript" src="validation.js"></script>
    <style>

        #container{
            height: 1700px;
        }
        #mainbody{
            width: 100%;
            margin-top: 0%;
            height: 52%;
        }
        #formcontent {
            float: left;
            width: 40%;
            margin-top: 20px;
            margin-left: 100px;

        }
        .area{
            height: 30px;
            border-width: 1px;
            border-radius:3px;
            border-color:black;
        }
        .multi{
            border-radius: 3px;
            border-color: black;
        }
        #button{
            background-color: #aa8dd2;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            height: 40px;
            width: 100px;

        }
        #media{
            width: 52%;
            float: right;
            margin-top: 150px;
            font-size: 30px;

        }



    </style>

</head>
<body>
<div id="container">
    <div id="header"><div id="img1"><a href="" ><img src="Images/logo.jpg" width="15%" height="50%" align="left"></a></div>
        <font color="white" style="font-family:'Good Times';float: left;font-size: 75px" > EXO<br>LEISURE</font></a>

        <div id="text1">
            <a href=""><img src="Images/cart.jpg" width="10%" height="10%" align="right"> </a>
            <br><br><br><br><br><br><br>
            <span style="color: yellow">
            <?php echo " Hello ".$_SESSION['cname']."!" ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <a href="SignUp.html"> <font color="white" style="float: right"> &nbsp&nbsp&nbsp&nbspSign Up</font></a>
            <a href="SignIn.html" ><font color="white" style="float: right">Sign In &nbsp&nbsp&nbsp&nbsp</font></a>

        </div>
        <div id="navbar">
            <li><font color="black" size="3">Search</font></li>
            <li><a href="ContactUs.html"><font color="black" size="4"  >Contact Us</font></a></li>
            <li><a href=""><font color="black" size="4">About Us</font></a></li>
            <li><a href=""><font color="black" size="4">Profile</font> </a></li>
            <li><a href="Products.html"><font color="black" size="4">Products</font> </a></li>
            <li><a href="Activities.html"><font color="black" size="4">Activities</font> </a></li>
            <li><a href="Homepage.html"><font color="black" size="4">Home</font> </a></li><br/>
        </div> </div>
    <div id="banner"><img src="Images/pool.jpg" width="100%" height="100%"> </div>

    <div id="mainbody" align="left">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5116981423857!2d79.8663009141619!3d6.82907992143148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b241b6f91ed%3A0x841858331caf15a1!2s133+Galle+Rd%2C+Dehiwala-Mount+Lavinia!5e0!3m2!1sen!2slk!4v1508012378576"  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div id="formcontent">
            <form name="form2" onsubmit="return form2Validate()">
                <table>
                    <tr>
                        <td><input type="text" placeholder="   Name" name="urName" value="" class="area" size="35px"> </td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="   Email" name="email" value="" class="area" size="35px"> </td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="   Phone Number" name="number" class="area" size="35px"></td>
                    </tr>
                    <tr>
                        <td><textarea rows="10" cols="36" placeholder=" Question/Comment" name="comment=" class="multi"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" onclick="" id="button"></td>
                    </tr>

                </table></form></div>

        <div id="media" align="center">

            Find Us On<br>
            <a href=""><img src="Images/facev.png" width="10%"  height="10%"></a>
            <a href=""><img src="Images/instav.png" width="10%" height="10%"></a>
            <a href=""><img src="Images/twitterv.png" width="10%" height="10%"></a>
            <a href=""><img src="Images/youtubev.png" width="10%" height="10%"></a>

        </div>

    </div>
    <div id="footer">
        <li><a href="Homepage.html"><font color="white">Home</font></a></li>
        <li><a href="Activities.html"><font color="white">Activities</font> </a></li>
        <li><a href="Products.html"><font color="white">Products</font></a></li>
        <li><a href=""><font color="white">Profile</font></a></li>
        <li><a href="ContactUs.html"><font color="white">Contact us</font> </a> </li>
        <li><font color="white">Subscribe</font></li>
        <a href=""><img src="Images/facebook.jpg" height="30%"> </a>
        <a href=""><img src="Images/instagram.jpg" height="30%"> </a>
        <a href=""><img src="Images/snapchat.jpg" height="30%"> </a>
        <a href=""><img src="Images/twitter.jpg" height="30%"> </a>
        <a href=""><img src="Images/youtube.jpg" height="30%"> </a>
        <br><br><br><br><br> Copyright @ IWT Project-Y1-S2-Group 3.2. 2017-All rights Reseved
    </div>

</div>
</body>
</html>
