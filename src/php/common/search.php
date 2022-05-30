<?php

require_once('pdo.php');

if ($_POST['search']) {
    var_dump(searchArticles($_POST['search']));
}
