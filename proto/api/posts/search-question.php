<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/question.php');
  
  $searchResults = searchQuestions($_GET['content']);
  echo json_encode($searchResults);
?>
