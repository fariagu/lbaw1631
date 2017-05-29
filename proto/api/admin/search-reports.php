<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/report.php');

if($_GET['content'] == '')
{
    $searchResults = getAllUnsolvedReports();
}
else
{
    $searchResults = searchReports($_GET['content']);
}

echo json_encode($searchResults);
?>
