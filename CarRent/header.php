<?php
session_start();
?>
<body
    style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-image: url('bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">

    <div class="container">
<h1 class="site-title" style="text-align: center; color: green;">Car Rental System</h1><br>
      

        <br>
        
            <div class="container-fluid">
                
                <div align="center">
                    
                    <?php
                    if(isset($_SESSION['username']) )
                    {
                      echo '<a style="background-color: red;" href="logout.php">Logout</a>';
                    }
                    else{
                        echo '<a style="background-color: greenyellow;" href="login.php">Login</a>';
                    }
                    ?>
                    <a style="background-color: greenyellow;" href="register.php">Register</a>
                    <a style="background-color: greenyellow;" href="about.php">About us </a>
                    <a style="background-color: greenyellow;" href="contactus.php">Contact us</a>
                    <a style="background-color: greenyellow;" href="job.php">Looking for a job?</a>
                </div>
            </div>