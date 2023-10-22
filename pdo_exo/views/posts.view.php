<?php 
require_once "../partials/header.php";
?>
<body>
  <?php 
   require_once "../partials/nav.php";
  ?>

  <main class="container">  
    <?php 

      try {
          $connection = new PDO(
              "mysql:host=localhost;port=3306;dbname=blog;charset=utf8mb4",
              "root",
              ""  
          );

          // Set PDO to throw exceptions on errors
          $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $statement = $connection->query('SELECT * FROM posts;');
          $posts = $statement->fetchAll(PDO::FETCH_ASSOC); 
      } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
      
      foreach($posts as $post) :    
    ?>
      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">
          <?php echo $post['title'] ?>
        </h2>
        <p class="blog-post-meta">
          <?php echo $post['created_at'] ?>
          <a href="#"><?php echo $post['author'] ?></a>
        </p>

        <p>
          <?php echo $post['content'] ?>
        </p>
      </article>
     <?php endforeach; ?>
  </main>

<?php
require_once "../partials/footer.php";
