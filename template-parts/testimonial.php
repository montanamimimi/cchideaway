<div class="swiper-slide">
    <div class="testimonials__item">
        <picture class="testimonials__item-image">
            
            <img src="<?php echo get_the_post_thumbnail_url($post, 'teamAvatar'); ?>" alt="<?php echo get_the_title($post); ?> Testimonial" />
        </picture>
        <h3 class="testimonials__item-title"><?php echo get_the_title($post); ?></h3>
        <p class="testimonials__item-text"><?php echo get_field('description', $post); ?>
        </p>
    </div>
</div>