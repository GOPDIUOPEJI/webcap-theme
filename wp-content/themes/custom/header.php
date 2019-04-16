<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header class="header" style="background: url(<?= get_theme_mod('img-upload', '#ccc'); ?>)">
		<div class="container">
			<div class="row">
				<div class="col logo-block">
					<div class="logo">
						<h2><a href="<?php home_url() ?>">logo</a></h2>
					</div>
				</div>
				<div class="col menu-block">
					<div class="menu">
						<div class="menu-title">
							<h4>menu</h2>
						</div>
						<div class="burger-menu">
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">