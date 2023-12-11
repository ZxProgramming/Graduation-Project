<?php





if($_SERVER['REQUEST_METHOD']== 'POST'){

   @$email_login =  htmlspecialchars($_POST['email_login']);       
    "<br>";
     @$password_login=  htmlspecialchars(sha1($_POST['password_login']));      
  }





















?>