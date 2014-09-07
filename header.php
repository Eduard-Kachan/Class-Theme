<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php 
		wp_title( '-' , true , 'right' ); 
		bloginfo( 'name' );
	?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header id="header">
		
		<h1><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2 class="subtitle"><?php bloginfo( 'description'); ?></h2>
		<nav>
			<div class="wrapper">
			<?php 
				$args = array( 
					'menu' => 'main-menu'
				); 
				wp_nav_menu( $args );
			?>
			</div>
		</nav>
	</header>
	<div class="wrapper">