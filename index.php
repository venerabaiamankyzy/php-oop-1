<?php
require_once __DIR__ . "/data/movies.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . "/template/head.php" ?>
  <title>PHP OOP</title>
</head>

<body>
  <div class="container">
    <h1 class="h1 mt-5">Movies</h1>
    <div class="row row-cols-3">
      <?php foreach($movies as $movie) : ?>
      <div class="col">
        <?php include __DIR__ . "/template/moviesCard.php" ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>