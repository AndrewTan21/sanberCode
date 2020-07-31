<?php
    // index.php
    require 'animal.php';

    $sungokong = new Ape("kera sakti");
    echo $sungokong->yell() . "<br/>"; // "Auooo"

    $kodok = new Frog("buduk");
    echo $kodok->jump(); // "hop hop"

    var_dump($sungokong);
    var_dump($kodok);
?>