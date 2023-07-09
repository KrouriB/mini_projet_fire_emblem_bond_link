<?php

    $qtts = $result["data"]['qtt'];

?>
<div id="container">
    <?php
        foreach($qtts as $qtt){ ?>
                <div class="aSingleRing twelve">
                    <h4><?= $qtt->getHeros()->getNom() ?></h4>
                    <div>
                        <a href="index.php?ctrl=show&action=lessRarity&id=<?= $qtt->getHeros()->getId() ?>&id2=<?= $qtt->getAnneau()->getId() ?>">-</a>
                        <span><?= $qtt->getQttNb() ?></span>
                        <a href="index.php?ctrl=show&action=moreRarity&id=<?= $qtt->getHeros()->getId() ?>&id2=<?= $qtt->getAnneau()->getId() ?>">+</a>
                    </div>
                </div>
            <?php }
    ?>
</div>