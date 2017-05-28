<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  
  if(!$_SESSION['username'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }
  
  $top_categories = getTopCategories();
  $categories = getAllCategories();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('categories', $categories);
  $smarty->assign('page_title', 'Post Question');
  
  $smarty->display('posts/new-question.tpl');
?>