<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');
  
  if(!$_GET['c_id'])
  {
	  http_response_code(404);
	  exit;
  }
  
  try {
	  deleteCategory($_GET['c_id']);
	  http_response_code(200);
  }
  catch (PDOException $e) {
	  http_response_code(404);
  }
?>
