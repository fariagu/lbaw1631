<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/question.php');
  
  if(!$_GET['q_id'] || !$_GET['p_id'] || !$_GET['content'])
  {
	  http_response_code(404);
	  exit;
  }
  
  try {
	  createAnswer($_GET['q_id'], $_GET['p_id'], $_GET['content']);
	  http_response_code(200);
	  echo('asd');
  }
  catch (PDOException $e) {
	  http_response_code(404);
  }
?>
