<?php
// use UI\Controls\Check;
session_start();
 include("function.php");
 include("connection.php");
if($_SERVER['REQUEST_METHOD'] =="POST")
{
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
  {
      //save to database

      $user_id = random_num(20);

      $query = "insert into users(user_id, user_name, password)values('$user_id',' $user_name','$password')";
      mysqli_query($con,$query);
      header("Location:login.php");
      die;

  }else{
      echo"please enter valid information";
  }

}
 



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
  <style type= "text/css">
      #button{
          padding:10px;
          width:50%;
          color:white;
          background-color:lightblue;
          border:none;
          }
          #text{
              height:25px;
              border-radius:5px;
              padding:4px;
              border:solid thin aqua;



          }
          #box{
          background-color:grey;
          margin:auto;
          padding:10px;
          width:300px;

              
          }

  </style>
<div id="box">
<form method="POST">
  <div style ="font-size:20px; margin:10px; color:white;">Login</div>
    <input id="text" type="text" name="user_name" > <br> <br>
    <input id="text" type="password" name="password" > <br> <br>
    <input  id="text" type="submit" value="Signup" > <br> <br>
    <a href="login.php">Login</a>
   </form>
</div>





</body>
</html>