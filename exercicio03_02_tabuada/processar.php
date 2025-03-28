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
        <h2>Tabuada do <?= $numero ?></h2>
        <table>
            <thead>
                <th>Conta</th>
                <th>Resultado</th>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i <= 10; $i++) {
                    echo "<tr>";
                        echo "<td>$numero * $i</td>";
                        echo "<td>" . ($i * $numero) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>