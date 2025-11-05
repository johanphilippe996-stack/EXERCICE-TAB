<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <?php
    function table($type, $nombre) {
    echo "Table de $type de $nombre :<br>";

    for ($i = 1; $i <= 10; $i++) {
        switch ($type) {
            case "addition":
                $resultat = $nombre + $i;
                echo "$nombre + $i = $resultat <br>";
                break;

            case "soustraction":
                $resultat = $nombre - $i;
                echo "$nombre - $i = $resultat <br>";
                break;

            case "multiplication":
                $resultat = $nombre * $i;
                echo "$nombre x $i = $resultat <br>";
                break;

            case "division":
                if ($i != 0) {
                    $resultat = $nombre / $i;
                    echo "$nombre ÷ $i = $resultat <br>";
                } else {
                    echo "Division par zéro impossible<br>";
                }
                break;

            default:
                echo "Type de table inconnu : $type<br>";
                return;
        }
    }
}

table("soustraction", 6);
    ?>
</body>
</html>