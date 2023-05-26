<?php

  require_once  __DIR__ . '/movie.php';

  $shrek = new movie('shrek', 130, 'https://www.repstatic.it/content/nazionale/img/2023/04/05/113551482-a91e74f2-96a1-4f2a-b3ad-26ed8c5cf765.jpg');
  
  $spiderman = new movie('spiderman', 201, 'https://mr.comingsoon.it/imgdb/locandine/big/1058.jpg');
  var_dump($shrek);
  var_dump($spiderman);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>movie</title>
</head>
<body>
  
</body>
</html>