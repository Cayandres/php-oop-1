<?php 

require_once __DIR__. '/Models/movies.php';

$jumanji = new Movie('Jumanji', 90, 'https://www.viaggioff.it/wp-content/uploads/2021/09/jumanji-e1632828246850-1024x634.jpg');

$hungergames = new Movie('Hunger Games', 130, 'https://images.alphacoders.com/273/273893.jpg');

$movies = [
  $jumanji,
  $hungergames
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <title>Movies</title>
</head>
<body>

<header>
  <h1>Movies</h1>
</header>

<main>
  <div class="container">
    <div class="row row-cols-3">
      <?php foreach($movies as $movie): ?>
      <div class="col p-4">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo $movie->poster ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $movie->title ?></h5>
            <p class="card-text"><?php echo $movie->duration ?> min</p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>
  
</body>
</html>