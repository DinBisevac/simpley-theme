<?php

// Support Post Formats.

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat',  ) );
register_nav_menus( array( $location => $description ) );


// Filter for comment form

function custom_comment_form($field) {
	$field['author'] = '<input class="input" name="author" type="text" placeholder="Name"' . $aria_req . ' />';
	$field['email'] = '<input class="input" name="email" type="text" placeholder="Mail"' . $aria_req . ' />';
	$field['url'] = '<input class="input" name="url" type="text" placeholder="Website (Optional)" />';
	
	return $field;
	
}

add_filter('comment_form_default_fields', 'custom_comment_form');

// Commentlist

function simpley_comment($comment, $args, $depth) {

   $GLOBALS['comment'] = $comment; ?>
   
   <section <?php comment_class(); ?>>
   		<section id="comment-<?php comment_ID(); ?>">  	
		   	<section class="comment-body">
		   		
		   		<section class="comment-author vcard">
	   				<?php printf(__('<p class="author">%s</p>'), get_comment_author_link()) ?>
	   			</section>
			   		
				<?php comment_text(); ?>
				
				<?php if ($comment->comment_approved == '0') : ?>
		   			<p class="approve"><?php _e('Your comment has to be approved.') ?></p>
		   		<?php endif; ?>
				
				<p class="edit">
					<?php edit_comment_link(__('Edit'), '','') ?>
				</p>

		   	</section>
	</section>
<?php
        }
?>
