<?php

require_once('../common/pdo.php'); 

$articles = findRandomArticles();
$updatedArticles = findUpdatedArticles()
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
<div class="w-9/12 mx-auto bg-old_paper-200 p-2">

<?php require_once('../../components/header.html'); ?>

<div class="ml-24 mb-6 text-xl text-comic_blue font-sans uppercase">
    <h1 class="">Comiclopedia-</h1>
    <h3 class="">Illustrated artist compendium</h3>
</div>

<?php require_once('../../components/alphabet_bar.php'); ?>

<?php require_once('../../components/search_bar.html'); ?>

<article class="bg-old_paper-200 px-8">

    <?php require_once('../../components/comiclopedia_carousel.php'); ?>
    
    <!-- <section class="grid gap-2 grid-cols-3 grid-flow-row place-content-center">
            <?php foreach ($articles as $article) { ?>
                <div class="">
                    <a href="artist_details.php?name=<?= $article['lastname'] ?>" 
                        class="flex flex-col items-center">
                        <img src="http://unsplash.it/165/220" alt="oops" width="165" height="220" class="">
                        <h4 class="flex-wrap break-inside-auto"><?php echo"{$article['firstname']} {$article['lastname']}" ?></h4>
                    </a>
                </div>
            <?php } ?>
    </section> -->
</article>
</div>

</body>
</html>