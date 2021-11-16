<?php 
//error_reporting(0);
if(isset($_POST['name'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "art";

$conn =mysqli_connect($servername,$username,$password,$dbname);

if ($conn)
{
    echo "";
}
else
{
    die("Connection Failed because".mysqli_connect_error());
}


if($_POST['submit'])
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $password2 = $_POST['password'];
    $confirmp = $_POST['confirmp'];

    $s = "select* from signin where email='$email'";

    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);

   // $check_mobno = "SELECT FROM 'signin' WHERE mobno='$mobno'";
   // $check_email = "SELECT FROM 'signin' WHERE email='$email'";

    if($name==null && $email==null && $mobno==null && $password2==null && $confirmp==null)
    {
        echo "All Fields are required";
        
    }
    else
    { 
        if ($num==1)

        $query= "INSERT INTO signin ('name','email','mobno','password','confirmp') VALUES ($name,$email,$mobno,$password2,$confirmp)";
       $data= mysqli_query($conn,$query);
            
        if($data==true)
        {
            echo "Data Inserted into Database";
        }
        else{
            echo "data not inserted";
        }
       // if(mysqli_num_rows($check_mobno != 0) && mysqli_num_rows($check_email) != 0)
         //   {
          //  echo "Username/Email already exists";
           // }
           // if($password2!=$confirmp)
           // {echo "Enter correct password";
           // }
       }
        
        
    }

}



?>