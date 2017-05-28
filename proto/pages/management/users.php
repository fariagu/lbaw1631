<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/member.php');
  
  if(!$_SESSION['admin'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }
  
  $top_categories = getTopCategories();
  $profiles = getAllUsers();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('profiles', $profiles);
  $smarty->assign('page_title', 'All Users');
  
  $smarty->display('management/users.tpl');
?>