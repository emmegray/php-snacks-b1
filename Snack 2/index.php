<!--
  Passare come parametri GET name, mail e age
  Verificare che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”
  Altrimenti “Accesso negato”
-->

<?php

$risultato = true;

if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
  $risultato = false;
} elseif (strlen($_GET['name']) < 3) {
  $risultato = false;
} elseif (!strpos($_GET['mail'], '@') || !strtr($_GET['mail'], '.')) {
  $risultato = false;
} elseif (!is_numeric(($_GET['age']))) {
  $risultato = false;
}

if ($risultato) {
  $risultato = 'Accesso riuscito';
} else {
  $risultato = 'Accesso negato';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>

<body>
  <h3>Mail Control</h3>
  <p><?php echo $risultato ?></p>
</body>

</html>