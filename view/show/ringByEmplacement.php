<?php

    $qtts = $result["data"]['qtt'];

?>
<div id="container">
    <?php
        foreach($qtts as $qtt){ ?>
                <div class="aSingleRing twelve">
                    <h5><?= $qtt->getHeros()->getNom() ?>&nbsp;<?= $qtt->getAnneau()->getLettre() ?></h5>
                    <div>
                        <a href="index.php?ctrl=show&action=lessEmplacement&id=<?= $qtt->getHeros()->getId() ?>&id2=<?= $qtt->getAnneau()->getId() ?>&id3=<?= $qtt->getHeros()->getEmplacement() ?>">-</a>
                        <span><?= $qtt->getQttNb() ?></span>
                        <a href="index.php?ctrl=show&action=moreEmplacement&id=<?= $qtt->getHeros()->getId() ?>&id2=<?= $qtt->getAnneau()->getId() ?>&id3=<?= $qtt->getHeros()->getEmplacement() ?>">+</a>
                    </div>
                </div>
            <?php }
    ?>
</div>