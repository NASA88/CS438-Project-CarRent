<html>
<head> 
    <meta charset = "utf-8">
    <title>Jobs</title>
    
    <script src="time.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background-image: url(bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Josefin Sans', sans-serif;
}

.wrapper{
  margin-top: 50px;
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: grey;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role {
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
}

img {
  border-radius: 50%;
}

    </style>
</head>



<body> 

<div class="wrapper">
  <h1>JOBS</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="hr.jpg" alt="Team_image">
      </div>
      <h3>HR Mangment</h3>
      <p class="role"><a href="contactus.php">For more details contact us </a></p>
     
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="bs.jpg" alt="Team_image">
      </div>
      <h3>Busniess mangment </h3>
      
      <p class="role"><a href="contactus.php">For more details contact us </a></p>
      
    </div>
</div>
<p id="demo"></p>


 <h5> &copy All right reserved by A.N.A</h5>
 





</body>

</html>