<?php

require_once('pdo.php');

if ($_POST['search']) {
    $key = $_POST['key'];
    $query = $pdo->prepare('SELECT*FROM Lambiek WHERE Naam LIKE:keyword OR Achternaam LIKE:keyword ORDER BY Naam');
    $query->bindValue(':keyword', '%' . $key . '%', PDO :: PARAM_STR);
    $query->execute();
    $results = $query->fetchAll();
    $rows = $query->rowCount();
}
