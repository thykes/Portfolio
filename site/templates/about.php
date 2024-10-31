<?php snippet('header') ?>


	<main class="about">

		<div class="container">

			<figure class="entry-thumbnail intro">
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

			<h1 class="intro"><?= $page->subtitle()->kt() ?></h1>

			<div class="entry-content">
			    	<?= $page->bio()->kt() ?>
			    </div>

	<h1 class="intro">When I am not working you can  <br> always find me helping the next generation <br> of future designers and leaders.</h1>

			<div class="services">
				
				<h2 class="about-heading">Lates Activities</h2>

				<div class="services-item">

					<div class="content">

						<span class="service-icon"><i class="ti ti-info "></i></span>

						<h3>News</h3>
						<ul>
							<li><a href="https://userdefenders.com/tag/timothy-hykes/">User Defenders Podcast</a></li>
							<li><a href="https://www.missionforward.us/episodes/communicating-by-design-tim-hykes">Mission Partners Interview</a></li>
							<li><a href="https://www.invisionapp.com/inside-design/author/tim-hykes/">Invision App</a></li>
							<li><a href="https://medium.com/thinking-design/an-interview-with-timothy-hykes-curator-of-28-days-of-black-designers-e65c19aaa221">Adobe</a></li>
							<li><a href="https://creativemornings.com/talks/tim-hykes">Creative Mornings STL</a></li>
						</ul>

					</div> <!-- /.content -->

				</div> <!-- /.services-item -->

				<div class="services-item">

					<div class="content">

						<span class="service-icon"><i class="ti ti-pencil-alt "></i></span>

						<h3>design</h3>
						<ul>
							<li><a href="https://designplusdiversity.com/">Design + Diversity</a></li>
							<li><a href="https://dribbble.com/thykes">Dribbble</a></li>
							<li><a href="https://www.behance.net/timothyhykes">Behance</a></li>
							<li><a href="https://www.youtube.com/@TimHykes">YouTube</a></li>
							<li><a href="https://www.fastcompany.com/3067659/survey-design-is-73-white">Fast Company</a></li>
						</ul>

					</div> <!-- /.content -->

				</div> <!-- /.services-item -->

				<div class="services-item">

					<div class="content">

						<span class="service-icon"><i class="ti ti-id-badge"></i></span>

						<h3>Public Speaking</h3>
						<ul>
							<li><a href="#">Bio</a></li>
							<li><a href="#">Photos</a></li>
						</ul>

					</div> <!-- /.content -->

				</div> <!-- /.services-item -->

				<div class="clearfix"></div>

			</div> <!-- /.services -->


			<div class="cta">
				<h1>Ready to start a project?</h1>
				<a href="/contact" class="btn">Let's Talk</a>
			</div>

		</div> <!-- /.container -->

	</main> <!-- /.about -->


<?= snippet('footer') ?>
<?= snippet('navigation') ?>
