<?php

require_once('../../components/header.html');
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
<div class="w-9/12 mx-auto">
    <article class="bg-old_paper-200 p-28">
        <section class="text-justify font-serif">
            <div class="">
                <?php if ($article) { ?>
                    <p><?= $article ?></p>
                <?php } else { ?>
                    <div>No article was found for this artist.</div>
                <?php }?>
            </div>

            <div>
            </div>
        </section>
    </article>
</div>

</body>
</html>
