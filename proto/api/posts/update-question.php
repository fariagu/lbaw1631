<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/question.php');  

  if (!$_POST['q_id'] || !$_POST['title'] || !$_POST['description'] || !$_POST['category']) {
    http_response_code(404);
    exit;
  }

  $id = $_POST['q_id'];
  $title = strip_tags($_POST['title']);
  $description = strip_tags($_POST['description']);
  $category = strip_tags($_POST['category']);
  $tags = $_POST['tags'];

  try {
	  echo updateQuestion($id, $title, $description, $category, $tags);
      http_response_code(200);
  } catch (PDOException $e) {
	  http_response_code(404);
  }

?>