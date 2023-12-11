  <?php 
  include('../../init/init.php');
  
  $pageTitle ='Lawyer Case';
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php getTitle()?></title>
    <link rel="stylesheet" href="registration-style.css" />
  </head>
  <body>
    <div class="container-login">
      <div class="wrapper-login">
        <div class="left-si">
          <figure>
            <img
              src="../../asstes/Imges/Judiciary logo svg.svg"
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
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="signup-form" >
            <div class="full-name">
              <div class="user-fn-box">
                <input
                  type="text"
                  maxlength="15"
                  name="firstName"
                  required
                  value="
                    <?php if(isset($_POST['firstName'] )){  echo $_POST['firstName']; }; ?>
                  "
                  oninvalid="this.setCustomValidity('ادخل الاسم الاول')"
                  oninput="this,setCustomValidity('')"
                />
                <label>الاسم الاول</label>
              <!-- This Is Error Whene Start Validate UserName  -->
             <?php if(isset($error['userName'])){echo 
             "<p class='error'>" .$error['userName']."</p>";
              }?> 
             <!-- This Is Error Whene Start Validate UserName  -->

              </div>
              <div class="user-ln-box">
                
                <input
                  type="text"
                  maxlength="15"
                  name="lastName"
                  value=
                  "
                  <?php if(isset($_POST['lastName'] )){  echo $_POST['lastName']; }; ?>
                  "
                  required
                  oninvalid="this.setCustomValidity('ادخل الاسم العائلة')"
                  oninput="this,setCustomValidity('')"
                />
                
                <label>اسم العائلة</label>
                <?php if(isset($error['lastName'])){echo 
             "<p class='error'>" .$error['lastName']."</p>";
              }?> 
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
                  value=
                  "
                  <?php if(isset($_POST['email'] )){  echo $_POST['email']; }; ?>
                  "
                  oninvalid="this.setCustomValidity('الرجاء تضمين @ بعد اسم البريد الإلكتروني')"
                  oninput="this,setCustomValidity('')"
                />
                <label>عنوان البريد الالكترونى</label>
                <?php if(isset($error['email'])){echo 
             "<p class='error'>" .$error['email']."</p>";
              }?> 
              </div>
            </div>
            <div class="user-kind">
              <div class="user-content">
                <span>النوع :</span>
                <span class="active-kind" id="user-kind">مواطن</span>
                <span id="lawyer-kind">محامى</span>
              </div>
              <div class="lawyer-categry">
                <select name="lawyer-categry" id="lawyer-categry-sel">
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
                  value=
                  "
                  <?php if(isset($_POST['user_number'] )){  echo $_POST['user_number']; }; ?>
                  "
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
                  name="user_idintity"
                  required
                  value=
                  "
                  <?php if(isset($_POST['user_idintity'] )){  echo $_POST['user_idintity']; }; ?>
                  "
                  oninvalid="this.setCustomValidity('ادخل رقم الهوية الشخصية')"
                  oninput="this,setCustomValidity('')"
                />
                <label>رقم الهوية الشخصية</label>
                <?php if(isset($error['user_idintity'])){echo 
             "<p class='error'>" .$error['user_idintity']."</p>";
              }?> 
              </div>
            </div>

            <div class="user-pass">
              <div class="user-pass-box">
                <input
                  type="password"
                  minlength="8"
                  name="password"
                  required
                  oninvalid="this.setCustomValidity('ادخل كلمة السر التى سوف تكون بحسابك')"
                  oninput="this,setCustomValidity('')"
                />
                <label>كلمة السر</label>
              </div>
            </div>
            <div class="user-submit">
              <button type="submit" id="sub-btn">انشاء حساب</button>
              <span class="spa-rt"
                >هل أنت مشترك بالفعل في Lawyer Case ؟<span id="spa-login">
                  تسجيل الدخول</span
                ></span
              >
            </div>
          </form>

          <form action="includes/functions/login.php" method="POST" id="login-form">
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
                  required
                  oninvalid="this.setCustomValidity('ادخل كلمة السر الخاصة بك')"
                  oninput="this,setCustomValidity('')"
                />
                <label>كلمة السر</label>
              </div>
            </div>

            <div class="user-submit">
              <button type="submit" id="sub-btn">تسجيل الدخول</button>
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
    <script src="../../asstes/js/registration-script.js"></script>
  </body>
</html>
