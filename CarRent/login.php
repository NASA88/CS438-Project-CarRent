<?php

include 'head.php';
include 'header.php';


//connect to database

$db=mysqli_connect("localhost","root","","mysite");
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      
      $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['username']=$username;
            header("location:home.php");
        }
       else
       {
              $_SESSION['message']="Username or Password are incorrect, try again.";
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
  
                <?php
    if(isset($_SESSION['message']))
    {
         echo "<div align='center' style='background-color:red'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
                <form method="post" action="login.php">
                    <br>
                    <table width="400" align="center">
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username" class="textInput"></td>
                        </tr>
                        <tr>
                            <td>Password : </td>
                            <td><input type="password" name="password" class="textInput"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="login_btn" class="Log In" value="Login"></td>
                        </tr>

                    </table>
                </form>
            </div>

        </main>
    </div>
    <h5> &copy All right reserved by A.N.A </h5>
 
    <p id="demo"></p>


</body>

</html>