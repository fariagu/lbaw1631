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
  $correct = getCorrectAnswer($id);
  $answers = getAnswers($id);
  
  $top_categories = getTopCategories();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('question', $question);
  $smarty->assign('question_id', $id);
  $smarty->assign('correct', $correct);
  $smarty->assign('answers', $answers);
  
  $smarty->display('posts/question.tpl');

?>
