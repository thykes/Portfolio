<?php snippet('header') ?>
<main class="blog">
	<div class="container">
		<?php
// Get the children of the current page, listed and sorted by date in descending order
$articles = $page->children()->listed()->sortBy('published', 'desc');

// Loop through the articles
foreach($articles as $article):
?>
		<div class="blog-item">
			<figure class="entry-thumbnail">
				<?php
				$image = $article->files()->first();
				if($image):
					?>
					<a href="<?= $article->url() ?>"><img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" class="img-cover"></a>
				<?php endif ?>
			</figure>
			<a href="#" class="entry-category"><?= $article->category()->first() ?></a>
			<h2 class="entry-title"><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
		</div> <!-- /.blog-item -->
	<?php endforeach ?>
	<div class="clearfix"></div>
</div> <!-- /.container -->
</main> <!-- /.blog -->
<?= snippet('footer') ?>
<?= snippet('navigation') ?>
