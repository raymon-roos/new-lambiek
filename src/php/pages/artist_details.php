<?php

require_once('../common/pdo.php');

$article = findArticleByID($_GET['artist']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/index.ico">
    <title>Comic details</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body>
<div class="page_content">

<?php require_once('../../components/header.html'); ?>

    <article class="w-9/12 mx-auto p-8" id="comiclopedia_article">
        <section class="flex flex-col items-center justify-evenly w-full ">
            <div class="flex justify-evenly items-center w-full">
            <h1 class="text-comic_blue text font-bold text-3xl mb-4 inline"><?= ($article['pagetitle']) ?: $article['name'] ?></h1>
            <?php if ($article['life']) { ?>
                <p class="p-3 m-2 bg-modern_white_smoke shadow-xl"><?= ($article['life'])?></p>
            <?php } ?>
            </div>
            <?= ($article['content']) ?: 'No article was found for this artist.' ?>
        </section>
        <section class="w-full mt-5">
            <p class="text-center my-4"><a href="https://www.lambiek.net/shop/artist/<?= ($article['pagename']) ?: '' ?>">Find comics from this author in our store</a></p>
            <p class="my-2"><?= ($article['copyright']) ?: "Artwork © " . date('Y') . " {$article['name']}" ?></p>
            <p class="my-2"><?= "Website © " . date('Y') . ' Lambiek' ?></p>
            <p class="my-2"><?= ($article['credits']) ?: '' ?></p>
            <p class="my-2"><?= ($article['website'] && $article['website'] !== 'default.xhtml') ? $article['website'] : '' ?></p>
            <p class="my-2 text-sm italic">Last updated: <?= $article['lastupdate'] ?></p>
        </section>
    </article>
    <script src="../../js/fix_comiclopedia_articles.js"></script>

<?php require_once('../../components/footer.html') ?>
</div>
</body>
</html>
