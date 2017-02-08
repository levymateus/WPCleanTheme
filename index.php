<?php get_header(); ?>
<div class="content">

	<?php 
		$args = array('post_type'=>'post', 'showposts'=>5);
		$my_posts = get_posts( $args );
 	?>
 	<?php if( $my_posts) : foreach ($my_posts as $post) : setup_postdata( $post ); ?>

 	<div class="row">

		<div class="medium-12 columns">
			<?php 
				$have_thumbnail = false;
				$post_count = 0;
				if( has_post_thumbnail() ){ 
			?>
			<div class="medium-4 thumbnail">
		 		<?php	
		 			the_post_thumbnail( 'post-thumbnail', '' ); 
		 			$have_thumbnail = true;
		 		?>
			</div>
			<?php } ?>
			<div class="<?php if($have_thumbnail) echo "medium-8 columns" ?>">
				<h2 class="color-3"><?php the_title(); ?></h2>
				<div class="color-3"><?php the_content(); ?></div>
				<!-- <p><a href="<?php the_permalink(); ?>" class="">Veja mais ...</a></p> -->
			</div>	
		</div>

	</div>

	<?php
		endforeach;
		endif;

	?>

</div>
<?php get_footer(); ?>