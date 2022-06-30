<?php

require_once('../common/pdo.php');

$randArticles = findRandomArticles();
$updatedArticles = findUpdatedArticles();

?>
<!DOCTYPE html>
<html lang="en">

<script src="../../../node_modules/tw-elements/dist/js/index.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../img/index.ico">
    <title>Comiclopedia</title>
    <link rel="stylesheet" href="../../../dist/output.css">
    <link rel="stylesheet" href="../../css/input.css">
</head>

<body>
    <div class="page_content">
        <?php require_once('../../components/header.html'); ?>
        <?php require_once('../../components/search_bar.html'); ?>
        <?php require_once('../../components/alphabet_bar.php'); ?>

        <article class="my-8">
            <section class="text-center">
                <h1 class="font-bold text-lg">
                    Welcome to the Comiclopedia, an illustrated compendium of over 14,000 comic
                    artists from around the world. Find your favorite artists, or discover new
                    ones!
                </h1>
                <br>
                <h2 class="text-base w-3/5 mx-auto">
                    Online since 1 November 1999, the Comiclopedia is the world's largest overview
                    of comic artists, and the brainchild of comic shop Lambiek's founder Kees
                    Kousemaker (1942-2010). Kees was at the vanguard of promoting comics as art,
                    and both the Lambiek store and the website are continuing in his spirit. The
                    editors/writers of the Comiclopedia are Bas Schuddeboom and Kjell Knudde.
                    Please contact them for corrections or additions.

                    Also visit: Lambiek's overview of Dutch Comics History (in Dutch) The history
                    of Europe's oldest comics shop: The Story of Lambiek (in English and Dutch)
                </h2>
                <br>
                <h2 class="text-base w-3/5 mx-auto">Also visit:
                    Lambiek's overview of Dutch Comics History (in Dutch)
                    The history of Europe's oldest comics shop: The Story of Lambiek (in English and Dutch)</h2>
            </section>
        </article>

        <div class="flex flex-row justify-between my-8">
        <?php require_once('../../components/carousel.php') ?>

        <article class="w-1/2 bg-comic_blue">
            <h1 class="text-modern_white_smoke font-semibold text-xl w-full text-center mt-4">Kees Kousemaker's comiclopedia</h1>
            <section class="grid grid-cols-2 gap-4 m-2 p-4">
                <?php foreach ($updatedArticles as $article) { ?>
                    <div class="flex flex-col justify-center" >
                        <div class="bg-cover bg-center h-56 flex flex-col-reverse"
                            style="background-image: url(https://lambiek.net/artists/image/<?= $article['imgofn'] ?>);">
                            <a href="artist_details.php?artist=<?= $article['id'] ?>" class="bg-modern_light_blue w-fit m-2">
                                <p class="flex-wrap break-inside-auto text-modern_white_smoke text-lg font-bold"><?= $article['name'] ?></p>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            <section>
        </article>
        </div>

    <?php require_once('../../components/footer.html') ?>
    </div>
</body>

</html>