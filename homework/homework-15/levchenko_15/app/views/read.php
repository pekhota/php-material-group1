<?php
declare(strict_types=1);
?>
<div class="row g-5" style="margin-left: 20px">
    <div class="col-md-8">
        <?php
        /**
         * @var News[] $news
         */
        ?>
    <h3>Details</h3><hr>
        <form method="post" action="/read">

            <label style="font-size: large; font-weight: bold">Id</label> <br> <p><?= $news->id ?></p>
            <label style="font-size: large; font-weight: bold">Title</label> <br> <p><?= $news->title ?></p>
            <label style="font-size: large; font-weight: bold">Date</label> <br> <p><?= $news->date ?></p>
            <label style="font-size: large; font-weight: bold">Author</label> <br> <p><?= $news->author ?></p>
            <label style="font-size: large; font-weight: bold">Body</label> <br> <p><?= $news->body ?></p> <br>

            <input type="submit" class="btn btn-primary btn-lg px-4 me-md-2" content="List">

        </form>
    </div>
</div>