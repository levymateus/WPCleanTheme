<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name') ?> - <?php bloginfo('description' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
	<style type="text/css">
		.header-background {
			background-image: url(<?php header_image(); ?>);
		}
		.site-title{
			margin: 0;
		}
		.branding-logo {
			margin: 0;
			float: left;
			font-size: 3rem;
		}
		.footer {
  			background-color: #eee;
  			padding-bottom: 30px;
  			border-top: 1px solid #ccc;
		}
		.post-content{
			padding-top: 30px;
			padding-bottom: 30px;
		}
		.post-image {
			margin-top: 15px;
			margin-bottom: 15px;
		}
		.post-image img {
			max-width: 100%;
			max-height: 360px;
			object-fit: cover;
    		object-position: center;
		}
		.by {
			font-size: 10px;
		}
	</style>
</head>
<body>
<header class="header header-background">
	<?php 
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo_image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		$home_url = home_url();
	?>
	<div class="site-branding">
		<!-- <div class="branding-logo">
			<a href="<?php echo $home_url; ?>"><img src="<?php echo $logo_image[0]; ?>"></a>
		</div> -->
		<p class="site-title"><a href="<?php echo $home_url; ?>" rel="home"><?php bloginfo('name' ); ?></a></p>
		<p class="site-description"><?php bloginfo('description'); ?></p>
	</div>
	<ul class="header-subnav">
		<!-- <li><a href="<?php echo home_url( );; ?>">Home</a></li> -->
		<!-- <?php wp_list_categories('title_li='); ?> -->
		<?php wp_list_pages('title_li='); ?>
	</ul>
</header>