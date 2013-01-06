<html>
	<head>
		<title>
			<?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>
		</title>
		<?php wp_head(); ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
		<header>
  			<section class="header_container">
  					<h1>
  						<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
  					</h1>
  					
  					<p class="description">
  						<?php bloginfo('description'); ?>
  					</p>
			</section>
  		</header>
  		