<?php snippet('header') ?>
<main class="single-project">
    <div class="container">
        <div class="intro">
            <h1><?= $page->title()->html() ?></h1>
            <ul>
                <?php foreach($page->category()->split() as $tag): ?>
                    <li><?= $tag ?></li>
                <?php endforeach ?>
            </ul>
            <?= $page->intro()->kirbytext() ?>
            <div class="clearfix"></div>
        </div> <!-- /.intro -->

        <div class="img-full">
            <?= $page->images()->findBy("template", "cover")->html(["class" => "img-cover"]) ?>
        </div> 

<?php foreach ($page->text()->toBlocks() as $block): ?>
  <?php if ($block->type() == 'image'): ?>
    <?php snippet('blocks/image', ['block' => $block]) ?>
  <?php elseif ($block->type() == 'gallery'): ?>
    <?php snippet('blocks/gallery', ['block' => $block]) ?>
  <?php elseif ($block->type() == 'text'): ?>
    <?php
      $text = $block->text();
      if (strpos($text, '<p>') === 0 && strpos($text, '</p>') === strlen($text) - 4) {
        $text = substr($text, 3, -4);
      }
      echo '<p class="info">' . $text . '</p>';
    ?>
  <?php endif ?>
<?php endforeach ?>



    </div> <!-- /.container -->


    <a href="single-project.html" class="next">
        <h2>next</h2>
    </a>




</main> <!-- /.single-project -->
<?php snippet('footer') ?>
<?= snippet('navigation') ?>
