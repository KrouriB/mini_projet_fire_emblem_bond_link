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
                <div class="aSingleRing ten">
                    <h4><?= $qtt->getHeros()->getNom() ?>&nbsp;<?= $qtt->getAnneau()->getLettre() ?></h4>
                    <div>
                        <a href="index.php?ctrl=show&action=less&id=<?= $qtt->getHeros()->getId() ?>">-</a>
                        <span><?= $qtt->getQtt() ?></span>
                        <a href="index.php?ctrl=show&action=more&id=<?= $qtt->getHeros()->getId() ?>">+</a>
                    </div>
                </div>
            <?php }
    ?>
</div>