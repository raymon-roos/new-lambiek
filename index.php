<?php

require_once('src/php/pages/home.php');

$url = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
