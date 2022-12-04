<?php get_header(); ?>

<!-- Main :: Start-->
<main class="main">

    <?php get_template_part('template-parts/blocks/intro', 'description'); ?>

    <!-- Try  :: Start-->
    <section class="try" data-aos="fade-in" data-aos-anchor=".try">
        <div class="container-fluid">
            <div class="try__wrapper">
                <div class="try__decor">
                    <svg width="950" height="542" viewBox="0 0 950 542" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M949 142V1H1V541H949V346.5" stroke="#444444" />
                    </svg>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <picture class="try__image" data-aos="fade-right" data-aos-anchor=".try">

                            <img src="<?php echo wp_get_attachment_image_url(get_field('spa_image', 'options'), 'medium_large'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-4">
                        <p class="try__text" data-aos="fade-left" data-aos-anchor=".try"> 
                        <?php echo get_field('spa_text', 'options');  ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="try__button" data-aos="fade-up" data-aos-anchor=".try">
                <a class="ui-btn ui-btn--responsive ui-btn--primary" href="#">see spa menu<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                    </svg>
                </a>
            </div>
        </div>
    </section><!-- Try  :: End-->


    <!-- Plain text :: Start -->
    <?php
    $textType = get_field('plain_text_type');
    get_template_part('template-parts/blocks/text', $textType); ?>
    <!-- Plain text :: End -->


    <!-- Yoga-styles :: Start-->
    <section class="yoga-styles" data-aos="fade-in" data-aos-anchor=".yoga-styles">
        <div class="container-fluid">
            <div class="yoga-styles__grid" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".yoga-styles">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="yoga-styles__title">Our spa types</h2>
                    </div>

                    <?php

                    $spatypes = cchideaway_get_posts('service', 'spa');   
                    
                    $counter = 0;                    

                    foreach ($spatypes as $post) {
                        get_template_part('template-parts/spatype', null, $args = array('counter' => $counter));         
                        $counter++;                  
                    }
                    ?>


                </div>
            </div>
            <div class="yoga-styles__button" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".yoga-styles">
                <a class="ui-btn ui-btn--responsive ui-btn--primary" href="<?php echo get_field('spa_menu', 'options');  ?>" target="_blank">see spa menu<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                    </svg>
                </a>
            </div>
        </div>
    </section><!-- Yoga-styles :: End-->

    <!-- Offer :: Start-->
    <section class="offer" data-aos="fade-in" data-aos-anchor=".offer">
        <div class="container-fluid">
            <h2 class="offer__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".offer">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M39.5232 39.6136L39.5311 39.606L39.5388 39.5982C41.5414 37.5956 43.1077 35.2663 44.2344 32.6252C45.4142 29.9134 46 27.0317 46 24C46 20.9705 45.415 18.1061 44.2321 15.4288C43.1055 12.7898 41.54 10.4624 39.5388 8.46116C37.5377 6.45997 35.2102 4.89451 32.5713 3.76791C29.894 2.58502 27.0295 2 24 2C20.9682 2 18.0866 2.58583 15.3748 3.76558C12.7337 4.89234 10.4044 6.45859 8.40181 8.46116L8.39404 8.46893L8.38636 8.47678C6.43262 10.4739 4.8756 12.7921 3.71417 15.416L3.70859 15.4286L3.70318 15.4413C2.563 18.1164 2 20.9762 2 24C2 27.024 2.56301 29.8993 3.69864 32.6073L3.70623 32.6254L3.71417 32.6433C4.8756 35.2673 6.43262 37.5854 8.38636 39.5826L8.40172 39.5983L8.41744 39.6136C10.4146 41.5674 12.7327 43.1244 15.3567 44.2858L15.3746 44.2938L15.3927 44.3014C18.1007 45.437 20.976 46 24 46C27.0238 46 29.8836 45.437 32.5587 44.2968L32.5714 44.2914L32.584 44.2858C35.2079 43.1244 37.5261 41.5674 39.5232 39.6136ZM36.9335 18.6024L36.9363 18.6091L36.9392 18.6157C37.6599 20.2975 38.0237 22.086 38.0237 24C38.0237 25.9561 37.6589 27.7868 36.9361 29.51C36.2057 31.212 35.205 32.6941 33.9308 33.9707C32.6506 35.214 31.16 36.2036 29.4436 36.9392C27.7664 37.658 25.9587 38.0237 24 38.0237C22.0413 38.0237 20.2336 37.658 18.5564 36.9392C16.84 36.2036 15.3495 35.214 14.0693 33.9708C12.795 32.6941 11.7942 31.2119 11.0637 29.5097C10.3411 27.7866 9.97626 25.956 9.97626 24C9.97626 22.086 10.3401 20.2975 11.0608 18.6157L11.0637 18.6091L11.0665 18.6024C11.7987 16.859 12.7976 15.3852 14.0594 14.1575L14.0692 14.1479L14.0789 14.1382C15.3595 12.8577 16.8471 11.8527 18.5564 11.1202L18.5721 11.1134L18.5877 11.1064C20.2578 10.3566 22.0544 9.97626 24 9.97626C25.9455 9.97626 27.7422 10.3566 29.4123 11.1064L29.4279 11.1134L29.4436 11.1202C31.1529 11.8528 32.6405 12.8577 33.9211 14.1382L33.9308 14.1479L33.9406 14.1575C35.2024 15.3852 36.2013 16.859 36.9335 18.6024Z" fill="#F0F1EC" stroke="#879A77" stroke-width="4" />
                    <path d="M38.479 23.8732C38.479 31.6576 32.1684 37.9681 24.384 37.9681C16.5996 37.9681 10.2891 31.6576 10.2891 23.8732C10.2891 16.0887 16.5996 9.7782 24.384 9.7782C32.1684 9.7782 38.479 16.0887 38.479 23.8732Z" fill="#879A77" />
                </svg>ur special offer
            </h2>

            <?php

            $offers = cchideaway_get_posts('offer', 'spa');                           

            foreach ($offers as $post) {
                get_template_part('template-parts/offer');                                      
            }
            ?>
        </div>
    </section><!-- Offer :: End-->

</main><!-- Main :: End-->

<?php get_footer(); ?>