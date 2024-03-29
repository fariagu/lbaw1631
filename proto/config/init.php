<?php
session_set_cookie_params(3600, '/lbaw1631'); //local
//  session_set_cookie_params(3600, '/~lbaw1631'); //gnomo
  session_start();

  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

//	$BASE_DIR = '/mnt/d/CODE/www/lbaw1631/proto/'; //gustavo
	$BASE_DIR = 'C:/xampp/htdocs/lbaw1631/proto/'; //daniel
//	$BASE_DIR = '/opt/lbaw/lbaw1631/public_html/proto/'; //gnomo
	$BASE_URL = '/lbaw1631/proto/'; //local
//	$BASE_URL = '/~lbaw1631/proto/'; //gnomo

$conn = new PDO('pgsql:host=dbm.fe.up.pt;dbname=lbaw1631', 'lbaw1631', 'iy55xp91'); //local
//  $conn = new PDO('pgsql:host=dbm;dbname=lbaw1631', 'lbaw1631', 'iy55xp91'); //gnomo
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'public\''); //FIXME?

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('ADMIN', $_SESSION['admin']);
  $smarty->assign('USER_ID', $_SESSION['id']);
  
  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
