
<div class="img-halved">
        
    <?php foreach ($block->images()->toFiles() as $image): ?>
<div class="item">
      <?php
      if (!strpos($image, 'class')) {
          $image = str_replace('<img', '<img class="img-cover"', $image);
      }
      echo $image;
      ?>
</div>
    <?php endforeach ?>
    <div class="clearfix"></div>
</div><!-- /.img-halved -->

