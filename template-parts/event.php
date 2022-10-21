<li>
    <div class="events__item">
        <figure class="events__item-figure">
            <picture class="events__item-image">                
                <img src="<?php echo get_the_post_thumbnail_url($post, 'eventImage'); ?>" alt="<?php echo get_the_title($post); ?>" />
            </picture>
            <div class="events__item-desc">
                <h3 class="events__item-title"><?php echo get_the_title($post); ?></h3>
                <time class="events__item-time"><?php echo get_field('date', $post); ?></time>
            </div>
        </figure>
        <p class="events__item-text"><?php echo get_field('description', $post); ?></p>
        <div class="events__item-button">
            <a class="ui-btn ui-btn--responsive ui-btn--primary" href="#">view more<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                </svg>
            </a>
        </div>
    </div>
</li>


