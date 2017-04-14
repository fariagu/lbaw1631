<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  
  $categories = getAllCategories();  
  $top_categories = getTopCategories();
  
  $smarty->assign('categories', $categories);
  $smarty->assign('top_categories', $top_categories);
  
  $smarty->display('categories/all-categories.tpl');

?>