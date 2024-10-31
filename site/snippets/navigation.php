	<div class="aside-navigation-overlay">
		
		<div class="aside-navigation">
			
			<a href="#" class="close-nav"><i class="ti-close"></i></a>

			<nav>
				<ul>
					<?php foreach ($site->children()->listed() as $item): ?>
					<li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
					<?php endforeach ?>
				</ul>
			</nav>

			<ul class="social-icons">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href=""><i class="fab fa-instagram"></i></a></li>
				<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href=""><i class="fab fa-dribbble"></i></a></li>
				<li><a href=""><i class="fab fa-behance"></i></a></li>
			</ul>
	
		</div> <!-- /.aside-navigation -->

	</div> <!-- /.aside-navigation-overlay -->

	<?php snippet('nav') ?>

    <?= js([
    	'assets/js/main.js',
    	'@auto'
    ]) ?>
</body>
</html>