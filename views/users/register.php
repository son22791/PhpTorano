
<!DOCTYPE html>
<html>
<head>
  <title>User Form</title>
  <link rel="stylesheet" href="assets/css/registrantion.css">
</head>
<body>
  <?php 
//   echo $result; 
//   echo '<hr>';
  ?>
      <!-- Registration Start -->
      <div class="register">
        <div class="form-box">
            <div class="form-register">
                <div class="button-box">
                    <div id="btn"></div>
                    <div id="btn_hover"></div>
                    <button type="button" class="toggle-btn" onclick="window.location.href='index.php?controller=users&action=loginUser'">đăng nhập</button>
                    <button type="button" class="toggle-btn" >đăng ký</button>
                </div>
                <form action="" id="Register" class="input-group" method="POST" onsubmit="return matchpass()">
                    <input type="text" name="user_name" class="input-field" placeholder="Họ tên">
                    <input type="text" name="user_phone" class="input-field" placeholder="Điện thoại">
                    <input type="text" name="user_email" class="input-field" placeholder="Email">
                    <input type="password" name="user_password" class="input-field" placeholder="Mật khẩu của bạn">
                    <button id="register-submit" type="submit" class="submit-btn"> ĐĂNG KÝ</button>
                </form>
            </div>
        </div>
       
    </div>
    <!-- Registration End -->
</body>
</html>