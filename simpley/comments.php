<?php
/*
 * Comments Template for Simpley theme
 * Version: 1.0
 *
 */
?>

<section class="comments">

	<?php if(have_comments()) : ?>
		
		<h3 class="light-h3">Comments</h3>
		
		<section class="commentlist">
		
			<?php wp_list_comments("callback=simpley_comment"); ?>
		
		</section>
		
		<?php 
			comment_form(
				array(
					'title_reply'			=>  '',
					'comment_notes_before'  =>  '',
					'comment_notes_after'  	=>  '',				  
			  		'comment_field'  		=> '<textarea class="comment-textarea" name="comment" rows="15" placeholder="Comment" aria-required="true"></textarea>',
			  		'label_submit'			=> 'Submit'
			  	)); 
		?>
		
	<?php else : ?>
	
		<h3 class="light-h3">There are no comments. Add one!</h3>
		
		<?php 
			comment_form(
				array(
					'title_reply'			=>  '',
					'comment_notes_before'  =>  '',
					'comment_notes_after'  	=>  '',				  
			  		'comment_field'  		=> '<textarea class="comment-textarea" name="comment" rows="15" placeholder="Comment" aria-required="true"></textarea>',
			  		'label_submit'			=> 'Submit'
			  	)); 
		?>
		
	<?php endif; ?>
	
	<?php if(!comments_open()) : ?>
	
		<h3 class="light-h3">The comments are closed. :(</h3>
	
	<?php endif; ?>
</section>