<?php

    $qtts = $result["data"]['qtt'];

?>
<div id="container">
    <?php
        foreach($qtts as $qtt){ ?>
                <div class="aSingleRing ten">
                    <h4><?= $qtt->getHeros()->getNom() ?></h4>
                    <a href="index.php?ctrl=show&action=less&id=<?= $qtt->getHeros()->getId() ?>">-</a>
                    <span><?= $qtt->getQtt() ?></span>
                    <a href="index.php?ctrl=show&action=more&id=<?= $qtt->getHeros()->getId() ?>">+</a>
                </div>
            <?php }
    ?>
</div>