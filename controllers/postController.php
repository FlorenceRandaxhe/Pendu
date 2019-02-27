<?php

$gameOver = false;
$gameWon = false;
$lettersArray = unserialize(urldecode($_POST['lettersArray']));
$triedLetters = $_POST['triedLetters'];
$triedLetter = $_POST['triedLetter'];
$trials = $_POST['trials'];
$remainingTrials = $_POST['trials'];
$triedLetters .= $triedLetter;
$lettersArray[$triedLetter] = false; // supprime les lettres déjà utilisées

$wordsArray = getWordsArray();
$wordIndex = $_POST['wordIndex']; // fait en sorte que le mot ne change pas quand on propose une lettre
$word = strtolower(getWord($wordIndex, $wordsArray));
$lettersCount = $_POST['lettersCount'];
$replacementString = $_POST['replacementString']; // remplace les lettres du mot par des *
$letterFound = false;

for($i=0;$i<=$lettersCount;$i++){
    $letter = substr($word, $i, 1);
    if ($triedLetter === $letter ){
        $letterFound = true;
        $replacementString = substr_replace($replacementString, $triedLetter, $i, 1);
        // change les lettres trouvée
    }
}

if ($letterFound === false){
    $trials++;
}

$remainingTrials = MAX_TRIALS - $trials;

if ($remainingTrials <=0){
    $gameOver = true;
} elseif ($replacementString === $word) {
    $gameWon = true;
}