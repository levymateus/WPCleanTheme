<!-- página que exibe os posts por categoria  -->
<?php get_header(); ?>
<div class="content">
	<div class="row">
		<div class="category-title medium-12 columns">
			<h1><?php single_cat_title(''); ?></h1>
		</div>
	</div>
	<hr>
	<?php if(has_post_thumbnail()) : ?>
	<div class="row">
		<div class="medium-12 columns">
			<div class="midium-12 post-image">
	 		<?php	
	 			the_post_thumbnail( '', '' ); 
	 		?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php query_posts( $query_string . "&order=ASC" ); ?>
	<?php if(have_posts()) : while(have_posts()) : the_post();  ?>
 	<div class="row">
		<div class="medium-12 columns">
			<div class="post-content">
				<?php 
					$post_id =  get_the_id();
					$post = get_post($post_id);
					$content = $post->post_content;
		 		?>
				<h2><?php the_title(); ?></h2>
				<div class="single-content color-3"><?php echo $content; ?></div>
			</div>
			<p><small>Postado em: <?php the_date(); ?></small></p>
		</div>
		<hr>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
	<section>
		<div class="row">
			<dir class="medium-6 columns comments"><?php comments_template(); ?></dir>
		</div>
	</section>
</div>
<?php get_footer(); ?>