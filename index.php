<?php

header('Location: src/php/pages/home.php');
exit();

$url = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
