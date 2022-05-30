<?php

include('src/components/header.html');
include('src/php/pages/test.php');

if ($_GET['url']) {
    $url = explode('/', $_GET['url']);
}

switch ($url[0]) {
    case 'comic':
        if (is_numeric($url[1])) {
            header('Location: src/php/pages/comic_details.php');
            exit();
        }
        echo "Object not found";
        break;
    
    default:
        header('Location: /');
        break;
}

// @list(, $controllerName, $methodName) = explode('/', $url);
// $controllerName = !empty($controllerName) ? ucfirst($controllerName) : 'Home';
// $methodName = !empty($methodName) ? $methodName : 'index';
// $methodName .= match ($_SERVER['REQUEST_METHOD']) {
//     'POST' => 'Post',
//     'PUT' => 'Put',
//     'DELETE' => 'Delete',
//     default => '',
// };