<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/report.php');

  if(!$_SESSION['username'])
  {
	  header("Location: $BASE_URL");
	  exit;
  }

  if (!$_POST['id_member'] || !$_POST['id_post'] || !$_POST['solution']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/posts/new-question.php');
    exit;
  }

  $id_member = strip_tags($_POST['id_member']);
  $id_post = strip_tags($_POST['id_post']);
  $solution = strip_tags($_POST['solution']);

  try {
    $report_id = solveReport($id_member, $id_post, $solution);

  } catch (PDOException $e) {

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/admin/solve.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'Report solved successfuly';
  //header("Location: $BASE_URL" . 'pages/admin/solve.php?id=' . $report_id);
  header("Location: $BASE_URL" . 'pages/admin/reports.php');

?>