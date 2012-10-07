<?php

// Support Post Formats.

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat',  ) );
register_nav_menus( array( $location => $description ) );
?>