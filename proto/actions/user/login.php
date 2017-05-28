<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/member.php');  

  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'] = 'Please fill in the entire form!';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isLoginCorrect($username, $password)) {
    $_SESSION['username'] = $username;
	$_SESSION['admin'] = isAdmin($username);
	$_SESSION['id'] = getMemberId($username);
    $_SESSION['success_messages'] = 'Login successful';  
  } else {
    $_SESSION['error_messages'] = 'Login failed';  
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
  }
  header("Location: $BASE_URL");
?>
