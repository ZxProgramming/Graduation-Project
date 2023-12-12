<?php
session_start();
if(isset($_SESSION['lawyer'])){
    $dataJson =  json_encode($_SESSION['lawyer']); // Your Data Json
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
      <h1>Welcome To Lawyer</h1>
      <?php
      if(isset($_SESSION['lawyer'])){
          echo  "Hello Lwayer :".  $_SESSION['lawyer']['userName'] . ' ' . $_SESSION['lawyer']['lastName'];
            echo "<br>";
          echo " Your Email Is  :".     $_SESSION['lawyer']['email'];
            echo "<br>";
            echo "Your Idintity  :".    $_SESSION['lawyer']['idintityUser'];
            echo "<br>";
            echo  "Hello Your Phone Number :".   $_SESSION['lawyer']['user_number'];
            echo "<br>";
            echo   "Your Role Is  :".   $_SESSION['lawyer']['Role'];

      }
      ?>


  </body>
</html>
<?php 
}else{ // This Else IF Any One Don't Login Redirect Login
    header("Location:../Login-Sign page/registration.php");
}
?>