<?php

require 'data/db-connect.php';

$query = $dbh->query("SELECT * FROM lighter");
$lighters = $query->fetchAll();


$title = "Accueil";

require 'template/home.html.php';
