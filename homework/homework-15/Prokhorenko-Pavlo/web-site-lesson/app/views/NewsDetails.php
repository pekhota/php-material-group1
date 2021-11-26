<h2>Details</h2>

<div>
    <h4>News</h4>
    <hr />
    <dl class="dl-horizontal">
        <dt>
            Id
        </dt>

        <dd>
           <?=$news->id?>
        </dd>

        <dt>
            Title
        </dt>

        <dd>
             <?=$news->title?>
        </dd>

        <dt>
            Date
        </dt>

        <dd>
           <?=$news->date?>
        </dd>

        <dt>
            Body
        </dt>

        <dd>
             <?=$news->body?>
        </dd>

        <dt>
            Author
        </dt>

        <dd>
        <?=$news->author?>
        </dd>
    </dl>
</div>
<p>
            
             <a href="/adminpanel/news/edit/<?=$news->id?>">Изменить</a> |
             <a href="/adminpanel/news">На главную</a>
</p>