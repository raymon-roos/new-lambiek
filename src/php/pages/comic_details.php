<?php

try {
    var_dump(findComicByID($_GET[1]));
} catch (Exception $e) {
    echo $e->getMessage(); 
}