<?php
  session_start();
  session_unset();

  $email = $_REQUEST['email'];
  $pass = $_REQUEST['password'];

  $_SESSION['login_email'] = $email;

  if (!in_array($email, ['boss@make.com', 'help@make.com', 'spec@make.com'])) {
    $_SESSION['loggin_errors'] = 'Sorry, we dont recognise that email address.';
  } elseif ($pass != 'pass123') {
    $_SESSION['loggin_errors'] = 'Invalid Password';
  }

  if (!isset($_SESSION['loggin_errors'])) {

    switch ($email) {
      case 'boss@make.com':
        $_SESSION['logged_in'] = 'boss';
        break;
      case 'help@make.com':
        $_SESSION['logged_in'] = 'helpdesk';
        break;
      case 'spec@make.com':
        $_SESSION['logged_in'] = 'specialist';
        break;
      default:
        $_SESSION['loggin_errors'] = 'Sorry, we do not recognise that email address';
      }

    }

    header('location: /');

?>
