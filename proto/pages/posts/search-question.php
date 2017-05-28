<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/question.php');
  
  if ($_GET['search']) {
	  $search_results = searchQuestions($_GET['search']);
    $smarty->assign('search_results', $search_results);
  }
  
  $top_categories = getTopCategories();
  
  $smarty->assign('top_categories', $top_categories);
  
  $smarty->display('posts/search-question.tpl');

?>