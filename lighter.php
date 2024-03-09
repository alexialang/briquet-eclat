<?php

require 'data/db-connect.php';

$query = $dbh->query('SELECT * FROM lighter INNER JOIN category_lighter ON lighter.lighter_id  = category_lighter.lighter_id INNER JOIN category ON category.category_id = category_lighter.category_id  WHERE lighter.lighter_id = ' . $_GET['id']);
$lighter = $query->fetch();


$title = $lighter['lighter_name'];

require 'template/lighter.html.php';
