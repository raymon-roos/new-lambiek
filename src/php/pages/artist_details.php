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

    <article class="w-9/12 mx-auto p-8 font-bungee" id="comiclopedia_article">
        <section class="flex flex-col items-center justify-evenly w-full ">
            <?= ($article['content']) ?: 'No article was found for this artist.' ?>
        </section>
        <section class="w-full flex justify-center mt-5 italic">
            <?= ($article['copyright']) ?: 'All rights reserved' ?>
        </section>
        <section class="w-full flex justify-center mt-5">
            <?= ($article['credits']) ?: '' ?>
        </section>
        <section class="w-full flex justify-center mt-5">
            <?= ($article['website'] && $article['website'] !== 'default.xhtml') ? $article['website'] : '' ?>
        </section>
    </article>
    <script src="../../js/fix_comiclopedia_articles.js"></script>

<?php require_once('../../components/footer.html') ?>
</div>
</body>
</html>
