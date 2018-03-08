<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Atanas Atanasov | Full Stack Web Developer</title>

	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="assets/images/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="assets/images/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="assets/images/favicon/favicon-128.png" sizes="128x128" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />
	<meta name="application-name" content="Atanas Atanasov"/>
	<meta name="msapplication-TileColor" content="#000000" />
	<meta name="msapplication-TileImage" content="assets/images/favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="assets/images/favicon/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="assets/images/favicon/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="assets/images/favicon/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="assets/images/favicon/mstile-310x310.png" />
	<meta name="theme-color" content="#000000" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quattrocento+Sans%7CWork+Sans%7CAnton" />
	<link rel="stylesheet" href="assets/dist/app.css" />
</head>
<body>
	<?php include_once('assets/dist/sprite.svg'); ?>

	<div class="o-wrapper">
		<?php include_once('header.php'); ?>

		<div class="o-main">
			<?php include_once('sections/hello.php'); ?>

			<?php include_once('sections/about.php'); ?>

			<?php include_once('sections/skills.php'); ?>
		</div><!-- /.o-main -->

		<?php include_once('footer.php'); ?>
	</div><!-- /.o-wrapper -->

	<script src="assets/dist/app.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83446952-1"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag(){
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'UA-83446952-1');
	</script>
</body>
</html>