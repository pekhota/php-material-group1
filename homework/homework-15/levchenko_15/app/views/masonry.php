<?php

declare(strict_types=1);
?>
<div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; ">

    <?php
    /**
     * @var Bricks[] $bricks
     */
    foreach ($bricks as $s) {
    ?>

    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card">
            <div class="bd-placeholder-img card-img-top" width="100%" height="200"  role="img"
                 aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="<?=$s->picture?>" width="100%" height="100%"></>
            <h4><?=$s->title?></h4>
        </div>

        <div class="card-body">
            <h5 class="card-title"><?=$s->date?></h5>
            <p class="card-text"><?=$s->body?></p>
        </div>
    </div>
</div>

<?php
}
?>
</div>
