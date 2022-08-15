<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","mysite");

if(!isset($_SESSION['username']) )
{
  header("location:login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>

<body align="Center"
    style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-image: url('bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">

    <div class="container">
        <hgroup>
            <h1 class="site-title" style="text-align: center; color: green;">Car Rent System</h1><br>
        </hgroup>

        <br>


        <main class="main-content">
            <div class="col-md-6 col-md-offset-4">
                <?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
                <h1>Control Panel</h1>
                <div>
                    <h4>Welcome : <?php echo $_SESSION['username']; ?></h4>
                    <div align="center">
                        <a style="background-color: red;" href="logout.php">Log Out</a>
                        <a style="background-color: greenyellow;" href="contactus.php">Contact us</a>
                        <a style="background-color:greenyellow ;" href="time.php">Digital Clock</a>
                        
                    

                    </div>
        </main>
    </div>

    <?php
if($db)
{
  if(isset($_POST['addbtn']))
  {
      $driver=mysqli_real_escape_string($db,$_POST['driverName']);
      $carCompany=mysqli_real_escape_string($db,$_POST['carCompany']);
      $carName=mysqli_real_escape_string($db,$_POST['carName']);
      $carModel=mysqli_real_escape_string($db,$_POST['carModel']);
      $pickDate=mysqli_real_escape_string($db,$_POST['pickDate']);
      $returnDate=mysqli_real_escape_string($db,$_POST['returnDate']);


      $sql="INSERT INTO info(driverName, carCompany, carName, carModel , pickDate , returnDate) VALUES('$driver','$carCompany','$carName','$carModel' , '$pickDate' , '$returnDate')"; 
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
        echo "<div align='center' style='background-color:green; width: fit-content;  margin-left: 825px;'><h3 align='center'> Data Added Succesfully</h3></div>";
      }
  }
}
?>
    <style>
      body{
        
        background-image: url(bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    
    }
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

    table {
        border-collapse: collapse;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #04AA6D;
        color: ghostwhite;
        
    }

 
    </style>

    <div align="center">
        <br>
        <table name="Drivers details" width="500" align="center" border="1">
            <tr>
                <th>Driver Name</th>
                <th>Car Company</th>
                <th>Car Name</th>
                <th>Car Model</th>
                <th>Pick up Date</th>
                <th>Return Date</th>
            </tr>
            <?php
            $sql = "SELECT `driverName`, `carCompany`, `carName`, `carModel` , `pickDate`, `returnDate`FROM `info`";
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr">';
                    echo '<td>'. $row['driverName'] .'</td>';
                    echo '<td>'. $row['carCompany'] .'</td>';
                    echo '<td>'. $row['carName'] .'</td>';
                    echo '<td>'. $row['carModel'] .'</td>';
                    echo '<td>'. $row['pickDate'] .'</td>';
                    echo '<td>'. $row['returnDate'] .'</td>';
                    echo '</tr>';
                }
            }
        ?>
        </table>
        <br>
    </div>

    <div align="Center">
        <form method="post" action="home.php">
            <label for="driverName">Driver name:</label><br>
            <input type="text" id="driverName" name="driverName" required><br>

            <label for="carCompany">Car Company:</label><br>
            <input type="text" id="carCompany" name="carCompany" required><br>

            <label for="carName">Car name:</label><br>
            <input type="text" id="carName" name="carName" required><br>

            <label for="carModel">Car Model:</label><br>
            <input type="number" id="carModel" name="carModel" min="2010" max="2023" required><br><br>

            <label for="pickDate">Pick up Date</label>
            <input type="date" name="pickDate" id="pickDate"><br><br>

            <label for="returnDate">Return Date</label>
            <input type="date" name="returnDate" id="returnDate"><br><br>



            <input type="submit" name="addbtn" value="Add">

        </form>

       
            
        </form>

        <form method="post" action="home.php">
            <br>
            <label for="driverName">Driver name to delete:</label><br>
            <input type="text" id="driverName" name="driverName" required><br>

            <label for="carCompany">Car company name to delete:</label><br>
            <input type="text" id="carCompany" name="carCompany" required><br>

            <input type="submit" name="delbtn" value="Delete">
            <a style="background-color: greenyellow;" href="home.php">Refresh Page</a>
        </form>

        <?php
if($db)
{
  if(isset($_POST['delbtn']))
  {
      $driver=mysqli_real_escape_string($db,$_POST['driverName']);
      $carCompany=mysqli_real_escape_string($db,$_POST['carCompany']);

      $sql="DELETE FROM `info` WHERE `driverName` = '$driver' AND `carCompany` = '$carCompany'"; 
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
        echo "<div align='center' style='background-color:grey; width: fit-content;  margin-left: 825px;'><H3 align='center'> Data Deleted Succesfully</H3></div>";
      }
  }
}
?>

    </div>
    <h5> &copy All right reserved by A.N.A </h5>
 
    <p id="demo"></p>

</body>

</html>