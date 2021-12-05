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
        <h3>Delete</h3><hr>
        <form method="post" action="/delete/<?= $news->id ?>">

            <label style="font-size: x-large; font-weight: bold">Title</label><br><input name="title" type="text" placeholder="<?= $news->title ?>"> <br>
            <label style="font-size: x-large; font-weight: bold">Date</label> <br> <input name="date" type="text" placeholder="<?= $news->date ?>"> <br>
            <label style="font-size: x-large; font-weight: bold">Author</label> <br> <input name="author" type="text" placeholder="<?= $news->author ?>"> <br>
            <label style="font-size: x-large; font-weight: bold">Body</label> <br> <input name="body" type="text" placeholder="<?= $news->body ?>"> <br> <br> <br>

            <input type="submit" class="btn btn-primary btn-lg px-4 me-md-2">
        </form>

    </div>
</div>