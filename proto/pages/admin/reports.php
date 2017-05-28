<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/report.php');
  
  if(!$_SESSION['admin'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }
  
  $top_categories = getTopCategories();
  $reports = getAllUnsolvedReports();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('reports', $reports);
  $smarty->assign('page_title', 'All Reports');
  
  $smarty->display('admin/reports.tpl');
?>