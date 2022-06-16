<?php

require_once('../common/pdo.php'); 

$comics = findRandomComics();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/index.ico">
    <title>Comiclopedia</title>
    <link rel="stylesheet" href="/dist/output.css">
</head>

<body class="bg-old_paper-100">
<div class="w-9/12 min-w-fit mx-auto p-2 bg-old_paper-200">

    <?php require_once('../../components/header_shop.html'); ?>

    <div class="py-8 w-full">
        <form action="webshop_search.php" method="POST"
            class="flex justify-center">
            <input type="search" name="search" id="search" class="rounded-xl px-2">
            <input type="submit" value="search" class="bg-old_paper-100 ml-4 rounded-xl p-1">
        </form>
    </div>

    <article class="bg-old_paper-200 px-8">
        <section>
            <div class="grid gap-2 grid-cols-3 grid-flow-row place-content-center">
                <?php foreach ($comics as $comic) { ?>
                    <div class="flex flex-col">
                        <a href="comic_details.php?comicID=<?= $comic['id'] ?>" 
                            class="flex flex-col items-center">
                            <img src="http://unsplash.it/165/220" alt="oops" width="165" height="220" class="">
                            <h4 class="flex-wrap break-before-auto w-[200px]"><?= $comic['title'] ?></h4>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>
    </article>
</div>

</body>
</html>
