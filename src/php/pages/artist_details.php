<?php

require_once('../common/pdo.php'); 

$article = findArticleByName($_GET['name']);
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
<div class="w-9/12 mx-auto p-2 bg-old_paper-200">

<?php require_once('../../components/header.html'); ?>

    <article class="w-9/12 mx-auto p-8">
        <section class="w-fit ">
            <?= ($article['content']) ?: 'No article was found for this artist.' ?>
        </section>
        <section class="w-full flex justify-center mt-5 italic">
            <?= ($article['copyright']) ?: 'All rights reserved' ?>
        </section>
        <section class="w-full flex justify-center mt-5">
            <?= ($article['credits']) ?: '' ?>
        </section>
    </article>
    <script src="../../js/fix_comiclopedia_articles.js"></script>
</div>

</body>
</html>
