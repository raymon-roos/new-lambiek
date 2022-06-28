<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoekpoging</title>
</head>

<body>
    <?php include 'dbcon.php';

    if ($_POST['submit']) {
        $key = $_POST['key'];
        $query = $conn->prepare('SELECT * FROM Auteurs WHERE Naam  Like  :keyword ORDER BY Naam');
        $query->bindValue(':keyword', '%' . $key . '%', PDO::PARAM_STR);
        $query->bindValue(':keyword', '%' . $key . '%', PDO::PARAM_STR);
        $query->execute();
        // $results=$query->fetchAll();
        // $rows=$query->rowCount();
        while ($results = $query->fetchAll()) {
            echo '<ul>';
            foreach ($results as $result) {
                echo '<li>' . $result['Naam'] . ' ' . $result['Achternaam'] . '</li>';
            }
            echo '</ul>';
        }
    }
    ?>
    <?php
    if ($_POST['submit']) {
        $key = $_POST['key'];
        $query = $conn->prepare('SELECT * FROM Auteurs WHERE Achternaam  Like  :keyword ORDER BY Achternaam');
        $query->bindValue(':keyword', '%' . $key . '%', PDO::PARAM_STR);
        $query->bindValue(':keyword', '%' . $key . '%', PDO::PARAM_STR);
        $query->execute();
        // $results=$query->fetchAll();
        // $rows=$query->rowCount();
        while ($results = $query->fetchAll()) {
            echo '<ul>';
            foreach ($results as $result) {
                echo '<li>' . $result['Naam'] . ' ' . $result['Achternaam'] . '</li>';
            }
            echo '</ul>';
        }
    }

    ?>



    <div class="container">
        <form action="index.php" method="post">
            <input type="search" placeholder="Search for users ..." name="key">
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>

</html>