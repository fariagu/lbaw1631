<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/category.php');

  if (!$_POST['name'] || !$_POST['description']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/user/register.php');
    exit;
  }

  $name = strip_tags($_POST['name']);
  $description = strip_tags($_POST['description']);

  try {
    $category_id = createCategory($name, $description);
  } catch (PDOException $e) {

    if (strpos($e->getMessage(), 'member_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate Category Name';
      $_SESSION['field_errors']['username'] = 'Category already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating category';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/categories/add.php');
    exit;
  }

  $_SESSION['success_messages'][] = 'Category created successfully';
  header("Location: $BASE_URL" . 'pages/categories/category.php?id=' . $category_id);
?>
