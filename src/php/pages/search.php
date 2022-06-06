<?php

if (!$_POST['search']) {
    header("Location: /src/php/pages/comiclopedia.php");
    exit();
}

foreach ($_POST as $inputField => $inputValue) {
    if (preg_match('/^filter/', $inputField)) {
        $filters[] = match ($inputField) {
            // Preventing SQL injection by hardcoding possible filters 
            // Otherwise an attacker could create additional form elements
            // in their client, with malicious sql in the name atribute
            'filterFirstName' => 'firstname',
            'filterLastName' => 'lastname',
            'filterRealName' => 'realname',
            'filterPageTitle' => 'pagetitle',
            'filterKeywords' => 'keywords', 
            default => ''
        };
    }
}

// Remove any post data from our array, if it wasn't matched correctly earlier
// array_filter() will remove elements that evaluate as empty(), which the string '' does. 
$filters = ($filters) ? array_filter($filters) : ''; 

require_once('../common/pdo.php');
$results = (!empty($filters)) ? 
    searchArticles($_POST['search'], $filters) : 
    searchArticles($_POST['search']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/output.css">
    <title>Search</title>
</head>


<body class="bg-old_paper-100">
<div class="w-9/12 mx-auto p-2 bg-old_paper-200">

    <?php require_once('../../components/header.html'); ?>

    <?php require_once('../../components/search_bar.html'); ?>

    <article class="bg-old_paper-200 px-8">
        <section>
            <div class="grid gap-2 grid-cols-2 grid-flow-row place-content-between">

            <div>
                <?php (isset($_POST) ? var_dump($_POST) : '' ) ?>
            </div>

                <?php if ($results) {
                    foreach ($results as $result) { ?>
                    <div class="flex">
                        <a href="artist_details.php?name=<?= $result['lastname'] ?>" 
                            class="flex flex-col ">
                            <img src="http://unsplash.it/165/220" alt="oops" width="165" height="220" class="">
                            <p class="flex-wrap ">Name: <?= "{$result['firstname']} {$result['lastname']}" ?></p>
                            <p class="flex-wrap ">Country: <?= $result['country'] ?></p>
                        </a>
                    </div>
                    <?php }
                } else { ?>
                    <p>No matches were found</p>
                <?php } ?>
            </div>
            <span class="flex justify-center">
                <p>Show: (not yet working)</p>
                <a href="search.php?limit=20">20|</a>
                <a href="search.php?limit=50">50|</a>
                <a href="search.php?limit=100">100</a>
            </span>
        </section>
    </article>

</div>    
</body>
</html>
