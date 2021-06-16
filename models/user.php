<?php
class User {
  public $user_id;
  public $user_name;
  public $user_phone;
  public $user_email;
  public $user_password;
  public $user_status;

  function __construct($user_id, $user_name, $user_phone, $user_email, $user_password, $user_status) {
    $this->user_id = $user_id;
    $this->user_name = $user_name;
    $this->user_phone = $user_phone;
    $this->user_email = $user_email;
    $this->user_password = $user_password;
    $this->user_status = $user_status;
  }

  static function getAll() {
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM users');

    foreach ($req->fetchAll() as $item) {
      $list[] = new User($item['user_id'], $item['user_name'], $item['user_phone'], $item['user_email'], $item['user_password'], $item['user_status']);
    }

    return $list;
  }

  static function find($user_id) {
    $db = DBConnection::getInstance();
    $req = $db->prepare('SELECT * FROM users WHERE user_id = :user_id');
    $req->execute(array('user_id' => $user_id));
    $item = $req->fetch();
    if (isset($item['user_id'])) {
      return new User($item['user_id'], $item['user_name'], $item['user_phone'], $item['user_email'], $item['user_password'], $item['user_status']);
    }
    return null;
  }

  static function insert($user_name, $user_phone, $user_email, $user_password, $user_status) {

    $db = DBConnection::getInstance();
    $req = $db->prepare('INSERT INTO users(user_name, user_phone, user_email, user_password, user_status) VALUES(:user_name,:user_phone,:user_email,:user_password, :user_status)');
    $re = $req->execute(array('user_name' => $user_name, 'user_phone' => $user_phone, 'user_email' => $user_email, 'user_password' => $user_password, 'user_status' => 1));
    if ($re) {
      return "Insert OK";
    }
    return "Insert not OK";
  }
  // static function select($user_email, $user_password) {
  //   $db = DBConnection::getInstance();
  //   $req = $db->prepare("SELECT * FROM users WHERE ");
  // }
}
?>