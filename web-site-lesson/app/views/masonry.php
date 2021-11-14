<style type="text/css">
    
* { box-sizing: border-box; }

.grid:after {
  content: '';
  display: block;
  clear: both;
}

.grid-sizer,
.grid-item {
  width: 33.333%;
}
@media (max-width: 575px) {
  .grid-sizer,
  .grid-item {
    width: 100%;
  }
}
@media (min-width: 576px) and (max-width: 767px) {
  .grid-sizer,
  .grid-item {
    width: 50%;
  }
}

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
}

.autortxt{
    font-family: monospace;
    font-size: medium;
    color: darkgray;
}
</style>

<div class="container-fluid">
<h1 class="my-4 font-weight-bold">Title</h1>

<div class="grid">

      
<?php
         /**
         * @var Masonry[] $masonry
         */
            foreach ($masonry as $m) {
        ?>
  <div class="grid-item" style="border-radius: 40px;">
    <div class="card">
       
        <img style="border-radius: 10px;" src=<?=$m->image?>>

        <div class="card-body">
                    <h5 class="card-title"><?=$m->title?></h5>
                    <p class="card-text"><?=$m->text?></p>
                    <p class="autortxt">Autor: <?=$m->author?><br>Data: <?=$m->data?></p>
                    

                </div>
    </div>
  </div>
  <?php
            }
        ?>
 



</div>


