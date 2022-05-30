<?php

$host = '127.0.0.1';
$db   = 'lambiek';
$user = 'bit_academy';
$pass = 'bit_academy';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Making PDO a global constant, so it becomes available for use inside the functions below
try {
    define('DB', new PDO($dsn, $user, $pass));
    DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

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
    $comic
        ->bindValue(':id', $id, PDO::PARAM_INT)
        ->execute();
    $comic = $comic->fetch();

    return ($comic) ?: false;
}

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

function searchArticles(string $key): array | false
{
    $articles = DB->prepare(
        "SELECT * 
        FROM `comiclopedia` 
        WHERE `firstname` 
        LIKE :keyword OR `firstname` LIKE :keyword 
        ORDER BY `lastname`"
    );
    $articles->execute([':keyword' => "%$key%"]);
    $articles = $articles->fetchAll();

    return ($articles) ?: false;
}
