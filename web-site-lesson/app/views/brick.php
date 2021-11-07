<?php
declare(strict_types=1);
?>
<div class="row g-5">
    <div class="col-md-8">
        Email: <?= $_SESSION["user"]["email"] ?>

        <form method="post" action="/masonry">

            <label>title</label> <input name="title" type="text"> <br>
            <label>date</label> <input name="date" type="date"> <br>
            <label>body</label> <input name="body" type="text"> <br>
            <label>picture</label> <input name="picture" type="text"> <br>

            <input type="submit">
        </form>
    </div>
</div>
