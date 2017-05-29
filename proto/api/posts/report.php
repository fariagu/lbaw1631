<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/question.php');
  
  if(!$_GET['q_id'] || !$_GET['p_id'] || !$_GET['content'])
  {
	  http_response_code(404);
	  exit;
  }
  
  try {
	  if($_GET['r_id'])
	  {
		  createReport2($_GET['q_id'], $_GET['p_id'], $_GET['content'], $_GET['r_id']);
	  }
	  else
	  {
		  createReport($_GET['q_id'], $_GET['p_id'], $_GET['content']);
	  }
	  http_response_code(200);
  }
  catch (PDOException $e) {
	  http_response_code(404);
	  echo $e->getMessage();
  }
?>
