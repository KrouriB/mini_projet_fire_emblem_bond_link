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
                        <a href="index.php?ctrl=show&action=lessEmblem&id=<?= $qtt->getHeros()->getId() ?>&id2=<?= $qtt->getAnneau()->getId() ?>&id3=<?= $qtt->getHeros()->getEmblem() ?>">-</a>
                        <span><?= $qtt->getQttNb() ?></span>
                        <a href="index.php?ctrl=show&action=moreEmblem&id=<?= $qtt->getHeros()->getId() ?>&id2=<?= $qtt->getAnneau()->getId() ?>&id3=<?= $qtt->getHeros()->getEmblem() ?>">+</a>
                    </div>
                </div>
            <?php }
    ?>
</div>