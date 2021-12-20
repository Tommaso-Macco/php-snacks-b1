<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
    <?php
        $primaPartita = [
            'casa' => 'Genova',
            'ospite' => 'Milano',
            'puntiCasa' => '42',
            'puntiOspite' => '40',
        ];
        $secondaPartita = [
            'casa' => 'Torino',
            'ospite' => 'Firenze',
            'puntiCasa' => '32',
            'puntiOspite' => '54',
        ];
        $terzaPartita = [
            'casa' => 'Cagliari',
            'ospite' => 'Palermo',
            'puntiCasa' => '41',
            'puntiOspite' => '54',
        ];
        $quartaPartita = [
            'casa' => 'Pisa',
            'ospite' => 'Venezia',
            'puntiCasa' => '48',
            'puntiOspite' => '76',
        ];
        $quintaPartita = [
            'casa' => 'Milano',
            'ospite' => 'Roma',
            'puntiCasa' => '45',
            'puntiOspite' => '32',
        ];
    ?>
</head>
<body>
    <!-- ## Snack 1
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <div>
        <?php
            echo $primaPartita['casa'] . " VS " . $primaPartita['ospite'] . " | " . $primaPartita['puntiCasa'] . " - " . $primaPartita['puntiOspite']
        ?>
    </div>
    <div>
        <?php
            echo $secondaPartita['casa'] . " VS " . $secondaPartita['ospite'] . " | " . $secondaPartita['puntiCasa'] . " - " . $secondaPartita['puntiOspite']
        ?>
    </div>
    <div>
        <?php
            echo $terzaPartita['casa'] . " VS " . $terzaPartita['ospite'] . " | " . $terzaPartita['puntiCasa'] . " - " . $terzaPartita['puntiOspite']
        ?>
    </div>
    <div>
        <?php
            echo $quartaPartita['casa'] . " VS " . $quartaPartita['ospite'] . " | " . $quartaPartita['puntiCasa'] . " - " . $quartaPartita['puntiOspite']
        ?>
    </div>
    <div>
        <?php
            echo $quintaPartita['casa'] . " VS " . $quintaPartita['ospite'] . " | " . $quintaPartita['puntiCasa'] . " - " . $quintaPartita['puntiOspite']
        ?>
    </div>
</body>
</html>