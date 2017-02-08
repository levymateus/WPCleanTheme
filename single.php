<!-- Este arquivo é responsável por mostrar os conteúdos dos posts -->
<?php get_header(); ?>
<div class="content">
 	<div class="row">
		<div class="medium-12 columns">
			<?php 
				$post_id =  get_the_id();
				$post = get_post($post_id);
				$content = $post->post_content;
		 	?>
			<h2 class="color-3"><?php the_title(); ?></h2>
			<div class="single-content color-3"><?php echo $content; ?></div>
		</div>
	</div>
	<div class="row">
		<div class="medium-12 columns">
			<h3>Imagens</h3>
		</div>
	</div>
	<section>
		<div class="row">
			<dir class="medium-6 columns comments"><?php comments_template(); ?></dir>
		</div>
	</section>
</div>
<?php get_footer(); ?>