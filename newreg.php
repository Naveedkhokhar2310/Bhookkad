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
    
    $s = "select* from signin where email='$email'";

    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

    if(($name == null) && ($email == null) && ($mobno == null) && ($password2 == null) && ($confirmp == null))
    {
        echo "Please fill all required values";
    }

    elseif($num==1)
    {
        echo" User already taken";

    }
    else
    {
        $reg= "insert into signin (name,email,mobno,pass,confirmp) values('$name','$email','$mobno','$password2','$comfirmp')";

        mysqli_query($con,$reg);
        echo "registration successfull";



    }





?>