<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/question.php');
  
  if(!$_GET['r_id'] || !$_GET['q_id'])
  {
	  http_response_code(404);
	  exit;
  }
  
  try {
	  markCorrect($_GET['q_id'], $_GET['r_id']);
	  http_response_code(200);
  }
  catch (PDOException $e) {
	  http_response_code(404);
	  echo $e->getMessage();
  }
?>
