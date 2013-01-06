<?php

	get_header();
?>
 	
 	<section class="content">

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?>>				
				<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</article>
	
		<?php endwhile; ?>
	
		<?php else : ?>
	
			<h2>Es wurden noch keine Beiträge veröffentlicht.</h2>
		
		<?php endif; ?>
		
	</section>
	
	<center>
		<?php
      	 if (function_exists('postbar'))

         postbar();
        ?> 
    </center>

	
<?php

	get_footer();

?>

