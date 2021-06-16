<?php
require_once('controllers/base_controller.php');
require_once('models/user.php');

class UsersController extends BaseController {
  function __construct() {
    $this->folder = 'users';
  }

  public function index() {
    $users = User::getAll();
    $data = array('users' => $users);
    $this->render('index', $data);
  }

  public function showUser() {
    $user = User::find($_GET['user_id']);
    $data = array('user' => $user);
    $this->render('user_details', $data);
  }

  public function insertUser() {
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hashed_passcode = md5($_POST['user_password']); 
    // $user_status = $_POST['user_status'];
    $result = User::insert($user_name, $user_phone, $user_email, $hashed_passcode, $user_status);
    $data = array('result' => $result);
    $this->render('register', $data);
  }
  
  public function loginUser()
  {
      $result = [];
      if(isset($_POST['user_email']) && isset($_POST['user_password']))
      {
          $hashed_passcode = md5($_POST['user_password']); 
          $result = User::login($_POST['user_email'], $hashed_passcode);
          if ($result === 'ok') {
            header("Location: index.php");
        }
      }
      $data = array('result' => $result);
      $this->render('login', $data);
  }
  
  public function logout()
  {
  session_start();
  unset($_SESSION["user_id"]);
  unset($_SESSION["user_name"]);
  unset($_SESSION["user_email"]);
  unset($_SESSION["user_phone"]);
  unset($_SESSION["user_status"]);
  header("Location: index.php");
  }
}
?>