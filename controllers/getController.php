<?php

$gameOver = false; // défini gameOver sur false pour que ça affiche le formulaire
$gameWon = false;
$lettersArray = [
    'a' => true,
    'b' => true,
    'c' => true,
    'd' => true,
    'e' => true,
    'f' => true,
    'g' => true,
    'h' => true,
    'i' => true,
    'j' => true,
    'k' => true,
    'l' => true,
    'm' => true,
    'n' => true,
    'o' => true,
    'p' => true,
    'q' => true,
    'r' => true,
    's' => true,
    't' => true,
    'u' => true,
    'v' => true,
    'w' => true,
    'x' => true,
    'y' => true,
    'z' => true,
];

$wordsArray = getWordsArray(); // va chercher les mot dans le fichier txt
$wordIndex = getRandomIndex($wordsArray); // stocke un mot au hasard
$word = strtolower(getWord($wordIndex, $wordsArray));
$lettersCount = strlen($word); // compte la longueur de la chaîne
$replacementString = getReplacementString($lettersCount); // remplace les lettres du mot par des *
$remainingTrials = MAX_TRIALS; // les essais restant pour le jeu
$trials = 0; // numéro de la photo (correspond au numéro de l'essai)
$triedLetters = ''; // les lettres déjà essayé (au départ c'est une chaine vide)