 <?php

 require ("db_connect.php");

if(isset($_POST["urName"]) && isset($_POST["email"])&& isset($_POST["pd"])&& isset($_POST["cpd"])){
    $user=$_POST["urName"];
    $email=$_POST["email"];
    $pass=$_POST["pd"];
    $cpass=$_POST["cpd"];

    $pass=md5($pass);

    echo "Successfully values collected from form.html";
}
else{
    $error = "One or more fields are not allowed";
    echo $error;


}


if(isset($_POST["sUp"])){

    $insertString = "INSERT INTO  SignUp VALUES ('$user','$email','$pass','$cpass')";

    if (!mysql_query($insertString)){
        echo "error";
    }
    else{
        echo"1 record added";


        echo "<script> ";
        echo "alert('Your Account Has Been Created Successfully!');";
        echo "window.location.href = 'Login.php';";
        echo "</script>";

    }
}
?>

