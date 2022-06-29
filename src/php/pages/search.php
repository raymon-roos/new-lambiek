<?php

if (!$_POST['search']) {
    header("Location: /src/php/pages/comiclopedia.php");
    exit();
}

foreach ($_POST as $inputField => $inputValue) {
    if (preg_match('/^filter/', $inputField)) {
        $filters[] = match ($inputField) {
            // Preventing SQL injection by hardcoding possible filters
            // Otherwise an attacker could create additional form elements
            // in their client, with malicious sql in the name atribute
            'filterFirstName' => 'firstname',
            'filterLastName' => 'lastname',
            'filterRealName' => 'realname',
            'filterPageTitle' => 'pagetitle',
            'filterKeywords' => 'keywords',
            'filterContent' => 'content',
            'filterCountry' => 'country',
            default => ''
        };
    }
}

// array_filter() will remove elements that evaluate as empty()
require_once('../common/pdo.php');
$results = (!empty($filters)) ?
    searchArticles($_POST['search'], array_filter($filters)) :
    searchArticles($_POST['search']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../img/index.ico">
    <title>Search</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body>
<div class="page_content">

    <?php require_once('../../components/header.html'); ?>

    <?php require_once('../../components/search_bar.html'); ?>

    <article class="px-8 ">
        <section class="grid gap-4 grid-cols-3 w-full mx-auto">
                <?php if ($results) {
                    foreach ($results as $result) { ?>
                    <div class="bg-modern_white_smoke shadow-xl text-modern_dark_blue">
                        <a href="artist_details.php?artist=<?= $result['id'] ?>" class="flex flex-col items-center">
                            <p class="flex-wrap uppercase font-semibold text-modern_dark_blue"><?= $result['firstname'] ?> <?= $result['lastname'] ?></p>
                            <?php if ($result['altpics'] == 'comicolopedia') {
                                $imgURI = str_replace(['.html', '.htm'], '/', $result['link']) . $result['imgofn']; ?>
                            <img src="https://lambiek.net/artists/image/<?= $imgURI ?>" alt=" something went wrong " class="object-cover w-96 h-96 bg-center">
                            <?php } else { ?>
                            <img src="https://lambiek.net/artists/image/<?= $result['imgofn'] ?>" alt="" class="object-cover w-96 h-96 bg-center">
                            <?php } ?>
                            <p class="flex-wrap "><?= $result['life'] ?></p>
                        </a>
                    </div>
                    <?php }
                } else { ?>
                    <p>No matches were found</p>
                <?php } ?>
        </section>
        <section>
            <div class="flex justify-center">
                <p>Show: (not yet working)</p>
                <a href="search.php?limit=20">20|</a>
                <a href="search.php?limit=50">50|</a>
                <a href="search.php?limit=100">100</a>
            </div>
        </section>
    </article>
<?php require_once('../../components/footer.html') ?>
</div>
</body>
</html>
