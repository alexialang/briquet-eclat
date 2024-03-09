<?php

require 'data/db-connect.php';

$query = $dbh->query("SELECT *, COUNT(*) AS lighter_count FROM category INNER JOIN category_lighter ON category.category_id = category_lighter.category_id INNER JOIN lighter ON category_lighter.lighter_id = lighter.lighter_id GROUP BY category.category_id");
$categories = $query->fetchAll();



$title = "Catégories";

require 'template/categories.html.php';
