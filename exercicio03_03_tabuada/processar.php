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
                <?php for ($i = 0; $i <= 10; $i++): ?>
                    <tr>
                        <td><?= "$numero x $i" ?></td>
                        <td><?= ($numero * $i) ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</body>

</html>