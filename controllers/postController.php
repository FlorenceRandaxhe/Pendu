<?php

$lettersArray = unserialize(urldecode($_POST['lettersArray']));
$triedLetter = $_POST['triedLetter'];
$lettersArray[$triedLetter] = false;