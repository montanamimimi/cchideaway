<?php get_header(); ?>

<h1>This is activities page</h1>

<script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=c798f28e-b3bf-4e64-b497-358ec6152bfa" async></script>
     
    <div class="bokunWidget" data-src="https://widgets.bokun.io/online-sales/c798f28e-b3bf-4e64-b497-358ec6152bfa/product-list/2788"></div>
    <noscript>Please enable javascript in your browser to book</noscript>

<?php     
          while(have_posts()) {
            the_post(); 
            get_template_part('template-parts/activity');
            }  
?> 

<p>Some addition text, we may set it editable if needed.</p>

<?php get_footer(); ?>