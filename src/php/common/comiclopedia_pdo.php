<?php

function findArtistsByLetter(string $letter): array | false
{
    $artists = DB()->prepare(
        "SELECT `id`, `firstname`, `lastname`
        FROM `comiclopedia`
        WHERE LEFT(`lastname`,1) = :letter
        ORDER BY `lastname`"
    );
    $artists->execute([':letter' => $letter]);
    $artists = $artists->fetchAll();

    return ($artists) ?: false;
}

function findRandomArticles(): array | false
{
    $articles = DB()->query(
        "SELECT pedia.`id`, pedia.`name`, pics.`imgofn`,
            pedia.`pagelink` AS `link`,
            pics.`category` AS altpics
        FROM `comiclopedia` AS `pedia` LEFT JOIN `comiclopedia_pics` AS `pics`
        ON pedia.`id` = pics.`refid`
        WHERE pedia.`category` NOT LIKE 'obsolete'
        AND pedia.`online` = '1'
        GROUP BY pedia.`name`
        ORDER BY RAND()
        LIMIT 6"
    )->fetchAll();

    return ($articles) ? fixBrokenImageURI($articles) : false;
}

function findUpdatedArticles(): array | false
{
    $newestArticles = DB()->query(
        "SELECT pedia.`id`, `lastname`, `name`, `imgofn`, `lastupdate`,
            pedia.`pagelink` AS `link`,
            pics.`category` as `altpics`
        FROM `comiclopedia` AS `pedia` LEFT JOIN `comiclopedia_pics` AS `pics`
        ON pedia.`id` = pics.`refid`
        WHERE pedia.`category` NOT LIKE 'obsolete'
        AND pedia.`online` = '1'
        GROUP BY pedia.`name`
        ORDER BY pedia.`lastupdate` DESC
        LIMIT 6"
    )->fetchAll();

    return ($newestArticles) ? fixBrokenImageURI($newestArticles) : false;
}

function findArticleByID(int $id): array | false
{
    $article = DB()->prepare(
        "SELECT `pagetitle`, `pagename`, `name`, `life`, `content`, `lastupdate`, `copyright`, `credits`, `website`
        FROM `comiclopedia`
        WHERE `id` = :id"
    );
    $article->bindValue(':id', $id, PDO::PARAM_INT);
    $article->execute();
    $article = $article->fetch();

    return ($article) ?: false;
}

function searchArticles(string $searchTerm, array $filters = ['firstname', 'lastname', 'name', 'realname', 'pagetitle', 'keywords']): array | false
{

    function articleSearchHelper($filter, $searchTerm)
    {
        $articles = DB()->prepare(
            "SELECT pedia.`id`, `firstname`, `lastname`, `life`, `imgofn`,
            pedia.`pagelink` AS `link`,
            pics.`category` AS altpics
        FROM `comiclopedia` AS `pedia` LEFT JOIN `comiclopedia_pics` AS `pics`
        ON pedia.`id` = pics.`refid`
        WHERE $filter LIKE :searchTerm
        AND pedia.`category` NOT LIKE 'obsolete'
        AND pedia.`online` = '1'
        GROUP BY pedia.`name`
        ORDER BY `lastname`
        LIMIT 45"
        );
        $articles->execute([':searchTerm' => "%$searchTerm%"]);
        $articles = $articles->fetchAll();

        return ($articles) ? fixBrokenImageURI($articles) : false;
    }

    // foreach ($filters as $columnName) {
    //     $sqlString[] = "`$columnName` LIKE :searchTerm";
    // }
    // $sqlString = implode(' OR ', $sqlString);

    foreach ($filters as $filter) {
        $articles[$filter] = (articleSearchHelper($filter, $searchTerm)) ?: [];
    }

    return (array_filter($articles)) ?: false;
}

function getSearchSuggestions(string $searchTerm): array
{
    $articles = DB()->prepare(
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
        GROUP BY `name`
        LIMIT 25"
    );
    $articles->execute([':searchTerm' => "$searchTerm%"]);
    $articles = $articles->fetchAll();

    return ($articles) ?: [];
}

function fixBrokenImageURI(array $articles): array
{
    foreach ($articles as &$article) {
        if ($article['altpics'] == 'comicolopedia') {
            $article['imgofn'] = str_replace(['.html', '.htm'], '/', $article['link']) . $article['imgofn'];
        }
    }

    return $articles;
}
