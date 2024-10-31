<?php snippet('header') ?>
<main>
    <div class="portfolio">
        <div class="container">
            <?php 
            // Iterate over each project in the list
            foreach ($page->children()->listed() as $project): 
                // Get the cover image for the project
                $coverImage = $project->images()->findBy("template", "cover");
            // Get the title of the project
            $title = $project->title();
             // Get the first category
            $first_category = $project->category()->split(",")[0];
            // Output the HTML for the project
            ?>
            <a href="<?= $project->url() ?>">
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <?= $coverImage->html(["class" => "img-cover"]) ?>
                    </div>
                    <h2 class="portfolio-item-heading"><?= $title ?> </h2>
                    <h3 class="portfolio-item-category"><?= $first_category ?></h3>
                </div> <!-- /.portfolio-item -->
            </a>
        <?php endforeach ?>
        <div class="clearfix"></div>
        <div class="cta">
            <h1>Ready to start a project?</h1>
            <a href="contact.html" class="btn">Let's talk</a>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.portfolio -->
</main> <!-- /main -->
<?php snippet('footer') ?>
<?= snippet('navigation') ?>