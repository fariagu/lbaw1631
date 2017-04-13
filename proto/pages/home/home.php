<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/question.php');
  
  $questions = getTopQuestions();  
  $categories = getTopCategories();  
  
  $smarty->assign('questions', $questions);
  $smarty->assign('categories', $categories);
  
  $smarty->display('home/home.tpl');

?>