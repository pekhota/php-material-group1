<div class="row g-5">
    <div class="col-md-8">
        <form method="post" action="/vadym-narchuk">
            <div class="mb-3 row">
                <label for="imgLbl" class="col-sm-2 col-form-label">Link</label>
                <div class="col-sm-10">
                    <input name="link" type="text" class="form-control" id="imgLbl">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nameLbl" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="nameLbl">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="titleLbl" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" type="text" class="form-control" id="titleLbl">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="descLbl" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input name="text" type="text" class="form-control" id="dscLbl">
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Post</button>
            </div>
        </form>
    </div>
</div>
<div>
    <br><hr><br>
</div>
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

