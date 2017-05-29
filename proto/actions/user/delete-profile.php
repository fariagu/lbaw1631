<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/member.php');

  if(!$_SESSION['username'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }

  $username = $_SESSION['username'];

    deleteMember($username);
    session_destroy();

	$_SESSION['success_messages'] = 'Profile deleted successfully';
	header("Location: $BASE_URL");
?>
