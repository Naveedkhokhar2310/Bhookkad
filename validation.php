<?php
session_start();
error_reporting(0);
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'art');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $password2 = $_POST['password'];
    $comfirmp = $_POST['confirmp'];
    
    $s = "select* from signin where email='$email' && pass='$password2'";

    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

    if($num==1)
    {
        header ('location:recipes.html');

    }
    else
    {
       echo " Email id and Password doesn't match", "<br>";
       echo " Try Again";
       header ('location:login.php');


    }





?>