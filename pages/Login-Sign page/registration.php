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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login page</title>
    <link rel="stylesheet" href="registration-style.css" />
    <script
      src="https://kit.fontawesome.com/bbda8ae88d.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container-login">
      <div class="wrapper-login">
        <div class="left-si">
          <figure>
            <img
              src="logo.svg"
              alt="Lawyer Case"
            />
            <figcaption>Lawyer Case</figcaption>
          </figure>
        </div>
        <div class="right-si">
          <div class="header-ri">
            <button id="signup-btn" class="active">Signup</button>
            <span>/</span>
            <button id="login-btn">Login</button>
          </div>
          <form
            action="<?php echo $_SERVER['PHP_SELF']; ?>"
            method="POST"
            id="signup-form"
          >
            <div class="full-name">
              <div class="user-fn-box">
                <input
                  type="text"
                  maxlength="15"
                  name="firstName"
                  required
                  oninvalid="this.setCustomValidity('ادخل الاسم الاول')"
                  oninput="this,setCustomValidity('')"
                />
                <label>الاسم الاول</label>
              </div>
              <div class="user-ln-box">
                <input
                  type="text"
                  maxlength="15"
                  name="lastName"
                  required
                  oninvalid="this.setCustomValidity('ادخل الاسم العائلة')"
                  oninput="this,setCustomValidity('')"
                />

                <label>اسم العائلة</label>
              </div>
            </div>
            <!-- <div class="user-name">
              <div class="user-name-box">
                <input type="text" name="user-name-sign" required />
                <label>اسم المستخدم</label>
              </div>
            </div> -->
            <div class="email-name">
              <div class="email-name-box">
                <input
                  type="email"
                  name="email"
                  required
                  oninvalid="this.setCustomValidity('الرجاء تضمين @ بعد اسم البريد الإلكتروني')"
                  oninput="this,setCustomValidity('')"
                />
                <label>عنوان البريد الالكترونى</label>
                <?php if(isset( $error['email'])){  echo "<sapn>" .  $error['email']."</sapn>" ;}; ?> <!-- This Is Error If Email Exists -->
              </div>
            </div>
            <div class="user-kind">
              <div class="user-content">
                <span>النوع :</span>
                <input
                  class="active-kind"
                  name="user"
                  id="user-kind"
                  value="مواطن"
                  readonly
                />
                <input id="lawyer-kind" value="محامى" readonly />
              </div>
              <div class="lawyer-categry">
                <select name="lawyer_categry" id="lawyer-categry-sel">
                  <option value="" selected>اختر التخصص</option>
                  <option value="محامى أسرة">محامى أسرة</option>
                  <option value="محامى مجلس الدولة">محامى مجلس الدولة</option>
                  <option value="محامى تجارى و شريكات">
                    محامى تجارى و شريكات
                  </option>
                  <option value="محامى عمال">محامى عمال</option>
                  <option value="محامى جنائى">محامى جنائى</option>
                  <option value="محامى مدنى">محامى مدنى</option>
                  <option value="محامى قضاء عسكرى">محامى قضاء عسكرى</option>
                  <option value="محامى جرائم الكترونية">
                    محامى جرائم الكترونية
                  </option>
                </select>
              </div>
            </div>

            <div class="user-num">
              <div class="user-num-box">
                <input
                  type="text"
                  maxlength="12"
                  name="user_number"
                  required
                  oninvalid="this.setCustomValidity('ادخل ادخل رقم الهاتف')"
                  oninput="this,setCustomValidity('')"
                />
                <label>رقم الهاتف</label>
              </div>
            </div>

            <div class="user-id">
              <div class="user-id-box">
                <input
                  type="text"
                  maxlength="13"
                  name="user_idintityuser_number"
                  required
                  oninvalid="this.setCustomValidity('ادخل رقم الهوية الشخصية')"
                  oninput="this,setCustomValidity('')"
                />
                <label>رقم الهوية الشخصية</label>
              </div>
            </div>

            <div class="user-pass">
              <div class="user-pass-box">
                <input
                  type="password"
                  minlength="8"
                  name="password"
                  name="user-pass-sign"
                  id="password_sign"
                  required
                  oninvalid="this.setCustomValidity('ادخل كلمة السر التى سوف تكون بحسابك')"
                  oninput="this,setCustomValidity('')"
                />
                <i class="fa-regular fa-eye" id="show_pass_sign"></i>
                <i
                  class="fa-regular fa-eye-slash"
                  id="hide_pass_sign"
                  style="display: none"
                ></i>
                <label>كلمة السر</label>
              </div>
            </div>
            <div class="user-submit">
              <button type="submit" id="sub-signBtn">انشاء حساب</button>
              <span class="spa-rt"
                >هل أنت مشترك بالفعل في Lawyer Case ؟<span id="spa-login">
                  تسجيل الدخول</span
                ></span
              >
            </div>
          </form>

          <form
            action="includes/functions/login.php"
            method="POST"
            id="login-form"
          >
            <div class="email-name">
              <div class="email-name-box">
                <input
                  type="email"
                  name="email_login"
                  required
                  oninvalid="this.setCustomValidity('الرجاء تضمين @ بعد اسم البريد الإلكتروني')"
                  oninput="this,setCustomValidity('')"
                />
                <label>عنوان البريد الالكترونى</label>
              </div>
            </div>

            <div class="user-pass">
              <div class="user-pass-box">
                <input
                  type="password_login"
                  minlength="8"
                  name="password_login"
                  name="user-pass-login"
                  id="password_login"
                  required
                  oninvalid="this.setCustomValidity('ادخل كلمة السر الخاصة بك')"
                  oninput="this,setCustomValidity('')"
                />
                <i class="fa-regular fa-eye" id="show_pass_login"></i>
                <i
                  class="fa-regular fa-eye-slash"
                  id="hide_pass_login"
                  style="display: none"
                ></i>
                <label>كلمة السر</label>
              </div>
            </div>

            <div class="user-submit">
              <button type="submit" id="sub-loginBtn">تسجيل الدخول</button>
              <span class="spa-rt"
                >لست عضوا فى Lawyer Case ؟<span id="spa-sign">
                  سجل الان</span
                ></span
              >
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="registration-script.js"></script>
  </body>
</html>
