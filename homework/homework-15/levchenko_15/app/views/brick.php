<?php
declare(strict_types=1);
?>
<div class="row g-5" style="margin-left: 20px">
    <div class="col-md-8">
        <h2>Brick</h2><hr>
        <form method="post" action="/masonry">

            <label style="font-size: x-large; font-weight: bold">Title</label> <br> <input name="title" type="text"> <br>
            <label style="font-size: x-large; font-weight: bold">Date</label> <br> <input name="date" type="date"> <br>
            <label style="font-size: x-large; font-weight: bold">Body</label> <br> <input name="body" type="text"> <br>
            <label style="font-size: x-large; font-weight: bold">Picture</label> <br> <input name="picture" type="text"> <br>,<br>

            <input type="submit" class="btn btn-primary btn-lg px-4 me-md-2">
        </form>
    </div>
</div>

