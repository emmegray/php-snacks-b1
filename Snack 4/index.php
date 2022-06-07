<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$len = 15;
$min = 1;
$max = 100;
$array_numeri = [];

for ($i = 0; $i < $len; $i++) {
  $num = mt_rand($min, $max);
  if (in_array($num, $array_numeri)) {
    $i--;
  } else {
    $array_numeri[] = $num;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>

<body>
  <h1>Numeri casuali:</h1>
  <ul>
    <?php for ($i = 0; $i < count($array_numeri); $i++) : ?>
      <li>
        <?php echo $array_numeri[$i]; ?>
      </li>
    <?php endfor; ?>
  </ul>

</body>

</html>