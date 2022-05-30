<?php

require_once('dbcon.php');

function findRandomComics(): array | false
{
    $comics = DB->query(
        "SELECT `id`, `title` 
        FROM `catalog` 
        ORDER BY RAND() 
        LIMIT 20"
    )->fetchAll();

    return ($comics) ?: false;
}

function findComicByID(int $id): array | false
{
    $comic = DB->prepare("SELECT * FROM `catalog` WHERE `id` = :id");
    $comic->bindValue(':id', $id, PDO::PARAM_INT);
    $comic->execute();
    $comic = $comic->fetch();

    return ($comic) ?: false;
}

function findComicsByArtistName(string $name): array | false 
{
    $comics = DB->prepare(
        "SELECT * 
        FROM `catalog` 
        WHERE `artist` = :artist 
        GROUP BY `artist`"
    );
    $comics->execute([':artist' => $name]);
    $comics = $comics->fetchAll();

    return ($comics) ?: false;
}

function searchComics(string $keyword, array $limit = [0,20]): array | false
{
    $articles = DB->prepare(
        "SELECT * 
        FROM `catalog` 
        WHERE `artist` LIKE :keyword 
        OR `series` LIKE :keyword 
        OR `genres` LIKE :keyword 
        OR `altkeywords` LIKE :keyword
        ORDER BY `artist`
        LIMIT :limstart, :limend"
    );
    $articles->bindValue(':keyword', "%$keyword%", PDO::PARAM_STR);
    $articles->bindValue(':limstart', $limit[0], PDO::PARAM_INT);
    $articles->bindValue(':limend', $limit[1], PDO::PARAM_INT);
    $articles->execute();
    $articles = $articles->fetchAll();

    return ($articles) ?: false;
}
