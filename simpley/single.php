<?php

	get_header();

?>

	<section class="content">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<article>
				<h2><?php the_title(); ?></h2>
				
				<?php the_content(); ?>
			</article>
	
		<?php endwhile; else: ?>
		
			<h2>Dieser Post wurde nicht gefunden.</h2>
			
		<?php endif; ?>
	
	</section> 

<?php

	get_footer();
	
?>