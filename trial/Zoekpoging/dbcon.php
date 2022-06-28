<?php
    // $dsn = "mysql:dbname=Lambiek;host=localhost";
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
try {
        $conn = new PDO("mysql:host=$servername;dbname=Lambiek", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected to server";
} catch (PDOEXception $e) {
        echo $e->getMessage();
}
?>
