<?php 
      session_start();
      include('../../init/init.php');
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
         
                  // If The Register Is User
        if(isset($_POST['user'])){
           $role= $_POST['user'];
           $firstName =htmlspecialchars($_POST['firstName']);
           $lastName =htmlspecialchars($_POST['lastName']);
           $email =htmlspecialchars($_POST['email']);
           $idintityUser =htmlspecialchars($_POST['user_idintityuser_number']);
           $user_number =htmlspecialchars($_POST['user_number']);
           $password =htmlspecialchars(md5($_POST['password']));
           
           $checkEmail= checkedData('email','users',$email);
           if($checkEmail){
             $error['email']='This Email Is Exist ';
           }else{
               $dataInsert=$con->prepare("INSERT INTO `users`( `userName`, `lastName`, `email`, `phoneNumber`, `idintity`, `password`, `Role`) 
               VALUES ('$firstName','$lastName','$email','$user_number','$idintityUser','$password','$role')");
               $dataInsert->execute();
                 $_SESSION['user'] = [
                   'userName'=>$firstName,
                   'lastName'=>$lastName,
                   'email'=>$email,
                   'idintityUser'=>$idintityUser,
                   'user_number'=>$user_number,
               ];
                   header('Location:../../pages/Users Page/users.php');
         }
        }

                  // If The Register Is Lawyer
         if(isset($_POST['lawyer'])){
   $role= $_POST['lawyer'];
          $firstName =htmlspecialchars($_POST['firstName']);
           $lastName =htmlspecialchars($_POST['lastName']);
           $email =htmlspecialchars($_POST['email']);
           $lawyer_categry = $_POST['lawyer_categry'];
           $idintityUser =htmlspecialchars($_POST['user_idintityuser_number']);
           $user_number =htmlspecialchars($_POST['user_number']);
           $password =htmlspecialchars(md5($_POST['password']));

           $checkEmail= checkedData('email','lawyer',$email);
           if($checkEmail){
             $error['email']='This Email Is Exist ';
           }else{
               $dataInsert=$con->prepare("INSERT INTO `lawyer`( `userName`, `lastName`, `email`, `phoneNumber`, `idintity`, `password`, `type`,`Role`) 
               VALUES ('$firstName','$lastName','$email','$user_number','$idintityUser','$password','$lawyer_categry','$role')");
               $dataInsert->execute();
                 $_SESSION['lawyer'] = [
                   'userName'=>$firstName,
                   'lastName'=>$lastName,
                   'email'=>$email,
                   'idintityUser'=>$idintityUser,
                   'user_number'=>$user_number,
                   'Role'=>$role,
               ];
          
              //  echo " <script>alert('Data Inserted')</script>";
                   header('Location:../../pages/Lawyers Page/lawyers.php');

         }
        }

      }
  
  ?>