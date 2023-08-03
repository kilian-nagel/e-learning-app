<?php
try {
    $dbConnection = new PDO("mysql:host=localhost;dbname=e-learning", "root", "root");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
