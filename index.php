<?php
require_once __DIR__. '/Model/Production.php';
require_once __DIR__. '/Model/TvSerie.php';
require_once __DIR__. '/Model/Anime.php';
require_once __DIR__. '/Model/Media.php';
require_once __DIR__. '/Model/Movie.php';
require_once __DIR__. '/db/db.php';

if(isset($_POST['category'])){
  $switch = $_POST['category'];
}else{
  $switch = 'All';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>MOVIE OOP </title>
</head>
<body>
  <h1 class="text-center">
    Pete's Movie Night
  </h1>

  <div class="container-custom  d-flex flex-wrap mb-5  ">
  
  <div class="custom-form">

    <form class="d-flex align-items-center " method="post">
  
        <select class="form-select custom-select" aria-label="Default select example" name="category">
          <option value="All">All</option>
          <option value="Movie">Movie</option>
          <option value="TvSerie">Tv-Series</option>
          <option value="Anime">Anime</option>
        </select>
  
        <button class="custom-btn" type="submit">ENTER</button>
      </form>
  </div>

    <?php foreach($productions as $production): ?>

      <?php if(get_class($production) === $switch || $switch === 'All'):?>
      <div class="card-custom mx-3 d-flex ">
      <div class="img-container">

        <img class="card-img-top" src="<?php echo $production->poster?->file_name ?? 'img/placeholder.jpg'?>" alt="<?php echo $production->poster?->name ?? $production->title?>">
      </div>
      <div class="card-body">
        <h4 class="card-title"><?php echo $production->title ?></h4>
        <p class="card-text mb-5 description"><?php echo $production->description ?></p>

        <div class="datas">
          <p> <?php echo $production->getTimeData() ?> </p>
          <p class="card-text genres"><strong>GENRES:</strong> <?php echo implode(', ', $production->genres) ?></p>
        </div>
        
      </div>
      </div>

      <?php endif; ?>
    <?php endforeach; ?>

  </div>
  
</body>
</html>