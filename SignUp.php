<?php
include ("db_connect.php")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>

    <link rel="stylesheet" href="style.css">
    <script language="JavaScript" type="text/javascript" src="validation.js"></script>
    <style>
        #container{

            height: 1000px;
        }

        #header{
            height: 30%;
        }

        #mainbody{

            height:51%;
            width:100%;
        }
        #footer {

            height: 15%;
        }
        .area{
            height: 40px;
            border-width: 1px;
            border-radius:3px;
            border-color:black;


        }
        .button{
            background-color: #aa8dd2;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            height: 40px;
            width: 100%;


        }

    </style>

</head>
<body>
<div id="container">
    <div id="header"><div id="img1"><a href="" ><img src="Images/logo.jpg" width="15%" height="50%" align="left"></a></div>
        <font color="white" style="font-family:'Good Times';float: left;font-size: 75px" > EXO<br>LEISURE</font>

        <div id="text1">
            <a href=""><img src="Images/cart.jpg" width="10%" height="10%" align="right"> </a>
            <br><br><br><br><br><br><br>
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

    <div id="mainbody" align="center">
        <h1>Sign Up</h1>
        <h2>Sign up to browse more</h2>

        <form name="form1" onsubmit="return form1Validate()" method="post"  action="Register_db.php">
            <table cellspacing="10px">
                <tr>
                    <td><input type="text" placeholder="   Your name" name="urName" value="" class="area" size="35px"> </td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="   Email" name="email" value="" class="area" size="35px"> </td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="   Password" id="pd" value="" class="area" size="35px"> </td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="   Re type password" id="cpd" value="" class="area" size="35px"> </td>
                </tr>

                <td><input type="submit" name="sUp" value="Sign Up" class="button" size="35px"></td>
                </tr>
                <tr>
                    <td><a href=""><p align="center">Forgot Password?</p></a> </td>
                </tr>
            </table>
        </form>


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