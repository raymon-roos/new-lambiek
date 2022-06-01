<?php

function findArtistsByLetter(string $letter): array | false 
{
    $artists = DB->prepare(
        "SELECT `firstname`, `lastname` 
        FROM `comiclopedia` 
        WHERE LEFT(`lastname`,1) = :letter 
        GROUP BY `lastname`"
    );
    $artists->execute([':letter' => $letter]);
    $artists = $artists->fetchAll();

    return ($artists) ?: false;
}

function findRandomArticles(): array | false
{
    $articles = DB->query(
        "SELECT * 
        FROM `comiclopedia` 
        ORDER BY RAND() 
        LIMIT 20"
    )->fetchAll();

    return ($articles) ?: false;
}


function findArticleByName(string $name): string | false
{
    $article = DB->prepare(
        "SELECT `content` 
        FROM `comiclopedia` 
        WHERE `lastname` = :lastname"
    );
    $article->execute([':lastname' => $name]);
    $article = $article->fetch();

    return ($article['content']) ?: false;
}

function searchArticles(
    string $searchTerm, 
    array $filters = ['firstname', 'lastname', 'realname', 'pagetitle', 'keywords'], 
    array $limit = [0,20]
): array | false {

    foreach ($filters as $columnName) {
        $sqlString[] = "`$columnName` LIKE :searchTerm";
    }
    $sqlString = implode(' OR ', $sqlString);

    $articles = DB->prepare(
        "SELECT * 
        FROM `comiclopedia` 
        WHERE $sqlString
        ORDER BY `lastname`
        LIMIT :limstart, :limend"
    );
    $articles->bindValue(':searchTerm', "%$searchTerm%", PDO::PARAM_STR);
    $articles->bindValue(':limstart', $limit[0], PDO::PARAM_INT);
    $articles->bindValue(':limend', $limit[1], PDO::PARAM_INT);
    $articles->execute();

    $articles = $articles->fetchAll();

    return ($articles) ?: false;
}
