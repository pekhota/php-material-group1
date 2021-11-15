<?php
/**
 * @var News $news
 */
{
    ?>
    <div class="card card-body">
        <div class="row g-5">
            <div class="col-md-8">
                <form method="post" action="/news-update/<?=$news->id?>">
                    <div class="mb-3 row">
                        <label for="titleLbl" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input name="title" type="text" class="form-control" id="titleLbl" placeholder="<?=$news->title?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="dateLbl" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input name="date" type="text" class="form-control" id="dateLbl" placeholder="<?=$news->date?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bodyLbl" class="col-sm-2 col-form-label">Body</label>
                        <div class="col-sm-10">
                            <input name="fragment" type="text" class="form-control" id="bodyLbl" placeholder="<?=$news->body?>">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Save</button>
                        <a class="button" href="/admin" class="card-link">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
}
?>
