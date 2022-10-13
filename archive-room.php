<?php get_header(); ?>

<h1>This is rooms page</h1>

<?php     
          while(have_posts()) {
            the_post(); 
            get_template_part('template-parts/room');
            }  
?> 

<p>Some addition text, we may set it editable if needed.</p>

<?php get_footer(); ?>