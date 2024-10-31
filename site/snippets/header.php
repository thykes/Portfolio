<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metas -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title><?= $site->title() ?></title>
	<meta name="description" content="The official website and portfolio of Tim Hykes designer and illustrator working in Washington DC.">
	<meta name="keywords" content="Tim Hykes, Timothy Hykes, Black Designer, Googler, Product designer, Black UX Designer, Interaction designer">

	<!-- External CSS -->
	<?= css([
		'assets/css/fontawesome-all.min.css',
		'assets/css/themify-icons.css'
	]) ?>

	<!-- Custom CSS -->
	<?= css([
		'assets/css/main.css',
		'assets/css/colors.css',
		'assets/css/responsive.css'
	]) ?>

	<link rel="canonical" href="https://www.timhykes.com/" >

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600%7CPoppins:400,500,600&display=swap" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" href="assets/img/favicon.png">

	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57219061-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-57219061-2');
</script>

</head>
<body>

	<!-- ========== Header ========== -->

	<header class="main-header">
		<div class="container">
			<a href="<?= $site->url() ?>">
				<svg class="logo" width="35" height="35" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_10_542)">
						<path d="M23.5911 1.73596H7.40905H2.85205V12.276H7.40905V6.29296H13.2061V13.671H17.7941V6.29296H23.5911V12.276H28.1481V1.73596H23.5911Z" fill="#0085FF"/>
						<path d="M17.7941 18.197H13.2061V24.707H7.40906V29.264H23.5911V24.707H17.7941V18.197Z" fill="#0085FF"/>
					</g>
					<defs>
						<clipPath id="clip0_10_542">
							<rect width="35" height="35" fill="white"/>
						</clipPath>
					</defs>
				</svg>
			</a>
			<a href="#" class="open-nav">
				<i></i>
			</a>
			<div class="clearfix"></div>
		</div> <!-- /.container -->
	</header> <!-- /.main-header -->

	<!-- ========== Main ========== -->