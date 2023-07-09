<?php

    $qtts = $result["data"]['qtt'];

?>
<div id="container">
    <?php
        foreach($qtts as $qtt){ ?>
                <div class="aSingleRing twelve">
                    <h4><?= $qtt->getHeros()->getNom() ?>&nbsp;<?= $qtt->getAnneau()->getLettre() ?></h4>
                    <div>
                        <a href="index.php?ctrl=show&action=lessAll&id=<?= $qtt->getHeros()->getId() ?>&id2=<?= $qtt->getAnneau()->getId() ?>">-</a>
                        <span><?= $qtt->getQttNb() ?></span>
                        <a href="index.php?ctrl=show&action=moreAll&id=<?= $qtt->getHeros()->getId() ?>&id2=<?= $qtt->getAnneau()->getId() ?>">+</a>
                    </div>
                </div>
            <?php }
    ?>
</div>