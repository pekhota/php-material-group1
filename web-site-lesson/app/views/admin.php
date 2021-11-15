<h1>Hello Admin</h1>

<p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Add new post
    </a>
</p>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        <div class="row g-5">
            <div class="col-md-8">
                <form method="post" action="/news">
                    <div class="mb-3 row">
                        <label for="titleLbl" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input name="title" type="text" class="form-control" id="titleLbl">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="dateLbl" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input name="date" type="text" class="form-control" id="dateLbl">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="bodyLbl" class="col-sm-2 col-form-label">Body</label>
                        <div class="col-sm-10">
                            <input name="fragment" type="text" class="form-control" id="bodyLbl">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * @var News[] $news
 */
foreach ($news as $s) {
    ?>
    <article class="blog-post">

        <h2 class="blog-post-title"><?=$s->title?></h2>
        <p class="blog-post-meta"><?=$s->date?> by <a href="/<?=$s->author?>/"><?=$s->author?>></a></p>

        <p><?=$s->body?></p>
        <a href="/news-edit/<?=$s->id?>" class="card-link">Edit</a>
        <a href="/news-delete/<?=$s->id?>" class="card-link">Delete</a>
        <hr>
    </article>
    <?php
}
?>

<div>
    <br><hr><br>
</div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Edit</a>
        <a href="#" class="card-link">Delete</a>
    </div>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


