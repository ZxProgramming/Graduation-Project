<?php
session_start();
if(isset($_SESSION['UserName'])){
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lawyer Case</title>
    <link rel="stylesheet" href="users-style.css" />
  </head>
  <body>
      <h1>Welcome To User</h1>
<?php

if(isset($_SESSION['user'])){
  echo  "Hello user :".  $_SESSION['user']['userName'] . ' ' . $_SESSION['user']['lastName'];
    echo "<br>";
  echo " Your Email Is  :".     $_SESSION['user']['email'];
    echo "<br>";
    echo "Your Idintity  :".    $_SESSION['user']['idintityUser'];
    echo "<br>";
    echo  "Hello Your Phone Number :".   $_SESSION['user']['user_number'];
    echo "<br>";
    echo   "Your Role Is  :".   $_SESSION['user']['Role'];

}
?>

  </body>
</html>
<?php 
}else{
  echo "Not User  Login";

    header("Location:../Login-Sign page/registration.php");
}
?>