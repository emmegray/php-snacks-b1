<!-- 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.

esempio:
Olimpia Milano - Cantù | 55-60
-->

<?php

$squadra_casa = ['Olimpia Milano', 'Urania Milano', 'Sanga Milano', 'Aresium Milano'];
$squadra_ospite = ['Virtus Bologna', 'Derthona Tortona', 'New Basket Brindisi', 'Pallacanestro Varese'];

$partite_basket = [
  ['squadra1' => $squadra_casa[0], 'squadra2' => $squadra_ospite[0], 'punteggio1' => 1, 'punteggio2' => 0],
  ['squadra1' => $squadra_casa[1], 'squadra2' => $squadra_ospite[1], 'punteggio1' => 1, 'punteggio2' => 0],
  ['squadra1' => $squadra_casa[2], 'squadra2' => $squadra_ospite[2], 'punteggio1' => 1, 'punteggio2' => 0],
  ['squadra1' => $squadra_casa[3], 'squadra2' => $squadra_ospite[3], 'punteggio1' => 1, 'punteggio2' => 0],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>

<body>
  <h2>Partite di basket in corso:</h2>
  <ul>
    <?php for ($i = 0; $i < count($partite_basket); $i++) : ?>
      <li>
        <?php echo $partite_basket[$i]['squadra1'] . ' - ' . $partite_basket[$i]['squadra2'] . ' | ' . $partite_basket[$i]['punteggio1'] . ' - ' . $partite_basket[$i]['punteggio2']; ?>
      </li>
    <?php endfor; ?>
  </ul>
</body>

</html>