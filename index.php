<?php 
session_start();
if(isset($_SESSION['user'])){
   
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello Mr <?php echo $_SESSION['user']['userName'] . $_SESSION['user']['lastName'] ;?>
    <br>
    <br>
    Hello Your Email Is  <?php print_r($_SESSION['user']['email']) ;?>
    <a href="loguot.php">LogOut</a>
</body>
</html>






<?php
}else{
    header('Location: pages/Login-Sign page/registration.php');
    exit();
}

?>
