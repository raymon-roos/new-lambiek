<?php

require_once('../../components/header.html');
require_once('../common/pdo.php'); 

$comics = findRandomComics();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comiclopedia</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body class="bg-old_paper-100">
<div class="w-9/12 min-w-fit mx-auto bg-old_paper-200">

    <div class="ml-24 mb-6 text-xl text-comic_blue font-sans uppercase">
        <h1 class="">Comiclopedia-</h1>
        <h3 class="">Illustrated artist compendium</h3>
    </div>

    <div class="flex justify-evenly mx-auto border-t-4 border-t-comic_blue">
    <?php foreach (range('A', 'Z') as $letter) { ?> 
       <span class="">
           <a href="/src/php/pages/artists.php?filter=a">
               <p class="p-2 bg-old_paper-100 text-center "><?= $letter ?></p>
            </a>
        </span>
    <?php } ?>  
    </div>

    <article class="bg-old_paper-200 p-28">
        <section>
            <div class="grid gap-2 grid-cols-3 grid-rows-6 grid-flow-row place-content-center">
                <?php foreach ($comics as $comic) { ?>
                    <div class="">
                        <a href="/src/php/pages/comic_details.php?comicID=<?= $comic['id'] ?>">
                            <img src="http://unsplash.it/165/220" alt="oops" class="">
                        </a>
                        <h4><?= $comic['title'] ?></h4>
                    </div>
                <?php } ?>
            </div>
        </section>
    </article>
</div>

</body>
</html>