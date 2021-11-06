<style>
.card{
    border-radius: 30px;
}
img{
    border-radius: 10px;
}
</style>


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
                foreach ($masonry as $s) {
            ?>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="<?=$s["image"]?>" size="100px">
                        <div class="card-body">
                            <h2 class="blog-post-title"><?=$s["title"]?></h2>
                            <p class="card-text"><?=$s['body']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><?=$s["date"]?> by <?=$s['author']?></small>
                            </div>
                        </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
