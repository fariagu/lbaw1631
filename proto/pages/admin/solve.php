<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/member.php');
  include_once($BASE_DIR .'database/report.php');
  
  if(!$_SESSION['admin'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }
  
  if(!$_GET['id_member'] || !$_GET['id_post'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }
  
  $reported_member = $_GET['id_member'];
  $reported_post = $_GET['id_post'];

  $top_categories = getTopCategories();

  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('reported_member', $reported_member);
  $smarty->assign('reported_post', $reported_post);
  $smarty->assign('page_title', 'Solve Report');
  
  $smarty->display('admin/solve.tpl');
?>