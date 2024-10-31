<?php snippet('blogheader') ?>

<main class="blog-post">
	<div class="container">
		<article>
			<header class="entry-header">
				<a href="#" class="entry-category"><?= $page->category()->first() ?></a>
				<h1 class="entry-title"><?= $page->title()->html() ?></h1>
				<?php
				// Get the user object from the author field
				$author = $page->author()->toUser();
				?>
				<a href="#" class="entry-date">Posted on <?= $page->published()->toDate('M d, Y') ?> • By <?= $author->name() ?></a>
			</header> <!-- /.entry-header -->
			<figure class="entry-thumbnail">
				<?php
				// Get the first file object
				$file = $page->files()->first();

				// Check if the file is an image
				if ($file->type() == 'image'):
					// Display the image
					echo '<img src="' . $file->url() . '" alt="' . $file->alt() . '" class="img-cover">';
				endif;
				?>
			</figure>

			<div class="entry-content">
				<?php
				// Parse the Markdown
				$text = $page->text()->kirbytext();

				// Find all image tags in the text
				preg_match_all('/<img[^>]+>/i', $text, $images);

				// Loop through each image
				foreach($images[0] as $image) {
					// Add a class to the image
					$modifiedImage = str_replace('<img', '<img class="img-cover"', $image);

					// Wrap the modified image in a figure element and add a class
					$text = str_replace($image, '<figure class="post-img">' . $modifiedImage . '</figure>', $text);
				}

				// Output the modified text
				echo $text;
				?>
			</div> <!-- /.entry-content -->

			<ul class="share-links">
				<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
			</ul>

		</article> <!-- /article -->

	</div> <!-- /.container -->

</main> <!-- /.blog-post -->


<?= snippet('footer') ?>
<?= snippet('navigation') ?>
