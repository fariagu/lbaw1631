<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/question.php');
  
  $top_questions = getTopQuestions();  
  $top_categories = getTopCategories();  
  
  $smarty->assign('top_questions', $top_questions);
  $smarty->assign('top_categories', $top_categories);
  
  $smarty->display('home/home.tpl');

?>