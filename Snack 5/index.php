<!--
  Prendere un paragrafo abbastanza lungo.
  Prendere il paragrafo e suddividerlo in tanti paragrafi.
  Ogni punto un nuovo paragrafo.
-->

<?php

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita accusamus aperiam aut similique doloribus ipsum voluptatum incidunt consequuntur ea atque aliquam facere deserunt eligendi distinctio, quae ex repudiandae laborum iste";
$parts = explode(".", $text);

print_r($parts);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>

<body>
  <ul>
    <?php for ($i = 0; $i < count($parts); $i++) : ?>
      <li>
        <?php echo $parts[$i] ?>
      </li>
    <?php endfor; ?>
  </ul>
</body>

</html>