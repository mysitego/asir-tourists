<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> تسجيل الدخول </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-right">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center"> تسجيل الدخول</h2>
                    <p class="text-center">سجل الدخول باستخدام الايميل وكلمة المرور</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group " dir="rtl">
                        <input class="form-control" type="email" name="email" placeholder=" الايمل " required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group" dir="rtl">
                        <input class="form-control" type="password" name="password" placeholder="كلمة المرور" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php"> هل نسيت كلمة المرور </a></div>
                    <div class="form-group" dir="rtl">
                        <input class="form-control button" type="submit" name="login" value=" تسجيل الدخول ">
                    </div>
                    <div class="link login-link text-center">لا اتذكر ؟ <a href="signup-user.php"> تسجيل الدخول الآن </a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>