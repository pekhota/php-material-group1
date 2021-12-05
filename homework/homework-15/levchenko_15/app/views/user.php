<?php
declare(strict_types=1);
?>
<div class="row g-5">
    <div class="col-md-8">


        <form method="post" action="/news">

            <label style="font-size: x-large; font-weight: bold">Title</label><br><input name="title" type="text"> <br>
            <label style="font-size: x-large; font-weight: bold">Date</label> <br> <input name="date" type="date"> <br>
            <label style="font-size: x-large; font-weight: bold">Author</label> <br> <input name="author" type="text"> <br>
            <label style="font-size: x-large; font-weight: bold">Body</label> <br> <input name="body" type="text"> <br> <br> <br>

            <input type="submit" class="btn btn-primary btn-lg px-4 me-md-2">
        </form>
    </div>
</div>