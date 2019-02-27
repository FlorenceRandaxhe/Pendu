<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= GAME_TITLE ?></title>  <!-- à rendre dynamique -->
</head>
<body>

    <div>
        <h1><?= GAME_TITLE ?> : trouve le mot en moins de <?= MAX_TRIALS ?> coups !</h1>
    </div>

    <div>
        <p>Le mot à deviner compte <?= $lettersCount; ?> lettres : <?= $replacementString; ?></p>
    </div>

    <div>
        <img src="images/pendu<?= $trials; ?>" srcset="" alt="">
    </div>
    <div>
        <p>Voici les lettres que tu as déjà essayées : <?= $triedLetters; ?></p>
    </div>

    <div>
        <?php if ($gameOver){
            // si game over est true, on affiche le failure (pour ne plus savoir jouer)
            include 'partials/failure.php';
        } elseif ($gameWon) {
            // si le jeu est gagné, on afiche le succes
            include 'partials/succes.php';
        } else {
            // game over est false, on affiche le formulaire
            include 'partials/form.php';
        }
        ?>


        <!-- si on a perdu, insérer le message de défaite -->

        <!-- si on a gagner, inséere le message de victoire -->

    </div>

</body>
</html>