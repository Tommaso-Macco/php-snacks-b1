<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
    <?php
        $posts = [
            '10/12/2021' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo Post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Giovanni Aluas',
                    'text' => 'Testo Post 2'
                ],
            ],
            '11/12/2021' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Sandro Losim',
                    'text' => 'Testo Post 3'
                ],
            ],
            '19/12/2021' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Lorenzo Salvatore',
                    'text' => 'Testo Post 4'
                ],
            ],
        ];
    ?>
</head>
<body>
    <div>
        <?php
            $myArray = array_keys($posts);
            for ($i = 0; $i < count($myArray); $i++) { 
                echo '<h2>' . $myArray[$i] . '<h2>';
            };
        ?>
    </div>
<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->
</body>
</html>