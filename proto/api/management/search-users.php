<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/member.php');
  
  if($_GET['content'] == '')
  {
	  $searchResults = getAllUsers();
  }
  else
  {
	  $searchResults = searchUsers($_GET['content']);
  }
  
  echo json_encode($searchResults);
?>
