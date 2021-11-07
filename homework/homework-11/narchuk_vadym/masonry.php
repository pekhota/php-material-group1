
<div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        foreach ($masonry as $img) {
        ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?=$img["link"]?>" class="card-img-top" alt="<?=$img["name"]?>">
                        <div class="card-body">
                            <h5 class="card-title"><?=$img["title"]?></h5>
                            <p class="card-text"><?=$img["text"]?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?=$img["author"]?></small>
                        </div>
                    </div>
                </div>
            <?php
                                    }
        ?>
</div>

<!--    <div class="col">-->
<!--        <div class="card h-100">-->
<!--            <img src="..." class="card-img-top" alt="...">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title">Card title</h5>-->
<!--                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional-->
<!--                    content. This content is a little bit longer.</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--                <small class="text-muted">Last updated 3 mins ago</small>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col">-->
<!--        <div class="card h-100">-->
<!--            <img src="..." class="card-img-top" alt="...">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title">Card title</h5>-->
<!--                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--                <small class="text-muted">Last updated 3 mins ago</small>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col">-->
<!--        <div class="card h-100">-->
<!--            <img src="..." class="card-img-top" alt="...">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title">Card title</h5>-->
<!--                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional-->
<!--                    content. This card has even longer content than the first to show that equal height action.</p>-->
<!--            </div>-->
<!--            <div class="card-footer">-->
<!--                <small class="text-muted">Last updated 3 mins ago</small>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
