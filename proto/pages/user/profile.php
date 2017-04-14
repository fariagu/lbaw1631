<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/member.php');
  
  $id = $_GET['id'];
  
  if($id) {
	  $profile = getProfileInfo($id);
	  $own = false;
  }
  else if($USER_ID) {
	  $profile = getProfileInfo($USER_ID);
	  $own = true;
  }
  else {
	$_SESSION['error_messages'][] = 'Undefined profile id';
    header("Location: $BASE_URL");
    exit;
  }
  
  $top_categories = getTopCategories();
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('profile', $profile);
  $smarty->assign('own', $own);
  
  $smarty->display('user/profile.tpl');
?>