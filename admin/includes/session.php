<?php

class Session {

  private $signed_in = false;
  public $user_id;
  public $message;
  public $count;

  function __construct() {
    session_start();
    $this->visitor_count();
    $this->check_the_login();
    $this->check_message();
  }

  public function message($msg = "") {
    if(!empty($msg)) {
      $_SESSION['message'] = $msg;
    } else {
      return $this->message;
    }
  }

  private function check_message() {
    if(isset($_SESSION['message'])) {
      $this->message = $_SESSION['message'];
      unset($_SESSION['message']);
    } else {
      $this->message = "";
    }
  }

  public function visitor_count() {
    if(isset($_SESSION['count'])) {
      return $this->count = $_SESSION['count']++;
    } else {
      return $_SESSION['count'] = 1;
    }
  }

  public function is_signed_in() {
    return $this->signed_in;
  }

  public function login($user) {
    if($user) {
      $this->user_id = $_SESSION['user_id'] = $user->id;
      $this->signed_in = true;
    }
  }

  public function logout() {
    unset($_SESSION['user_id']);
    unset($this->user_id);
    $this->signed_in = false;
  }

  private function check_the_login() {
    if(isset($_SESSION['user_id'])) {
      $this->user_id = $_SESSION['user_id'];
      $this->signed_in = true;
    } else {
      unset($this->user_id);
      $this->signed_in = false;
    }
  }

}

$session = new Session();
$message = $session->message();

?>