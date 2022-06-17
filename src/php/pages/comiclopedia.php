<?php

require_once('../common/pdo.php'); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/index.ico">
    <title>Comiclopedia</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body class="bg-old_paper-100">
<div class="w-9/12  mx-auto bg-old_paper-200 p-4">

<?php require_once('../../components/header.html'); ?>

<?php require_once('../../components/search_bar.html'); ?>

<div class="ml-24 mb-6 text-xl text-comic_blue font-sans uppercase">
    <h1 class="">Comiclopedia-</h1>
    <h3 class="">Illustrated artist compendium</h3>
</div>

<?php require_once('../../components/alphabet_bar.php'); ?>

<article class="bg-old_paper-200 px-8">
    <section class="text-center">
        <h1 class="font-semibold">
            Welcome to the Comiclopedia, an illustrated compendium of over 14,000 comic
            artists from around the world. Find your favorite artists, or discover new
            ones!
        </h1>
        <p>
            Online since 1 November 1999, the Comiclopedia is the world's largest overview
            of comic artists, and the brainchild of comic shop Lambiek's founder Kees
            Kousemaker (1942-2010). Kees was at the vanguard of promoting comics as art,
            and both the Lambiek store and the website are continuing in his spirit. The
            editors/writers of the Comiclopedia are Bas Schuddeboom and Kjell Knudde.
            Please contact them for corrections or additions.

            Also visit: Lambiek's overview of Dutch Comics History (in Dutch) The history
            of Europe's oldest comics shop: The Story of Lambiek (in English and Dutch)
        </p>
    </section>
</article>
<?php require_once('../../components/footer.html') ?>
</div>
</body>
</html>