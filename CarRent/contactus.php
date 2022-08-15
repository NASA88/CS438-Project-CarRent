
<html>
<head> 
    <meta charset = "utf-8">
  <style>
    body{

      
        
        background-image: url(bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    
    
    }
    input[type=text], select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */ 
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
  }
  
  /* Style the submit button with a specific background color etc */
  input[type=submit] {
    background-color: grey;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  /* When moving the mouse over the submit button, add a darker green color */
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  /* Add a background color and some padding around the form */
  .container-c {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }


  .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  
  /* Display the columns below each other instead of side by side on small screens */
  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }
  
  /* Add some shadows to create a card effect */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }
  
  /* Some left and right padding inside the container */
  .container {
    padding: 0 16px;
  }
  
  /* Clear floats */
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .title {
    color: grey;
  }
  
  .buttona {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }
  
  .buttona:hover {
    background-color: #555;
  }

  </style>
  <script src="time.js"></script>
  <title>Contact us</title>

</head>


<body>

<div class="container-c">
  <form action="">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First name ">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder=" Last name..">

    <label for="City ">City</label>
    <select id="City" name="City">
      <option value="riyadh">Riyadh</option>
      <option value="jeddah">Jeddah</option>
      <option value="dammam">Dammam</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
    <h4> upload files </h4>
    <input type="file" name="CV" id="">
<footer> 
 <h5> &copy All right reserved by A.N.A </h5>
 
 <p id="demo"> </p>


</footer>
</body> 
</html>