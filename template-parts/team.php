<div class="swiper-slide">
    <div class="team__item">
        <picture class="team__item-image">            
            <img src="<?php echo get_the_post_thumbnail_url($post, 'teamAvatar'); ?>" alt="<?php echo get_the_title($post); ?>" />
        </picture>
        <h3 class="team__item-title"><?php echo get_the_title($post); ?></h3>
        <p class="team__item-text"><?php echo get_field('description', $post); ?></p>
    </div>
</div>