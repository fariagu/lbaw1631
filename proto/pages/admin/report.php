<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  include_once($BASE_DIR .'database/member.php');
  include_once($BASE_DIR .'database/report.php');
  include_once($BASE_DIR .'database/question.php');
  
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
  
  $member = $_GET['id_member'];
  $post = $_GET['id_post'];
  
  $top_categories = getTopCategories();
  $report = getReportInfo($member, $post);
  $reported_member['id'] = $member;
  $reported_member['username'] = getMemberUsername($member);
  
  if($report['id_response'])
  {
	  $reported_post = getQuestionInfo($report['id_response'], $_SESSION['id']);
	  $reported_post['response'] = $post;
	  $reported_post['id'] = $report['id_response'] . '#answer' . $post;
  }
  else
  {
	  $reported_post = getQuestionInfo($post, $_SESSION['id']);
	  $reported_post['id'] = $post;
  }
  
  $smarty->assign('top_categories', $top_categories);
  $smarty->assign('report', $report);
  $smarty->assign('reported_member', $reported_member);
  $smarty->assign('reported_post', $reported_post);
  $smarty->assign('page_title', 'Report');
  
  $smarty->display('admin/report.tpl');
?>