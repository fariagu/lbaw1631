<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/member.php');
  
  if(!$_GET['id'])
  {
	  http_response_code(404);
	  exit;
  }
  
  try {
	  createAdmin($_GET['id']);
	  http_response_code(200);
  }
  catch (PDOException $e) {
	  http_response_code(404);
  }
?>
