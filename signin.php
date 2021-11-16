<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Register on Bhookkad</title>
    <style> 
    *{
        font-family: verdana;

    }
    body {
        padding: 24px;
    }  
    div .formdiv {
        padding: 56px 96px;
        position:absolute;
        top: 10%;
        left: 30%;
        border: solid black 3px ;
        border-radius: 12px;
        font-size: 20px;
    } 

    .submitbtn{
        height: 34px;
        width: 125px;
        color: white;
        background-color: green;
        border: solid black 1px;
        border-radius: 4px;
        cursor: pointer;



    }   
    input {
        width:200px;
        height: 30px;
    }   

    input:after {
         content:"*";
     } 
     #submitbtn {
         font-size:20px;
     }                   


    </style>
</head>
<body>
    <div class="signimg">
        <div>
    <div class="formdiv">
        <h1> Register on Bhookkad</h1>
        <form action="registrationnew.php" method="POST" name="Sign-in Form">
         <!--   <table align="center" cellspacing="20" cellpadding="20">
                <tr>
    
                   <b> <td class="labels">-->
                       
                        <lable for="name">Name</lable> <br>
                        <input type="text" id="name" name="name" placeholder="Enter Your Name" required /><br><br>
                       <!-- Gender <br><br>-->
                        <lable for="email">Email</lable> <br>
                        <input type="email" id="email" name="email" placeholder="xyz@mail.com" required /><br><br>
                        <lable for="mobno">Mobile Number</lable> <br>
                        <input type="number" id="mobno" name="mobno" placeholder="Enter Mobile No."  required /><br><br>
                        <lable for="passward">Passward</lable> <br>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required /><br><br>
                       
                        <input type="submit" name="submit" id="submitbtn" class="submitbtn" value="Register"/>
                        <p> Already a user ? <a id="loginlink" href="login.php" method=""> Login</a></p>
                         <!--- </td></b>
    
    
                         <td class="inputs"> <br><br><br><br> <br> 
                             <input type="text" id="name" placeholder="Enter Your Name" "/><br><br>
                            <input type="radio" name="gender" />Male
                             <input type="radio" name="gender"/>Female
                             <input type="radio" name="gender"/>Other <br><br>
                             <input type="email" id="email" placeholder="xyz@mail.com" "/><br><br>
                             <input type="number" id="mobno" placeholder="Enter Mobile No." "/><br><br>
                             <input type="password" id="passward" placeholder="Enter Password" "/><br><br>
                             <input type="password" id="confrimp" placeholder="Re-enter Password" " /><br><br>
                             <input type="submit" id="submitbtn" value="Register"/>-->
                      <!---   </td>
                </tr>
            </table>-->
            
    
        </form>
        </div>
        </div>
        </div>
    
    
</body>
</html>