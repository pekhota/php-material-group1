
<form action="/adminpanel/news/edit" method="post">
 <h2>Edit</h2>

    <div>
        <h4>News</h4>
        <hr />
       
        <div class="form-group">
        <label>Id</label>  
            <div>
                <input readonly type="text"  name="id" value="<?=$news->id?>"></input>
                <!-- <input type="text" name="id" value="<?=$news->title?>"><s/input> -->

            </div>
        </div>
        <div>
        <label>Title</label>  
            
            <div>
                <input type="text" name="title" value="<?=$news->title?>"></input>

            </div>
        </div>
        <div>
        <label>Date</label>  
            
            <div>
                <input type="date" name="date" value=" <?=$news->date?>"></input>

            </div>
        </div>
        <div>
        <label>Body</label>  
           
            <div>
                <input type="text" name="body" value="<?=$news->body?>"></input>

            </div>
        </div>
        <div>
        <label>Author</label> 
            
            <div>
                <input type="text" name="author" value="<?=$news->author?>"></input>

            </div>
        </div>


            <div>
                <input type="submit" class="btn btn-primary" style="border-color: black;" value="Сохранить" />
            </div>

    </div>
</form>

<div>
   <a href="/adminpanel/news/delete/<?=$news->id?>" class="btn btn-primary" style="background-color: red; border-color: black;">Удалить</a>
   <a href="/adminpanel/news">На главную</a>
</div>

