<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/member.php');  
  
  if(!$_SESSION['username'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }
  
  $username = $_SESSION['username'];

  if (!$_POST['firstname'] && !$_POST['password'] && !$_POST['confirmpassword'] && !$_POST['lastname']) {
    $_SESSION['error_messages'][] = 'At least one field needs to be filled';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/user/edit-profile.php');
    exit;
  }
  
  if(S_POST['firstname'])
  {
	  changeFirstName($_POST['firstname'], $username);
  }
  
  if(S_POST['lastname'])
  {
	  changeLastName($_POST['lastname'], $username);
  }
  
  if(S_POST['password'] && S_POST['confirmpassword'])
  {
	  if(S_POST['password'] !== S_POST['confirmpassword'])
	  {
		  $_SESSION['error_messages'][] = 'Passwords do not match';
		  $_SESSION['form_values'] = $_POST;
		  header("Location: $BASE_URL" . 'pages/user/register.php');
		  exit;
	  }
	  
	  changePassword($_POST['password'], $username);
  }

	$photo = $_FILES['photo'];
	$extension = end(explode(".", $photo["name"]));

	move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
	chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
	
	$_SESSION['success_messages'][] = 'Profile edited successfully';  
	header("Location: $BASE_URL");
?>
