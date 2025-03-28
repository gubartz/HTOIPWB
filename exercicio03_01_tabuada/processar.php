<?php
$numero = $_POST["numero"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="estilo.css">
    <title>Document</title>
</head>

<body>
    <div class="resultado">
        <h2>Tabuada do <?=$numero?></h2>
        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "$numero * $i = ";
            echo ($i * $numero);
            echo "<br />";
        }
        ?>
    </div>
</body>

</html>