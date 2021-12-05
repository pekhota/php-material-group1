<div> 
    <h2>News</h2>
<p>
    <a href="/user">Создать запись</a>
</p>
<table class="table">
    <tr>
        <th>
           Id
          
        </th>
        <th>
            Title
        </th>
        <th>
           Date
        </th>
        <th>
           Author
        </th>
        <th>
           Body
        </th>    
    </tr>
    <?php
        /**
         * @var News[] $news
         */
            foreach ($news as $s) {
        ?>
    <div>
    <tr>
        <td>
            <?=$s->id?>
        </td>
        <td>
            <?=$s->title?>
        </td>
        <td>
            <?=$s->date?>
        </td>
        <td>
            <?=$s->author?>
        </td>
        <td>
            <?=$s->body?>
        </td>    
        <td>
             <a href="/adminpanel/news/edit/<?=$s->id?>">Изменить</a> |
             <a href="/adminpanel/news/details/<?=$s->id?>">Подробнее</a> |
             <a href="/adminpanel/news/delete/<?=$s->id?>">Удалить</a>
             <!-- href="adminnews/delete/<?=$s->id?>" -->
        </td>
    </tr>
<?php
            }
        ?>
</table>
</div>  
