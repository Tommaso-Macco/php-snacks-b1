<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
    <?php
        $min = 10;
        $max= 1000;
        $nItems = 15;
    ?>


</head>
<body>
    <!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

    <?php
        getArrayOfIntegers($min, $max, $nItems);
        {
            $arrayNumber = [];

            while (count($arrayNumber) < $nItems) {
                $rnd = rand($min, $max);
                if (!in_array($rnd, $arrayNumber)) {
                    $arrayNumber []= $rnd;
                }
            }
            return $arrayNumber;
        }
    ?>
    <div>
        <?php
            for ($i=0; $i < count($arrayNumber) ; $i++) { 
                echo '<h2>' . $arrayNumber[$i] . '<h2>';
            }
           echo var_dump($arrayNumber)
        ?>
    </div>
</body>
</html>