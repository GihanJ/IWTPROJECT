<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/14/17
 * Time: 12:22 AM
 */?>

    <!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>

    <link rel="stylesheet" href="style.css">
    <script language="JavaScript" type="text/javascript" src="validation.js"></script>

    <style>
        #container{

            height: 1000px;
        }

        #header{
            height: 28%;
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
        <font color="white" style="font-family:'Good Times';float: left;font-size: 75px" > EXO<br>LEISURE</font></a>

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
        <h1>Sign In</h1>
        <h2>Welcome Back!</h2>

        <form name="form3" method="post" action="login_db.php">
            <table cellspacing="10px">
                <tr>
                    <td><input type="text" placeholder="   Username/Email" name="urName" value="" class="area" size="35px"> </td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="   Password" id="pd" value="" class="area" size="35px" name="pd"> </td>
                </tr>
                <tr>
                    <td><input type="submit" name="sIn" value="Sign In"  size="35px" class="button" > </td>
                </tr>
                <tr>
                    <td><a href="SignUp.html"> <input type="submit" name="sUp" value="Sign Up" class="button" size="35px" style="background-color: white; border-color: #aa8dd2;color:#aa8dd2" > </a></td>
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
</html><?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/17/2017
 * Time: 1:34 AM
 */