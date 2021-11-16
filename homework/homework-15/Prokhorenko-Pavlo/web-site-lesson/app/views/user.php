<div class="row g-5">
    <div class="col-md-8">
        Email: <?= $_SESSION["user"]["email"] ?>

        <form method="post" action="/news">

            <label>title</label> <input name="title" type="text"> <br>
            <label>date</label> <input name="date" type="date"> <br>
            <label>author</label> <input name="author" type="text"> <br>
            <label>body</label> <input name="body" type="text"> <br>

            <input type="submit">
        </form>
    </div>
</div>