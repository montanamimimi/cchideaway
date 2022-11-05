<?php get_header(); ?>

<!-- Main :: Start-->
<main class="main">
    <!-- Intro :: Start-->
    <section class="intro" data-aos="fade-in" data-aos-anchor=".intro">
        <div class="container-fluid">
            <picture class="intro__image">
                
                <img src="<?php echo get_the_post_thumbnail_url($post, 'large'); ?>" alt="Our best adventures" />
            </picture>
            <h1 class="intro__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".intro">Eco adventures</h1>
            <p class="intro__text" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".intro">Jungle hiking/trekking begins on the green slopes of Kate, where Big Buddha sits. </p>
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
    <!-- Beauty  :: Start-->
    <section class="beauty" data-aos="fade-in" data-aos-anchor=".beauty">
        <div class="container-fluid">
            <h2 class="beauty__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".beauty">All the beauty of Phuket</h2>
            <p class="beauty__text" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".beauty">You experienced an exclusive hiking/ trekking adventure in Phuket. Jungle hiking/ trekking begins on the green slopes of Kate, where Big Buddha sits. </p>
            <div class="beauty__grid">
                <div class="row">
                    <div class="col-lg-9">
                        <picture class="beauty__image beauty__image--01" data-aos="fade-in" data-aos-delay="600" data-aos-anchor=".beauty">
                            
                            <img src="<?php echo get_theme_file_uri('assets/images/img-beauty-01.png'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-3">
                        <p class="beauty__blockquote beauty__blockquote--01" data-aos="fade-up" data-aos-delay="800" data-aos-anchor=".beauty">Tuesday's Program - hiking tour - visits an organic farm and has lunch with a choice of many organic foods </p>
                        <picture class="beauty__image beauty__image--02" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor=".beauty">
                            
                            <img src="<?php echo get_theme_file_uri('assets/images/img-beauty-02.png'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-12">
                        <p class="beauty__blockquote beauty__blockquote--02" data-aos="fade-up" data-aos-delay="1200" data-aos-anchor=".beauty">You experienced an exclusive hiking/ trekking adventure in Phuket. Jungle hiking/ trekking begins on the green slopes of Kate, where Big Buddha sits. You then arrive at Phuket’s Big Buddha.
                            <br> This program is ideal for people who like to make, though this like/trek is considered to be difficult.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Beauty  :: End-->
    <!-- Activity :: Start-->
    <section class="activity" data-aos="fade-in" data-aos-anchor=".activity">
        <div class="container-fluid">
            <h2 class="activity__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".activity">Activity </h2>
            <p class="activity__text" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".activity">Tuesday's Program - hiking tour - visits an organic farm and has lunch with a choice of many organic foods.</p>
            <div class="activity__swiper" data-aos="fade-up" data-aos-delay="600" data-aos-anchor=".activity">
                <div class="swiper swiper-activity js-swiper-activity">
                    <div class="swiper-wrapper">
                    <?php

                    $activities = cchideaway_get_posts('activity', 'ours');                  

                    foreach ($activities as $post) {

                        get_template_part('template-parts/activity');
                    }
                    ?>
                    </div>
                    <div class="swiper-pagination js-swiper-activity-pagination"></div>
                </div>
            </div>
        </div>
    </section><!-- Activity :: End-->

    <!-- Packages :: Start-->
<section class="packages" data-aos="fade-in">
    <div class="container-fluid">
        <h2 class="packages__title" data-aos="fade-up" data-aos-delay="200">Our pack<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.95 2V1H15.95H13.94H12.94V2V2.19007C12.7044 2.03701 12.4581 1.89619 12.2013 1.76764C11.1965 1.25434 10.111 1 8.96 1C7.86571 1 6.81949 1.2171 5.83096 1.65305C4.87729 2.06251 4.03244 2.63335 3.30289 3.36289C2.58616 4.07962 2.02605 4.92932 1.61918 5.89998C1.20428 6.86957 1 7.90299 1 8.99C1 10.0786 1.20483 11.1202 1.61756 12.1061L1.61753 12.1062L1.62085 12.1139C2.02761 13.063 2.58477 13.906 3.29176 14.6358L3.3028 14.6472L3.3142 14.6582C4.044 15.3652 4.88698 15.9224 5.83608 16.3291L5.83607 16.3292L5.84386 16.3324C6.82982 16.7452 7.87145 16.95 8.96 16.95C10.111 16.95 11.1964 16.6957 12.2013 16.1824C12.458 16.0538 12.7043 15.913 12.94 15.7599V15.95V16.95H13.94H15.95H16.95V15.95V2ZM10.4933 12.6278L10.4932 12.6277L10.4824 12.6324C10.0129 12.8359 9.5088 12.94 8.96 12.94C8.4112 12.94 7.90709 12.8359 7.43761 12.6324C6.95035 12.4213 6.52571 12.1415 6.15732 11.7927C5.80854 11.4243 5.5287 10.9997 5.31756 10.5124C5.11411 10.0429 5.01 9.5388 5.01 8.99C5.01 8.4412 5.11411 7.93709 5.31756 7.46761L5.31762 7.46764L5.32219 7.45673C5.53605 6.94676 5.81609 6.52813 6.15711 6.18711C6.52763 5.81658 6.95249 5.52778 7.43761 5.31756C7.90709 5.11411 8.4112 5.01 8.96 5.01C9.5088 5.01 10.0129 5.11411 10.4824 5.31756L10.4824 5.31762L10.4933 5.32219C10.9939 5.53212 11.4076 5.81598 11.7474 6.17122L11.7627 6.18728L11.7788 6.20264C12.134 6.54244 12.4179 6.95613 12.6278 7.45673L12.6277 7.45675L12.6324 7.46761C12.8359 7.93709 12.94 8.4412 12.94 8.99C12.94 9.5388 12.8359 10.0429 12.6324 10.5124C12.4222 10.9975 12.1334 11.4224 11.7629 11.7929C11.4219 12.1339 11.0032 12.4139 10.4933 12.6278Z" fill="#F0F1EC" stroke="#879A77" stroke-width="2" />
                <circle cx="9.1001" cy="8.9502" r="4" fill="#879A77" />
            </svg>ges</h2>
        <ul class="packages__list">

            <?php

            $packages = cchideaway_get_posts('package', 'adventure');

            foreach ($packages as $post) {

                get_template_part('template-parts/package');
            }
            ?>

        </ul>
    </div>
</section><!-- Packeages :: End-->

<!-- Team  :: Start-->
<section class="team" data-aos="fade-in" data-aos-anchor=".team">
    <div class="container-fluid">
        <h2 class="team__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".team">Meet the team</h2>
        <div class="team__swiper" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".team">
            <div class="swiper swiper-team js-swiper-team">
                <div class="swiper-wrapper">
                <?php

                $teams = cchideaway_get_posts('team', 'adventure');

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