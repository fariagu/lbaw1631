<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/member.php');
  
  $id = $_GET['id'];
  
  if($id) {
	  $profile = getProfileInfo($id);
	  $own = false;
  }
  else if($_SESSION['id']) {
	  $id = $_SESSION['id'];
	  $profile = getProfileInfo($_SESSION['id']);
	  $own = true;
  }
  else {
	$_SESSION['error_messages'][] = 'Undefined profile id';
    header("Location: $BASE_URL");
    exit;
  }
  
  $user = rtrim($profile['username'], " ");
  
  	unset($photo);
	if (file_exists($BASE_DIR.'images/users/'.$user.'.png'))
	  $photo = 'images/users/'.$user.'.png';
	if (file_exists($BASE_DIR.'images/users/'.$user.'.jpg'))
	  $photo = 'images/users/'.$user.'.jpg';
	if (!$photo) $photo = 'images/assets/default.png';
	$profile['photo'] = $photo;
  
  $top_categories = getTopCategories();
  
  $pubadmin = isAdmin($profile['username']);
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('profile', $profile);
  $smarty->assign('own', $own);
  $smarty->assign('profile_id', $id);
  $smarty->assign('pubadmin', $pubadmin);
  $smarty->assign('page_title', $profile['username'] . ' Profile Page');
  
  $smarty->display('user/profile.tpl');
?>