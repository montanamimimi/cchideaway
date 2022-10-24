<?php get_header(); ?>

<main class="main">
    <!-- Intro :: Start-->
    <section class="intro" data-aos="fade-in" data-aos-anchor=".intro">
        <div class="container-fluid">
            <picture class="intro__image">

                <img src="<?php echo get_the_post_thumbnail_url($post, 'large'); ?>" alt="CC hideaway hotel" />
            </picture>
            <div class="intro__desc">
                <h1 class="intro__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".intro">Truly heavenly places</h1>
            </div>
            <div class="intro__booking" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".intro">
                <div class="ui-booking">
                    <form action="#">
                        <div class="ui-booking__data">
                            <div class="row">
                                <div class="col-3">
                                    <label class="ui-booking__label">From date</label>
                                    <input class="ui-booking__input js-datepicker js-datepicker-from" type="text" value="01/06" readonly>
                                </div>
                                <div class="col-3">
                                    <label class="ui-booking__label">To date</label>
                                    <input class="ui-booking__input js-datepicker js-datepicker-to" type="text" value="14/06" readonly>
                                </div>
                                <div class="col-3">
                                    <label class="ui-booking__label">Adults</label>
                                    <div class="ui-booking__number">
                                        <button class="ui-booking__decrease">-</button>
                                        <input class="ui-booking__input" type="number" value="2">
                                        <button class="ui-booking__increase">+</button>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="ui-booking__label">Children</label>
                                    <div class="ui-booking__number">
                                        <button class="ui-booking__decrease">-</button>
                                        <input class="ui-booking__input" type="number" value="0">
                                        <button class="ui-booking__increase">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui-booking__button">
                            <a class="ui-btn ui-btn--booking" href="#">Book</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- Intro :: End-->
    <!-- Dishes :: Start-->
    <section class="dishes" data-aos="fade-in" data-aos-anchor=".dishes">
        <div class="container-fluid">
            <div class="dishes__grid">
                <div class="dishes__grid-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="dishes__decor" data-aos="fade-in" data-aos-delay="200" data-aos-anchor=".dishes"></span>
                            <h2 class="dishes__title" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".dishes">Wellness cousine</h2>
                        </div>
                        <div class="col-lg-3">
                            <p class="dishes__text dishes__text--01" data-aos="fade-up" data-aos-delay="600" data-aos-anchor=".dishes">Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach.</p>
                        </div>
                        <div class="col-lg-9">
                            <picture class="dishes__image dishes__image--01" data-aos="fade-in" data-aos-delay="800" data-aos-anchor=".dishes">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-dishes-01.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="dishes__grid-group">
                    <div class="row">
                        <div class="col-lg-3 order-lg-2">
                            <p class="dishes__text dishes__text--02" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor=".dishes">Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach. Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach. Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach.</p>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <picture class="dishes__image dishes__image--02" data-aos="fade-in" data-aos-delay="1200" data-aos-anchor=".dishes">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-dishes-02.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                        <div class="col-lg-3 order-lg-3">
                            <picture class="dishes__image dishes__image--03" data-aos="fade-in" data-aos-delay="1400" data-aos-anchor=".dishes">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-dishes-03.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dishes__button" data-aos="fade-up" data-aos-delay="1600" data-aos-anchor=".dishes">
                <a class="ui-btn ui-btn--responsive ui-btn--primary" href="#">see menu<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                    </svg>
                </a>
            </div>
        </div>
    </section><!-- Dishes :: End-->
    <!-- Country :: Start-->
    <section class="country" data-aos="fade-in" data-aos-anchor=".country">
        <div class="container-fluid">
            <h2 class="country__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".country"> Authentic Thai</h2>
            <div class="country__grid">
                <div class="country__grid-group">
                    <div class="row">
                        <div class="col-lg-9">
                            <picture class="country__image country__image--01" data-aos="fade-in" data-aos-delay="400" data-aos-anchor=".country">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-country-01.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                        <div class="col-lg-3">
                            <p class="country__text country__text--01" data-aos="fade-up" data-aos-delay="600" data-aos-anchor=".country"> Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach.</p>
                        </div>
                    </div>
                </div>
                <div class="country__grid-group">
                    <div class="row">
                        <div class="col-lg-4 order-lg-2">
                            <picture class="country__image country__image--02" data-aos="fade-in" data-aos-delay="800" data-aos-anchor=".country">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-country-02.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                        <div class="col-lg-3 order-lg-3">
                            <picture class="country__image country__image--03" data-aos="fade-in" data-aos-delay="1000" data-aos-anchor=".country">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-country-03.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                        <div class="col-lg-5 order-lg-1">
                            <p class="country__text country__text--02" data-aos="fade-up" data-aos-delay="1200" data-aos-anchor=".country"> Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach. Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach. Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="country__button" data-aos="fade-up" data-aos-delay="1400" data-aos-anchor=".country">
                <a class="ui-btn ui-btn--responsive ui-btn--primary" href="#">see menu<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                    </svg>
                </a>
            </div>
        </div>
    </section><!-- Country :: End-->
    <!-- Drinks :: Start-->
    <section class="drinks" data-aos="fade-in" data-aos-anchor=".drinks">
        <div class="container-fluid">
            <h2 class="drinks__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".drinks">Artizan drinks</h2>
            <div class="drinks__grid">
                <div class="drinks__grid-group">
                    <div class="row">
                        <div class="col-lg-9">
                            <picture class="drinks__image drinks__image--01" data-aos="fade-in" data-aos-delay="400" data-aos-anchor=".drinks">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-drinks-01.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                        <div class="col-lg-3">
                            <p class="drinks__text drinks__text--01" data-aos="fade-up" data-aos-delay="600" data-aos-anchor=".drinks"> Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach.</p>
                        </div>
                    </div>
                </div>
                <div class="drinks__grid-group">
                    <div class="row">
                        <div class="col-lg-4 order-lg-3">
                            <picture class="drinks__image drinks__image--02" data-aos="fade-in" data-aos-delay="800" data-aos-anchor=".drinks">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-drinks-02.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                        <div class="col-lg-4 order-lg-1">
                            <picture class="drinks__image drinks__image--03" data-aos="fade-in" data-aos-delay="1000" data-aos-anchor=".drinks">

                                <img src="<?php echo get_theme_file_uri('/assets/images/img-drinks-03.png'); ?>" alt="[Alt]" />
                            </picture>
                        </div>
                        <div class="col-lg-4 order-lg-2">
                            <p class="drinks__text drinks__text--02" data-aos="fade-up" data-aos-delay="1200" data-aos-anchor=".drinks"> Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach. Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach. Refuge Restaurant is located in CC's Hideaway near Kata Beach and Karon Beach.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="drinks__button" data-aos="fade-up" data-aos-delay="1400" data-aos-anchor=".drinks">
                <a class="ui-btn ui-btn--responsive ui-btn--primary" href="#">see menu<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                    </svg>
                </a>
            </div>
        </div>
    </section><!-- Drinks :: End-->


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

                $events = cchideaway_get_posts('event', 'restaurant');

                foreach ($events as $post) {
                    get_template_part('template-parts/event');
                }
                ?>

            </ul>
        </div>
    </section><!-- Events :: End-->


</main><!-- Main :: End-->

<?php get_footer(); ?>