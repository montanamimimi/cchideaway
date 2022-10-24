<?php get_header(); ?>

<!-- Main :: Start-->
<main class="main">
    <!-- Intro :: Start-->
    <section class="intro" data-aos="fade-in" data-aos-anchor=".intro">
        <div class="container-fluid">
            <picture class="intro__image">                
                <img src="<?php echo get_the_post_thumbnail_url($post, 'large'); ?>" alt="Nutrition and detox wallpaper" />
            </picture>
            <div class="intro__desc">
                <h1 class="intro__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".intro">Nutrition & Detox</h1>
                <p class="intro__text" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".intro">Receive a detailed evaluation of your health through holistic nutrition, including current diet and medical history analysis, and follow up wellness guidelines.</p>
            </div>
            <div class="intro__booking" data-aos="fade-up" data-aos-delay="600" data-aos-anchor=".intro">
                <div class="ui-booking">
                    <form action="#">
                        <div class="ui-booking__data">
                            <div class="row">
                                <div class="col-3">
                                    <label class="ui-booking__label">From date</label>
                                    <input class="ui-booking__input js-datepicker" type="text" value="01/06" readonly>
                                </div>
                                <div class="col-3">
                                    <label class="ui-booking__label">To date</label>
                                    <input class="ui-booking__input js-datepicker" type="text" value="14/06" readonly>
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
    <!-- Clean  :: Start-->
    <section class="clean" data-aos="fade-in" data-aos-anchor=".clean">
        <div class="container-fluid">
            <div class="clean__decor" data-aos="fade-in" data-aos-delay="200" data-aos-anchor=".clean">
                <svg width="976" height="520" viewBox="0 0 976 520" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path d="M975 89.7315V1H1V519H975V456" stroke="#444444" />
                </svg>
            </div>
            <div class="clean__wrapper">
                <h2 class="clean__title" data-aos="fade-left" data-aos-delay="400" data-aos-anchor=".clean"> Holistic cleanse day</h2>
                <picture class="clean__image" data-aos="fade-right" data-aos-delay="600" data-aos-anchor=".clean">
                    
                    <img src="<?php echo get_theme_file_uri('assets/images/img-clean.png'); ?>" alt="Holistic cleanse day" />
                </picture>
                <p class="clean__text" data-aos="fade-left" data-aos-delay="800" data-aos-anchor=".clean"> Nutritionally balanced & delicious detox cleanse day - a moderate cleanse perfect for the first time detox experience, focuses on natural detoxing of our physical and emotional self with a plant-based meals, superfood drinks, alkaline cold pressed juices and natural supplements. </p>
            </div>
        </div>
    </section><!-- Clean  :: End-->
    <!-- Move :: start-->
    <section class="move">
        <div class="container-fluid">
            <ul class="move__menu">
                <li data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".move">
                    <a class="move__item" href="#">
                        <h3 class="move__item-title"> Nutrition<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.5303 23.5303C36.8232 23.2374 36.8232 22.7626 36.5303 22.4697L31.7574 17.6967C31.4645 17.4038 30.9896 17.4038 30.6967 17.6967C30.4038 17.9896 30.4038 18.4645 30.6967 18.7574L34.9393 23L30.6967 27.2426C30.4038 27.5355 30.4038 28.0104 30.6967 28.3033C30.9896 28.5962 31.4645 28.5962 31.7574 28.3033L36.5303 23.5303ZM10 23.75L36 23.75V22.25L10 22.25L10 23.75Z" fill="currentColor" />
                            </svg>
                        </h3>
                        <p class="move__item-text">Prana Eatery Restaurant with the most delicious breakfasts that will make your day</p>
                    </a>
                </li>
                <li data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".move">
                    <a class="move__item" href="#">
                        <h3 class="move__item-title"> Detox<svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.5303 23.5303C36.8232 23.2374 36.8232 22.7626 36.5303 22.4697L31.7574 17.6967C31.4645 17.4038 30.9896 17.4038 30.6967 17.6967C30.4038 17.9896 30.4038 18.4645 30.6967 18.7574L34.9393 23L30.6967 27.2426C30.4038 27.5355 30.4038 28.0104 30.6967 28.3033C30.9896 28.5962 31.4645 28.5962 31.7574 28.3033L36.5303 23.5303ZM10 23.75L36 23.75V22.25L10 22.25L10 23.75Z" fill="currentColor" />
                            </svg>
                        </h3>
                        <p class="move__item-text">Learn more about our nutrition concept, unique techniques will help you take a fresh look at the whole process</p>
                    </a>
                </li>
            </ul>
        </div>
    </section><!-- Move :: End-->

    <?php 
    $textType = get_field('plain_text_type');
    get_template_part('template-parts/blocks/text', $textType); ?>
<!-- Packages :: Start-->
<section class="packages" data-aos="fade-in">
    <div class="container-fluid">
        <h2 class="packages__title" data-aos="fade-up" data-aos-delay="200">Our pack<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.95 2V1H15.95H13.94H12.94V2V2.19007C12.7044 2.03701 12.4581 1.89619 12.2013 1.76764C11.1965 1.25434 10.111 1 8.96 1C7.86571 1 6.81949 1.2171 5.83096 1.65305C4.87729 2.06251 4.03244 2.63335 3.30289 3.36289C2.58616 4.07962 2.02605 4.92932 1.61918 5.89998C1.20428 6.86957 1 7.90299 1 8.99C1 10.0786 1.20483 11.1202 1.61756 12.1061L1.61753 12.1062L1.62085 12.1139C2.02761 13.063 2.58477 13.906 3.29176 14.6358L3.3028 14.6472L3.3142 14.6582C4.044 15.3652 4.88698 15.9224 5.83608 16.3291L5.83607 16.3292L5.84386 16.3324C6.82982 16.7452 7.87145 16.95 8.96 16.95C10.111 16.95 11.1964 16.6957 12.2013 16.1824C12.458 16.0538 12.7043 15.913 12.94 15.7599V15.95V16.95H13.94H15.95H16.95V15.95V2ZM10.4933 12.6278L10.4932 12.6277L10.4824 12.6324C10.0129 12.8359 9.5088 12.94 8.96 12.94C8.4112 12.94 7.90709 12.8359 7.43761 12.6324C6.95035 12.4213 6.52571 12.1415 6.15732 11.7927C5.80854 11.4243 5.5287 10.9997 5.31756 10.5124C5.11411 10.0429 5.01 9.5388 5.01 8.99C5.01 8.4412 5.11411 7.93709 5.31756 7.46761L5.31762 7.46764L5.32219 7.45673C5.53605 6.94676 5.81609 6.52813 6.15711 6.18711C6.52763 5.81658 6.95249 5.52778 7.43761 5.31756C7.90709 5.11411 8.4112 5.01 8.96 5.01C9.5088 5.01 10.0129 5.11411 10.4824 5.31756L10.4824 5.31762L10.4933 5.32219C10.9939 5.53212 11.4076 5.81598 11.7474 6.17122L11.7627 6.18728L11.7788 6.20264C12.134 6.54244 12.4179 6.95613 12.6278 7.45673L12.6277 7.45675L12.6324 7.46761C12.8359 7.93709 12.94 8.4412 12.94 8.99C12.94 9.5388 12.8359 10.0429 12.6324 10.5124C12.4222 10.9975 12.1334 11.4224 11.7629 11.7929C11.4219 12.1339 11.0032 12.4139 10.4933 12.6278Z" fill="#F0F1EC" stroke="#879A77" stroke-width="2" />
                <circle cx="9.1001" cy="8.9502" r="4" fill="#879A77" />
            </svg>ges</h2>
        <ul class="packages__list">

            <?php

            $packages = cchideaway_get_packages('detox');

            foreach ($packages as $post) {

                get_template_part('template-parts/package');
            }
            ?>

        </ul>
    </div>
</section><!-- Packeages :: End-->

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

            $events = cchideaway_get_posts('event', 'detox');

            foreach ($events as $post) {
                get_template_part('template-parts/event');
            }
            ?>

        </ul>
    </div>
</section><!-- Events :: End-->

</main><!-- Main :: End-->

<?php get_footer(); ?>