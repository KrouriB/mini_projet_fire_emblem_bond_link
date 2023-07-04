<?php

    $qtts = $result["data"]['qtt'];
    $emblem = $result["data"]['emblem'];

    foreach($emblem as $title){
        echo "<h1>".$title->getPerso()."</h1>";
    }

?>
<div id="container">
    <?php
        foreach($qtts as $qtt){ ?>
                <div class="aSingleRing twelve">
                    <h4><?= $qtt->getHeros()->getNom() ?> <?= $qtt->getAnneau()->getLettre() ?></h4>
                    <a href="#">-</a>
                    <span><?= $qtt->getQtt() ?></span>
                    <a href="#">+</a>
                </div>
            <?php }
    ?>
</div>