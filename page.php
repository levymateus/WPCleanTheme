<!-- configura as páginas estáticas -->
<?php get_header(); ?>
<dir class="content">
 	<div class="row">
		<div class="medium-12 columns">
			<?php 
				$have_thumbnail = false;
				if( has_post_thumbnail() ){ 
			?>
			<div class="medium-2 thumbnail">
		 		<?php	
		 			the_post_thumbnail( 'thumbnail'); 
		 			$have_thumbnail = true;
		 		?>
			</div>
			<?php } ?>
			<div class="<?php if($have_thumbnail) echo "medium-10 columns" ?>">
				<h2 class="header-entry"><?php the_title(); ?></h2>
				<div class="post-content">
				<?php 
					$page = get_post();
					$content = $page->post_content;
					echo $content; 
				?>
				<!-- <p><a href="<?php the_permalink(); ?>" class="">Veja mais ...</a></p> -->
				</div>
			</div>	
		</div>	
	</div>
</dir>
<?php get_footer(); ?>