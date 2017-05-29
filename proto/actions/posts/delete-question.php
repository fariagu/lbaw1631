<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/question.php');

  if(!$_POST['id'])
  {
	  $_SESSION['error_messages'] = 'Could not delete question';
	  header("Location: $BASE_URL");
	  exit;
  }
  
  try {
	  deleteQuestion($_POST['id']);
	  $_SESSION['success_messages'] = 'Question deleted successfully';
  }
  catch (PDOException $e) {
	  http_response_code(404);
	  $_SESSION['error_messages'] = 'Error deleting question';
  }

  header("Location: $BASE_URL");
?>
