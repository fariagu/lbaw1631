<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  
  if(!$_SESSION['username'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }
  
  $top_categories = getTopCategories();
  $delete_pressed = false;

  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('delete_pressed', $delete_pressed);
  $smarty->assign('page_title', 'Edit Info');

  $smarty->display('user/edit-profile.tpl');

?>