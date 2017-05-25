<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/member.php');

  try {
	  http_response_code(200);
  }
  catch (PDOException $e) {
	  http_response_code(404);
  }
?>
