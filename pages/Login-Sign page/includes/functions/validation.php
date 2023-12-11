<?php 
session_start();

$error = [];
if($_SERVER['REQUEST_METHOD']== 'POST'){
 $firstName =  htmlspecialchars($_POST['firstName']);
 "<br>";
$lastName =   htmlspecialchars($_POST['lastName']);
 "<br>";
 $email =  htmlspecialchars($_POST['email']);       
 "<br>";
 $lawyerCategry =  htmlspecialchars($_POST['lawyer-categry']);       
 "<br>";
 $user_number=  htmlspecialchars($_POST['user_number']);       
 "<br>";
$user_idintity =  htmlspecialchars($_POST['user_idintity']);       
 "<br>";
$password =  htmlspecialchars(sha1($_POST['password']));       
 "<br>";
  $numLess = 5 ;// less than 
        $numMore = 30 ;// less than 

                  if(empty($firstName)){
                        $error['userName']='The Name Ca\'n Be Empty ';
                  }elseif(strlen($firstName) <   $numLess ){
                    $error['userName']='The name Ca\'t Be Less Than ' . $numLess;
                  }elseif(strlen($firstName) > $numMore){
                    $error['userName']='The name Ca\'t Be More Than ' . $numMore;
                  }
                  if(empty($lastName)){
                        $error['lastName']='The Last Name Ca\'n Be Empty ';
                  }elseif(strlen($lastName) <   $numLess ){
                    $error['lastName']='The Last Name Ca\'t Be Less Than ' . $numLess;
                  }elseif(strlen($lastName) > $numMore){
                    $error['lastName']='The Last Name Ca\'t Be More Than ' . $numMore;
                  }
                  if(empty($email)){
                        $error['email']='The  email Ca\'n Be Empty ';
                  }
                  if(empty($user_idintity)){
                        $error['user_idintity'] = 'The ID Ca\'n Be Empty';
                  }

                  if(empty($error)){
                    $checkEmail= checkedData('email','users',$email);
                    if($checkEmail){
                      $error['email']='This Email Is Exist ';
                    }else{
                        $dataInsert=$con->prepare("INSERT INTO `users`( `userName`, `lastName`, `email`, `phoneNumber`, `idintity`, `password`, `Role`) 
                        VALUES ('$firstName','$lastName','$email','$user_number','$user_idintity','$password','user')");
                        $dataInsert->execute();
                          $_SESSION['user'] = [
                            'userName'=>$firstName,
                            'lastName'=>$lastName,
                            'email'=>$email,
                    
                
                        ];
                            header('Location:../../index.php');
                         
                    }
                  }

               


                
}



?>