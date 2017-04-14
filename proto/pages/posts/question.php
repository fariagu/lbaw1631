<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/question.php');
  
  if (!$_GET['id']) {
    $_SESSION['error_messages'][] = 'Undefined id';
    header("Location: $BASE_URL");
    exit;
  }
  
  $id = $_GET['id'];
  
  $question = getQuestionInfo($id);
  
  $top_categories = getTopCategories();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('question', $question);
  
  $smarty->display('posts/question.tpl');

?>