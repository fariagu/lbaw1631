<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');
  
  $top_categories = topCategories();
  
  $smarty->assign('top_categories', $top_categories);
  
  $smarty->display('posts/search-question.tpl');

?>