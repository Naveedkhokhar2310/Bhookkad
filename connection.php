<?php 
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="art";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if ($conn)
{
    echo "ok";
}
else
{
    die("Connection Failed because".mysqli_connect_error());
}
?>
