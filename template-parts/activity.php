<div class="swiper-slide">
    <div class="activity__item">
        <h3 class="activity__item-title"><?php echo get_the_title($post); ?></h3>
        <div class="row">
            <div class="col">
                <ul class="activity__item-info">
                    <li><?php echo get_field('duration', $post); ?></li>
                    <li><?php echo get_field('price', $post); ?></li>
                </ul>
            </div>
            <div class="col-auto">
                <div class="activity__item-button is-lg-hidden">
                    <a class="ui-btn ui-btn--outline" href="#">get</a>
                </div>
            </div>
        </div>
        <picture class="activity__item-image">
            
            <img src="<?php echo get_the_post_thumbnail_url($post, 'medium'); ?>" alt="<?php echo get_the_title($post); ?>" />
        </picture>
        <p class="activity__item-text"><?php echo get_field('description', $post); ?></p>
        <div class="activity__item-button is-lg-visible">
            <a class="ui-btn ui-btn--primary" href="<?php echo get_field('booking_link', $post); ?>">book<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                </svg>
            </a>
        </div>
    </div>
</div>
