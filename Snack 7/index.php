<!--
  Creare un array contenente qualche alunno di un’ipotetica classe.
  Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
  Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

$min = 2;
$max = 10;


$alunni = [
  ['nome' => 'Mario', 'cognome' => 'Rossi', 'voti' => [mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max)]],
  ['nome' => 'Luigi', 'cognome' => 'Bianchi', 'voti' => [mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max)]],
  ['nome' => 'Tizio', 'cognome' => 'Coso', 'voti' => [mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max)]],
  ['nome' => 'Anna', 'cognome' => 'Verdi', 'voti' => [mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max), mt_rand($min, $max)]],
];

function media_array($array_numeri)
{
  $media = 0;

  foreach ($array_numeri as $numero) {
    $media = $media + $numero;
  }

  return $media / count($array_numeri);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>

<body>
  <ul>
    <?php for ($i = 0; $i < count($alunni); $i++) : ?>
      <li>
        <?php echo $alunni[$i]['nome'] . ' ' . $alunni[$i]['cognome'] . ' - media: ' . media_array($alunni[$i]['voti']) ?>
      </li>
    <?php endfor; ?>
  </ul>
</body>

</html>