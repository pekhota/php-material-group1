<div class="row g-5">
    <div class="col-md-8">
        Email: <?= $_SESSION["user"]["email"] ?>

        <form method="post" action="/masonry">

            <label>title</label> <input name="title" type="text"> <br>
            <label>image</label> <input name="image" type="text"> <br>
            <label>text</label> <input name="text" type="text"> <br>
           

            <input type="submit">
        </form>
    </div>
</div>