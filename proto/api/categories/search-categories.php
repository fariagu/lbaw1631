<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/category.php');

if($_GET['content'] == '')
{
    $searchResults = getAllCategories();
}
else
{
    $searchResults = searchCategories($_GET['content']);
}

echo json_encode($searchResults);
?>
