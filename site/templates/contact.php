<?php snippet('header') ?>



	<main class="contact">
		
		<div class="container honeypot">
			
			<h1><?= $page->title()->html() ?></h1>

			<form action="<?= $page->url() ?>" class="contact-form">
					
				<input  name="name" placeholder="Name *" type="text" required>
				<input  name="email" placeholder="Email *" type="email" required>
				<input  name="business" placeholder="Business" type="text">
				<input  name="phone-number" placeholder="Phone Number" type="tel">
				<textarea name="message" placeholder="Tell us a bit about your project" required></textarea>
				<input type="submit" value="send message">
				<div class="clearfix"></div>

			</form> <!-- /.contact-form -->

		</div> <!-- /.container -->

		<div class="contact-info">
			
			<div class="container">
				
				<ul>
					<li>Our Address</li>
					<li>Kano Studio</li>
					<li>72 Oak Street</li>
					<li>London, UK</li>
				</ul>

				<ul>
					<li>Follow Us</li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Behance</a></li>
					<li><a href="#">Dribbble</a></li>
				</ul>

				<ul>
					<li>We Are Hiring</li>
					<li>kano-career@mail.com</li>
					<li>+3809812345</li>
				</ul>

				<div class="clearfix"></div>

			</div> <!-- /.container -->

		</div> <!-- /.contact-info -->

	</main> <!-- /.contact -->


<?= snippet('footer') ?>
<?= snippet('navigation') ?>
