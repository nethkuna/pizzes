<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>FES LA TEVA PIZZA</title>
</head>
<a href="pizza.html">Retorna al formulari de selecció d’ingredients</a>
<body>
    <?php
    $preu = 8;
    $IVA = 21;

    if (empty($_GET['ingr'])) {
        $pvp = ((100 + $IVA) / 100) * $preu;
        echo "Has demanat només la pizza bàsica. El preu és $pvp € (IVA inclòs)<br>";
        # exit(0);
    } else {
        $pvp = ((100 + $IVA) / 100) * ($preu + count($_GET['ingr']));
        echo "Has demanat la pizza bàsica amb:<br>";
        foreach ($_GET['ingr'] as $ingredient) {
            if ($ingredient) {
                echo "* $ingredient<br>";
            }
        }
        echo "El preu és $pvp € (IVA inclòs)<br>";
        # exit(0);
    }

    echo "<br>";
    echo "Autor: jasofe<br>";
    ?>
</body>
</html>
