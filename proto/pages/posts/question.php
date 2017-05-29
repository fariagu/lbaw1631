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
  
  $question = getQuestionInfo($id, $_SESSION['id']);
  $correct = getCorrectAnswer($id, $_SESSION['id']);
  $answers = getAnswers($id, $_SESSION['id']);
  $categories = getAllCategories();
  
  $top_categories = getTopCategories();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('categories', $categories);
  $smarty->assign('question', $question);
  $smarty->assign('question_id', $id);
  $smarty->assign('correct', $correct);
  $smarty->assign('answers', $answers);
  $smarty->assign('page_title', $question['title']);
  $smarty->assign('owner', $question['id_author'] == $_SESSION['id']);
 
  $smarty->display('posts/question.tpl');

?>
