<?php

  require_once  __DIR__ . '/movie.php';

  $movies = [
    new movie('shrek', 130, 'https://www.repstatic.it/content/nazionale/img/2023/04/05/113551482-a91e74f2-96a1-4f2a-b3ad-26ed8c5cf765.jpg'),

    new movie('spiderman', 201, 'https://mr.comingsoon.it/imgdb/locandine/big/1058.jpg'),
  ]

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>movie</title>
</head>
<body>
  <h1 class="text-center">Film</h1>  
    <div class="container">
      <div class="row row-cols-2">
        <?php foreach($movies as $movie): ?>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $movie->getImage() ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo $movie->getTitle() ?></h5>
            <p class="card-text">Durata: <?php echo $movie->getTime()?> minuti</p>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>