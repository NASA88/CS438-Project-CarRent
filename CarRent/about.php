<html>
<head> 


  <title>About us</title>
  <meta charset = "utf-8">
  <style>
    * {
            margin:0;
            padding:0;
            overflow-x: hidden;
        }
  
        :root {
            --navbar-height: 59px;
        }
        .logo {
            width: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
  
        .logo img {
            width: 33%;
            border: 2px solid white;
            border-radius: 50px;
        }
  
        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            cursor: pointer;
        }
  
        .nav-list {
            width: 70%;
            display: flex; 
        }
  
        .nav-list li {
  
            list-style: none;
            padding: 2px 6px;
        }
  
        .nav-list li a {
  
            text-decoration: none;
            color: white;
        }
  
        .nav-list li a:hover {
            color: grey;
        }
  
        .rightNav {
            width: 50;
            text-align: right;
        }
  
        #search {
            padding: 5px;
            font-size: 17px;
            border: 2px solid grey;
            border-radius: 9px;
        }
  
        .background {
            background: grey;
            background-blend-mode: darken;
            background-size: cover;
        }
  
        .firstsection {
            height: 100vh;
        }
  
        .box-main {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            max-width: 50%;
            margin: auto;
            height: 80%;
        }
  
        .firstHalf {
            width: 75%;
            display: flex;
            flex-direction: column; 
            justify-content: center
        }
  
        .firstHalf img {
            display: flex;
            border-radius: 9050px;
        }
  
        .text-big {
            font-family: 'Piazzolla', serif;
            font-weight: bold;
            font-size: 41px;
            text-align: center;
        }
  
        .text-small {
            font-family: 'Sansita Swashed', cursive;
            font-size: 18px;
            text-align: center;
        }
  
        #service {
            margin: 34px;
            display: flex;
        }
  
        #service .box {
            padding: 100px;
            margin: 3px 6px;
            border-radius: 28px;
        }
  
        #service .box img {
            margin-top: 10px;
            height: 150px;
            margin: auto;
            display: block;
            border-radius: 200px;
        }
  
        #service .box p {
  
            font-family: sans-serif;
            text-align: center;
        }
  
        #services {
            margin: 34px;
            display: flex;
        }
  
        #services .box {
  
            padding: 100px;
            margin: 3px 6px;
            border-radius: 28px;
        }
  
        #services .box img {
            margin-top: 10px;
            height: 150px;
            margin: auto;
            display: block;
            border-radius: 100px;
        }
  
        #services .box p {
  
            font-family: sans-serif;
            text-align: center;
        }
  
        .btn {
            padding: 8px 20px;
            margin: 7px 0;
            border: 2px solid white;
            border-radius: 8px;
            background: none;
            color: white;
            cursor: pointer;
        }
  
        .btn-sm {
            padding: 6px 10px;
            vertical-align: middle;
        }
  
        .center {
            text-align: center;
        }
  
        .text-footer {
            text-align: center;
            padding: 10px 0;
            font-family: 'Ubuntu', sans-serif;
            display: flex;
            justify-content: center;
        }
        @media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
        }
  </style>

  <script src="time.js"></script>  


</head>



<body>
   

<nav class="navbar background">
        <ul class="nav-list">
        
            <li><a href="login.php">Log in </a></li>
            <li><a href="register.php">Register </a></li>
            
            <li><a href="contactus.php">Contact Us</a><li>
        </ul>
       
    </nav>
    <section class="background firstsection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">About US</p>
                  
                <p class="text-small">
                    Here you will get to know the team
                    members of our Project
                </p>


                <p> Our website page is about car rental system , so the emploeey can add manuele the person who 
                    drove the car 
                </p>
                <br>
        
                
            </div>
        </div>
    </section>
    <section class="service">
        <h1 class="h-primary center" style="margin-top:30px;text-align:center;">
            Our Team
        </h1>
    <div id="services">
            <div class="box">
            <img src="mb.png" alt="">
              
                <p class="center">
                    <a href="#xyz" style="text-decoration:none;color:black;font-weight:bold;font-family: 'Langar', cursive;">
                        Abdulmalik
                    </a>

                    <p> been handling the sql and some of the html and css </p>
                </p>
            </div>
            <div class="box">
                <img src="mb.png" alt="">
                  
                <p class="center">
                    <a href="#abc" style="text-decoration:none;color:black; font-weight:bold;font-family: 'Langar', cursive;">
                      Nasser 
                    </a>
                    <p> been handling sql and some of the html and css </p>
                </p>
                  
                
            </div>
            <div class="box">
                <img src="mb.png" alt="">
                <br>
                <p class="center">
                    <a href="#xyz" style="text-decoration:none;color:black;font-weight:bold;font-family: 'Langar', cursive;">
                       Abdulelah 
                    </a>
                    <p> been handling the html and css </p>
                </p>
                
  
            </div>
        </div>
      
    </section>

<footer class = "background"> 
 <h5> &copy All right reserved by A.N.A </h5>
 
 <p id="demo"></p>


</footer>

</body>

</html>