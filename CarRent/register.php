<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","mysite");

if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);  
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
              
                $sql="INSERT INTO users(username, email, password ) VALUES('$username','$email','$password')"; 
                mysqli_query($db,$sql);				
                $_SESSION['message']="You are now logged in"; 
                $_SESSION['username']=$username;
                header("location:home.php");  //redirect home page
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
            }
          }
      }
}
?>
<style>
a {
    font: bold 11px Arial;
    text-decoration: none;
    background-color: #EEEEEE;
    color: #333333;
    padding: 2px 6px 2px 6px;
    border-top: 1px solid #CCCCCC;
    border-right: 1px solid #333333;
    border-bottom: 1px solid #333333;
    border-left: 1px solid #CCCCCC;
}
</style>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body
    style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-image: url('bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">

    <div class="container">
        <hgroup>
            <h1 class="site-title" style="text-align: center; color: green;">Car Rent System</h1><br>
        </hgroup>

        <br>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div align="center">
                    <a style="background-color: greenyellow; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"
                        href="login.php">Login</a>
                    <a style="background-color: greenyellow; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"
                        href="contactus.php">Contact us </a>
                </div>
            </div>
        </nav>


        <main class="main-content">

            <div class="col-md-6 col-md-offset-2">

                <?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
                <form method="post" action="register.php">
                    <table width="400" align="center">
                        <br>
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username" class="textInput"></td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td><input type="email" name="email" class="textInput"></td>
                        </tr>
                        <tr>
                            <td>Password : </td>
                            <td><input type="password" name="password" class="textInput"></td>
                        </tr>
                        <tr>
                            <td>Repeat Password : </td>
                            <td><input type="password" name="password2" class="textInput"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="register_btn" class="Register" value="Register"></td>
                        </tr>
                    </table>

                </form>
            </div>

        </main>
    </div>

</body>

</html>