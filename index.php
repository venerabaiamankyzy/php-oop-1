<?php
class Movie {
  public $title;  
  public $year;
  public $poster;
  public $genre;  
  public $director;

  public function __construct(
    string $_title,
    int $_year,
    string $_poster,
    string $_genre,
    string $_director = "unknown"    
  )  {
    $this->setTitle($_title);
    $this->year = $_year;
    $this->poster = $_poster;
    $this->genre = $_genre;
    $this->director = $_director;   
  }

  public function setTitle($title) {
    if(!is_string($title) || $title === "") return false;
    $this->title = $title;
  }
  
}

$movies = [
  new Movie(
    "Eat Pray Love", 2010, "https://serenaitalian.files.wordpress.com/2010/12/eat-pray-love-tickets.jpg", "Drama", "Ryan Murphy"
  ),
  new Movie(
    "The Notebook", 2004, "https://site.unibo.it/canadausa/it/recensioni/the-notebook-e-l-amore-senza-tempo/@@eod.tiles.richtext/8d24320b6eed4bcc98b7d586232c96ad/@@images/34491dcd-3e26-4552-8705-2b5ef90d04f7.jpeg", "Drama", "	Nick Cassavetes"
  ),
  new Movie(
    "The Godfather", 1972, "https://media.timeout.com/images/105455970/1372/1029/image.jpg", "Thrillers", "Francis Ford Coppola"
  ),
  
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>PHP OOP</title>
</head>

<body>
  <div class="container">
    <h1 class="h1 mt-5">Movies</h1>
    <div class="row row-cols-3">
      <?php foreach($movies as $movie) : ?>
      <div class="col">
        <div class="card">
          <img src="<?= $movie->poster ?>" class="card-img-top img-fluid" alt="photo">
          <div class="card-body">
            <h5 class="card-title">
              <?= $movie->title ?>
            </h5>
            <p class="card-text"><?= $movie->year ?></p>
            <p class="card-text"><?= $movie->genre ?></p>
            <h6 class="h6"><?= $movie->director ?></h6>
          </div>
        </div>
      </div><?php endforeach; ?>
    </div>
  </div>
</body>

</html>