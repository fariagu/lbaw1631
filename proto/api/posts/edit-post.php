<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/question.php');

if(!$_GET['title'] || !$_GET['question'] || !$_GET['sel1'] || !$_GET['id'])
{
    http_response_code(404);
    exit;
}

try {
    updateQuestion($_GET['title'], $_GET['question'], $_GET['sel1'], $_GET['tags'], $_GET['id'], $_SESSION['id']);
    http_response_code(200);
}
catch (PDOException $e) {
    http_response_code(404);
    echo $e->getMessage();
}
?>
