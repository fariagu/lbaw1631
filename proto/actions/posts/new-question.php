<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/question.php');  

  if (!$_POST['title'] || !$_POST['question'] || !$_POST['sel1']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/posts/new-question.php');
    exit;
  }

  $title = strip_tags($_POST['title']);
  $description = strip_tags($_POST['question']);
  $category = strip_tags($_POST['sel1']);
  
  try {
    createQuestion($title, $description, $category, $_SESSION['id']);
      
  } catch (PDOException $e) {

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/posts/new-question.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'Question created successfuly';  
  header("Location: $BASE_URL");

?>