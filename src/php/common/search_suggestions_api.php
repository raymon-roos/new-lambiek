<?php 

require_once("pdo.php");

header('Content-Type: application/json');
echo json_encode(getSearchSuggestions($_GET['search']));