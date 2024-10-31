<?php snippet('header') ?>

<main>
  <div class="container">
    <div class="hero">
      <h1><?= $page->text()->kirbytext() ?></h1> 
      <ul class="social-links">
        <?php if ($page->youtube()->isNotEmpty()): ?>
          <li><a href="<?= $page->youtube() ?>">youtube</a></li>
        <?php endif ?>
        <?php if ($page->instagram()->isNotEmpty()): ?>
          <li><a href="<?= $page->instagram() ?>">linkedin</a></li> 
        <?php endif ?>
        <?php if ($page->twitter()->isNotEmpty()): ?>
          <li><a href="<?= $page->twitter() ?>">twitter</a></li>
        <?php endif ?>
      </ul>
    </div> <div class="featured-works">
      <?php
      $projects = page('projects')->children()->listed()->limit(3);
      foreach ($projects as $project):
      ?>
        <a href="<?= $project->url() ?>">
          <div class="item">
            <div class="item-img">
              <?php if ($image = $project->images()->findBy("template", "cover")): ?> 
                <?= $image->html(["class" => "img-cover"]) ?>
              <?php endif ?> 
            </div>
            <?php
            $title = $project->title()->html();
            $title = preg_replace('/\s+/', '<br>', $title); 
            ?>
            <h2 class="item-title"><?= $title ?></h2>
            <h3 class="item-category"><?= $project->category()->split(",")[0]; ?></h3> 
          </div>
        </a>
        <div class="clearfix"></div>
      <?php endforeach ?>
    </div> <div class="cta">
      <h1>Ready to start a project?</h1>
      <a href="/contact" class="btn">Let's talk</a>
    </div>
  </div> </main> <?= snippet('footer') ?>
<?= snippet('navigation') ?> 