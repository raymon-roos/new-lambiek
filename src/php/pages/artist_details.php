<?php

require_once('../../components/header.html');
require_once('../common/pdo.php'); 

$comics = findComicsByArtistName($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic details</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body class="bg-old_paper-100">
<div class="w-9/12 mx-auto">
    <article class="bg-old_paper-200 p-28">
        <section class="text-justify font-serif">
            <div class="grid gap-2 grid-cols-3 grid-rows-6 grid-flow-row place-content-center">
                <?php foreach ($comics as $comic) { ?>
                    <div class="">
                        <a href="comic_details.php?comicID=<?= $comic['id'] ?>" 
                            class="flex flex-col items-center">
                            <img src="http://unsplash.it/165/220" alt="oops" width="165" height="220" class="">
                            <h4 class="flex-wrap break-inside-auto"><?= $comic['title'] ?></h4>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>
    </article>
</div>

</body>
</html>
