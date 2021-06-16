<?php 
    if (isset($_SESSION['user_email'])) {
        $user_name = $_SESSION['user_name'];
        $user_email = $_SESSION['user_email'];
        echo "Welcome $user_name".'<br>'.$user_email;
        header("Location: index.php");
    }
    else {
        // echo "Get away";
        // header("Location: index.php");
    }
    ?>

<!DOCTYPE html>
<html>
<head>
  <title>User Form</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
 <div class="login">
        <div class="form-box">
            <div class="form-login">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" >đăng nhập</button>
                    <button type="button" class="toggle-btn" onclick="window.location.href='index.php?controller=users&action=insertUser'">đăng ký</button>
                </div>
                <form  action="" method="POST" id="Login" class="input-group" onsubmit="return validateForm()">
                    <input type="text" class="input-field" name="user_email" placeholder="Nhập email hoặc tên đăng nhập" >
                    <input type="password" class="input-field" name="user_password" placeholder="Mật khẩu" >
                    <button type="submit" name="btnLogin" class="submit-btn"> ĐĂNG NHẬP</button>
                    <div class="forgot-password">
                        <a href="#" >Quên mật khẩu?</a>
                    </div>
                    <p class="login-other">Hoặc đăng phập với</p>
                    <div class="login_other_fb_gg">
                        <div class="login-fb">
                            <i id="login-icon-fb" class="fab fa-facebook-f"></i>
                            <a class="login-fb-content" href="#">Đăng nhập facebook</a>
                        </div>
                        <div class="login-gg">
                            <i id="login-icon-gg" class="fab fa-google"></i>
                            <a  class="login-gg-content" href="#">Đăng nhập Google</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
</body>
</html>