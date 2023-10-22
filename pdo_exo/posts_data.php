<?php

try {
    $connection = new PDO(
        "mysql:host=localhost;port=3306;dbname=blog;charset=utf8mb4",
        "root",
        ""  // Replace with your actual password
    );

    // Set PDO to throw exceptions on errors
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $connection->query('SELECT * FROM posts;');
    $posts = $statement->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

    ?>
   