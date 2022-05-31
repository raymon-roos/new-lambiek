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

<?php require_once('../../components/header_comiclopedia.html'); ?>


<body class="bg-old_paper-100">
<div class="w-9/12 mx-auto">
    <article class="bg-old_paper-200 p-8">
        <section class="">
            <?php echo ($article) ?: 'No article was found for this artist.' ?>
        </section>
    </article>
</div>

</body>
</html>
