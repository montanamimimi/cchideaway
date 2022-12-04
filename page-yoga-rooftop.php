<?php get_header(); ?>

<!-- Main :: Start-->
<main class="main">

    <?php get_template_part('template-parts/blocks/intro', 'description'); ?>

    <!-- Rooftop  :: Start-->
    <section class="rooftop" data-aos="fade-in" data-aos-anchor=".rooftop">
        <div class="container-fluid">
            <div class="rooftop__wysiwyg">
                <h2 data-aos="fade-left" data-aos-delay="200" data-aos-anchor=".rooftop"> 
                <?php echo cchideaway_text_icons(get_field('rooftop_header', 'options'));  ?>
                </h2>
                <p data-aos="fade-left" data-aos-delay="400" data-aos-anchor=".rooftop">
                <?php echo get_field('rooftop_description', 'options');  ?>
                </p>
            </div>
            <div class="rooftop__grid">
                <div class="row">
                    <div class="col-lg-4">
                        <mark class="rooftop__mark" data-aos="fade-right" data-aos-delay="200" data-aos-anchor=".rooftop__grid">
                        <?php echo get_field('rooftop_second_header', 'options');  ?>
                        </mark>
                    </div>
                    <div class="col-lg-5">
                        <picture class="rooftop__image" data-aos="fade-in" data-aos-delay="400" data-aos-anchor=".rooftop__grid">
                            
                            <img src="<?php echo wp_get_attachment_image_url(get_field('rooftop_image', 'options'), 'medium_large'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-4">
                        <p class="rooftop__text rooftop__text--01" data-aos="fade-up" data-aos-delay="600" data-aos-anchor=".rooftop__grid">
                        <?php echo get_field('rooftop_short_text', 'options');  ?>
                        </p>
                    </div>
                    <div class="col-lg-3 push-lg-5">
                        <p class="rooftop__text rooftop__text--02" data-aos="fade-up" data-aos-delay="800" data-aos-anchor=".rooftop__grid">
                        <?php echo get_field('rooftop_long_text', 'options');  ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Rooftop  :: End-->

    <!-- Yoga-styles :: Start-->
    <section class="yoga-styles" data-aos="fade-in" data-aos-anchor=".yoga-styles">
        <div class="container-fluid">
            <div class="yoga-styles__grid" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".yoga-styles">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="yoga-styles__title">Our yoga styles</h2>
                    </div>

                    <?php

                    $yogatypes = cchideaway_get_posts('service', 'rooftop');

                    $counter = 0;

                    foreach ($yogatypes as $post) {
                        get_template_part('template-parts/spatype', null, $args = array('counter' => $counter));
                        $counter++;
                    }

                    wp_reset_postdata();
                    ?>


                </div>
            </div>
            <div class="yoga-styles__button" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".yoga-styles">
                <a class="ui-btn ui-btn--responsive ui-btn--primary" href="<?php echo get_field('rooftop_menu', 'options');  ?>" target="_blank">see yoga menu<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                    </svg>
                </a>
            </div>
        </div>
    </section><!-- Yoga-styles :: End-->


    <?php get_template_part('template-parts/blocks/rates', null, $args = array('field_name' => 'rooftop_rates')); ?>



    
<!-- Events :: Start-->
<section class="events" data-aos="fade-in" data-aos-anchor=".events">
    <div class="container-fluid">
        <h2 class="events__title events" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".events">
            <svg width="50" height="63" viewBox="0 0 50 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M47.2 4.04004V2.04004H45.2H39.84H37.84V4.04004V37.4C37.84 39.2159 37.4924 40.9206 36.8017 42.5322C36.0983 44.1735 35.1461 45.5855 33.9458 46.7858C32.7454 47.9862 31.3334 48.9383 29.6922 49.6418L29.6824 49.6459L29.6727 49.6502C28.1327 50.3296 26.4369 50.68 24.56 50.68C22.7441 50.68 21.0394 50.3324 19.4278 49.6418C17.7929 48.9411 16.3854 47.9935 15.1881 46.7996C14.0374 45.5994 13.1058 44.1831 12.3983 42.5322C11.7076 40.9206 11.36 39.2159 11.36 37.4V4.04004V2.04004H9.36H4H2V4.04004V37.4C2 40.4855 2.58367 43.4195 3.75969 46.1832C4.92339 48.9179 6.53217 51.3206 8.58579 53.3743C10.632 55.4204 13.0236 57.0505 15.7441 58.2661L15.7604 58.2733L15.7769 58.2803C18.5405 59.4564 21.4746 60.04 24.56 60.04C27.6454 60.04 30.5795 59.4564 33.3431 58.2803L33.3596 58.2733L33.3759 58.2661C36.0964 57.0505 38.488 55.4204 40.5342 53.3743C42.5837 51.3248 44.1901 48.9275 45.3533 46.1996C46.5866 43.4333 47.2 40.4933 47.2 37.4V4.04004Z" fill="#F0F1EC" stroke="#879A77" stroke-width="4" />
                <path d="M12.6001 0.0400391H36.6001V38.04C36.6001 44.6675 31.2275 50.04 24.6001 50.04C17.9727 50.04 12.6001 44.6675 12.6001 38.04V0.0400391Z" fill="#879A77" />
            </svg>pcoming events
        </h2>
        <ul class="events__list events" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".events">
            <li>
                <div class="events__item">
                    <p class="events__item-caption">Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach.</p>
                </div>
            </li>
            <?php

            $events = cchideaway_get_posts('event', 'rooftop');

            foreach ($events as $post) {
                get_template_part('template-parts/event');
            }
            ?>

        </ul>
    </div>
</section><!-- Events :: End-->

<!-- Team  :: Start-->
<section class="team" data-aos="fade-in" data-aos-anchor=".team">
    <div class="container-fluid">
        <h2 class="team__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".team">Meet the team</h2>
        <div class="team__swiper" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".team">
            <div class="swiper swiper-team js-swiper-team">
                <div class="swiper-wrapper">
                <?php

                $teams = cchideaway_get_posts('team', 'rooftop');

                foreach ($teams as $post) {

                    get_template_part('template-parts/team');
                }
                ?>

                </div>
                <div class="swiper-pagination js-swiper-team-pagination"></div>
                <div class="swiper-prev js-swiper-team-prev">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle r="22.5" transform="matrix(-1 0 0 1 23 23)" fill="#F0F1EC" stroke="#444444" />
                        <path d="M9.46967 23.5303C9.17678 23.2374 9.17678 22.7626 9.46967 22.4697L14.2426 17.6967C14.5355 17.4038 15.0104 17.4038 15.3033 17.6967C15.5962 17.9896 15.5962 18.4645 15.3033 18.7574L11.0607 23L15.3033 27.2426C15.5962 27.5355 15.5962 28.0104 15.3033 28.3033C15.0104 28.5962 14.5355 28.5962 14.2426 28.3033L9.46967 23.5303ZM36 23.75L10 23.75V22.25L36 22.25L36 23.75Z" fill="#444444" />
                    </svg>
                </div>
                <div class="swiper-next js-swiper-team-next">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23" cy="23" r="22.5" fill="#F0F1EC" stroke="#444444" />
                        <path d="M36.5303 23.5303C36.8232 23.2374 36.8232 22.7626 36.5303 22.4697L31.7574 17.6967C31.4645 17.4038 30.9896 17.4038 30.6967 17.6967C30.4038 17.9896 30.4038 18.4645 30.6967 18.7574L34.9393 23L30.6967 27.2426C30.4038 27.5355 30.4038 28.0104 30.6967 28.3033C30.9896 28.5962 31.4645 28.5962 31.7574 28.3033L36.5303 23.5303ZM10 23.75L36 23.75V22.25L10 22.25L10 23.75Z" fill="#444444" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section><!-- Team :: End-->


</main><!-- Main :: End-->

<?php get_footer(); ?>