<?php



if (!empty($_GET['id'])) {

  require 'data/db-connect.php';
  try {


    $query = $dbh->query('SELECT * FROM lighter INNER JOIN category_lighter ON lighter.lighter_id  = category_lighter.lighter_id INNER JOIN category ON category.category_id = category_lighter.category_id WHERE category.category_id =' . $_GET['id']);
  } catch (PDOException) {
    require 'template/404.html.php';
    exit;
  }

  $lighters = $query->fetchAll();

  $query = $dbh->query("SELECT category_id FROM category");
  $categories = $query->fetchAll();

  $categoriesId = [];
  foreach ($categories as $category) {
    array_push($categoriesId, $category['category_id']);
  }
  if (in_array($_GET['id'], $categoriesId)) {
    $title = $lighters[0]['category_name'];
    require 'template/category.html.php';
  } else {
    require 'template/404.html.php';
  }
} else {
  require 'template/404.html.php';
}
