<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/member.php');  

  if (!$_POST['username'] || !$_POST['firstname'] || !$_POST['password'] || !$_POST['confirmpassword'] || !$_POST['lastname'] || !$_POST['email']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/user/register.php');
    exit;
  }

  $firstname = strip_tags($_POST['firstname']);
  $lastname = strip_tags($_POST['lastname']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $email = strip_tags($_POST['email']);
  
  if ($password !== $confirmpassword) {
    $_SESSION['error_messages'][] = 'Passwords do not match';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/user/register.php');
    exit;
  }

  $photo = $_FILES['photo'];
  $extension = end(explode(".", $photo["name"]));

  try {
    createMember($username, $password, $firstname, $lastname, $email);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
  } catch (PDOException $e) {
  
    if (strpos($e->getMessage(), 'member_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user';
	
	echo $e->getMessage();

    $_SESSION['form_values'] = $_POST;
    //header("Location: $BASE_URL" . 'pages/user/register.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");
?>
