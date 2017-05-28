<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  
  if(!$_SESSION['admin'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }
  
  $top_categories = getTopCategories();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('page_title', 'Admin Actions');
  
  $smarty->display('admin/admin.tpl');
?>