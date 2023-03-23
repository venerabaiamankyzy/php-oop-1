<div class="card">
  <img src="<?= $movie->poster ?>" class="card-img-top img-fluid" alt="photo">
  <div class="card-body">
    <h5 class="card-title">
      <?= $movie->title ?>
    </h5>
    <p class="card-text"><?= $movie->year ?></p>
    <?php foreach($movie->genres as $genre) :?>
    <p class="card-text"><?= $genre->name ?></p>
    <?php endforeach; ?>
    <h6 class="h6"><?= $movie->director ?></h6>
  </div>
</div>