<?php

//Connection to the database engine Establishing connection
  $conn = mysqli_connect("localhost","root","");
  if(!$conn){
   echo("Failed to connect");
  }else{
  echo("Connected successfully");
  }
  //Select a database or use
  mysqli_select_db($conn,"studee") or die("Could not connect");
  //receive form data and store in variable
  $User = $_POST['user'];
  $Pass = $_POST['pass'];

  //Executing a query to Insert data into the database anucorp
  $sel = mysqli_query($conn,"SELECT * FROM login_details WHERE username='$User' AND password ='$Pass'");
  $count = mysqli_num_rows($sel);
  if ($count == 1) {
    
    header("location:home.php");
  }else{   
   echo '<script type="text/JavaScript">  
     alert("Wrong Username or password!!");
     window.location.href="index.php";
     </script>';  
  }
  //close connection
  mysqli_close($conn);
?>