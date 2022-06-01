<?php

if (!$_POST['search']) {
    header("Location: /src/php/pages/webshop.php");
    exit();
}

require_once('../common/pdo.php');
$results = searchComics($_POST['search']);

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


    <div class="py-8 w-full">
        <form action="search.php" method="POST"
            class="flex justify-center">
            <input type="search" name="search" id="search" class="rounded-xl px-2">
            <input type="submit" value="search" class="bg-old_paper-100 ml-4 rounded-xl p-1">
        </form>
    </div>

    <article class="bg-old_paper-200 px-8">
        <section>
            <div class="grid gap-2 grid-cols-2 grid-flow-row place-content-between">
                <?php if ($results) {
                    foreach ($results as $result) { ?>
                    <div class="flex">
                        <a href="comic_details.php?comicID=<?= $result['id'] ?>" 
                            class="flex flex-col ">
                            <img src="http://unsplash.it/165/220" alt="oops" width="165" height="220" class="">
                            <p class="flex-wrap "><?= $result['artist']?></p>
                        </a>
                    </div>
                    <?php }
                } else { ?>
                    <p>No matches were found</p>
                <?php } ?>
            </div>
        </section>
    </article>

</div>    
</body>
</html>

