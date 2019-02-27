<?php
 function getWordsArray()
 {
     return file(FILE_PATH, FILE_IGNORE_NEW_LINES);
     // récupère le fichiers avec les mots + supprime le retour à la ligne (sinon une lettre en plus)
 }

 function getRandomIndex($wordsArray)
 {
    return rand(0,count($wordsArray)-1);
    // choisi un mot au hasard
 }

 function getWord($index, $wordsArray)
 {
     return $wordsArray[$index];
 }

 function getReplacementString($count){
     return str_repeat(REPLACEMENT_CHAR, $count);
 }