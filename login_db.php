<?php
require("db_connect.php");
session_start();


$userName=$_POST['urName'];
$passWord=$_POST['pd'];
$passWord=md5($passWord)
;



echo $userName.$passWord;
if(isset($_POST["sUp"])) {

    $query = "SELECT * FROM Register WHERE Username='$userName' AND Password='$passWord'";
    $res = mysql_query($query);
    $rows = mysql_num_rows($res);

    echo $rows;
    if ($rows == 1) {
        $_SESSION['cname'] = $userName;
        header("Location:Home.php ");

    } else {
        echo "<script> ";
        echo "alert('Username or Password is incorrect');";
        echo "window.location.href = 'Login.php';";
        echo "</script>";

    }
}
?>