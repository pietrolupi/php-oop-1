<?php
require_once __DIR__. '/Model/Production.php';
require_once __DIR__. '/Model/TvSerie.php';
require_once __DIR__. '/Model/Media.php';
require_once __DIR__. '/Model/Movie.php';
require_once __DIR__. '/db/db.php';

$gameof = new TvSerie('got', 'blablabla', ['fantasy', 'drama'], new Media('img/American_Psycho.png', 'gameofthrones'), 1998, 2001, 49, 8);

$fightClub = new Movie('Fightclub', 'xdddddddddd', ['action', 'drama'], new Media('img/fightclub.webp', 'fightCLuuu'), 1998, 2.56 );
var_dump($fightClub);
var_dump($gameof);

die;
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

    <?php foreach($movies as $movie): ?>

      <div class="card mx-3 " style="width: 25rem;">
      <div class="img-container">

        <img class="card-img-top" src="<?php echo $movie->poster?->file_name?>" alt="<?php echo $movie->poster?->name?>">
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $movie->title ?></h5>
        <p class="card-text mb-5 description"><?php echo $movie->description ?></p>
        <p class="card-text genres"><strong>GENERI:</strong> <?php echo implode(', ', $movie->genres) ?></p>
        
      </div>
      </div>

    <?php endforeach; ?>

  </div>
  
</body>
</html>