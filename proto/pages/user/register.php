<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  
  $top_categories = getTopCategories();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('page_title', 'Sign Up');
  
  $smarty->display('user/register.tpl');

?>