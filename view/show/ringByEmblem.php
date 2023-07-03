<?php
    $qtts = $result["data"]['qtt'];
    $emblem = $result["data"]['emblem'];

    foreach($emblem as $a){
        echo "<h1>".$a->getPerso()."</h1>";
    }
?>

