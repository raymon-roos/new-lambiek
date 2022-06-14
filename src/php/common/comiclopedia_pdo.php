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

function findUpdatedArticles(): array | false
{
    $newestArticles = DB->query(
        "SELECT * 
        FROM `comiclopedia` 
        ORDER BY `lastupdate` 
        LIMIT 6"
    )->fetchAll();

    return ($newestArticles) ?: false;
}


function findArticleByName(string $name): array | false
{
    $article = DB->prepare(
        "SELECT `content`, `copyright`, `credits` 
        FROM `comiclopedia` 
        WHERE `lastname` = :lastname"
    );
    $article->execute([':lastname' => $name]);
    $article = $article->fetch();

    return ($article) ?: false;
}

function searchArticles(
    string $searchTerm, 
    array $filters = ['firstname', 'lastname', 'name', 'realname', 'pagetitle', 'keywords'], 
): array | false {

    foreach ($filters as $columnName) {
        $sqlString[] = "`$columnName` LIKE :searchTerm";
    }
    $sqlString = implode(' OR ', $sqlString);

    $articles = DB->prepare(
        "SELECT `firstname`, `lastname`, `name`, `realname`, `pagetitle`, `keywords`, `country`, `category`, `online` 
        FROM `comiclopedia` 
        WHERE ($sqlString)
        AND `category` NOT LIKE 'obsolete' 
        AND `online` = '1'
        ORDER BY `lastname`
        LIMIT 60"
    );

    $articles->execute([':searchTerm' => "%$searchTerm%"]);
    $articles = $articles->fetchAll();

    return ($articles) ?: false;
}

function getSearchSuggestions(string $searchTerm): array
{
    $articles = DB->prepare(
        "SELECT `name`
        FROM `comiclopedia` 
        WHERE (`firstname` LIKE :searchTerm 
            OR `lastname` LIKE :searchTerm 
            OR `name` LIKE :searchTerm
            OR `realname` LIKE :searchTerm 
            OR `pagetitle` LIKE :searchTerm 
            OR `keywords` LIKE :searchTerm)
            AND `category` NOT LIKE 'obsolete' 
            AND `online` = '1'
        GROUP BY `lastname`
        LIMIT 25"
    );
    $articles->execute([':searchTerm' => "$searchTerm%"]);
    $articles = $articles->fetchAll();

    return ($articles) ?: [];
}
