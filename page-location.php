<?php get_header(); ?>

<?php $onmap = get_field('on_the_map', 'option'); ?>

<main class="main">

    <?php get_template_part('template-parts/blocks/intro', 'description'); ?>

    <!-- Nearby  :: Start-->
    <section class="nearby" data-aos="fade-in" data-aos-anchor=".nearby">
        <div class="container-fluid">
            <div class="nearby__decor" data-aos="fade-in" data-aos-delay="200" data-aos-anchor=".nearby">
                <svg width="752" height="502" viewBox="0 0 752 502" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path d="M751 145.5V1H1V501H751V462.458" stroke="#444444" />
                </svg>
            </div>
            <div class="nearby__wrapper">
                <h2 class="nearby__title" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".nearby">An<svg width="36" height="48" viewBox="0 0 36 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5729 43.592V43.92V45.92H27.5729H31.5413H33.5413V43.92V4V2H31.5413H27.5729H25.5729V4V16.766C25.119 16.4732 24.6452 16.2033 24.152 15.9563C22.1643 14.941 20.0174 14.438 17.741 14.438C15.5771 14.438 13.5081 14.8673 11.5532 15.7294C9.66742 16.5391 7.99673 17.6679 6.5541 19.1105C5.14255 20.5221 4.03448 22.1784 3.22782 24.0606C2.40504 25.9804 2 28.0267 2 30.179C2 32.3314 2.40503 34.3913 3.22123 36.3411L3.22449 36.3489L3.22782 36.3566C4.03208 38.2332 5.13379 39.9002 6.53183 41.3433L6.55392 41.3661L6.57672 41.3882C8.01985 42.7862 9.68677 43.8879 11.5634 44.6922L11.5711 44.6955L11.5789 44.6988C13.5287 45.515 15.5886 45.92 17.741 45.92C20.0174 45.92 22.1645 45.4169 24.1522 44.4016C24.6453 44.1546 25.1191 43.8847 25.5729 43.592ZM20.7582 37.3373L20.7473 37.3419L20.7364 37.3466C19.8129 37.7468 18.8211 37.9517 17.741 37.9517C16.6609 37.9517 15.6691 37.7468 14.7456 37.3466C13.7865 36.931 12.9509 36.3803 12.2259 35.6941C11.5397 34.9691 10.989 34.1335 10.5734 33.1744C10.1732 32.2509 9.96831 31.2591 9.96831 30.179C9.96831 29.0989 10.1732 28.1071 10.5734 27.1836L10.5781 27.1727L10.5827 27.1618C11.0004 26.1656 11.5463 25.3469 12.21 24.679C12.9386 23.9857 13.7795 23.43 14.7456 23.0114C15.6691 22.6112 16.6609 22.4063 17.741 22.4063C18.8211 22.4063 19.8129 22.6112 20.7364 23.0114L20.7473 23.0161L20.7582 23.0207C21.7622 23.4417 22.5858 23.9927 23.2565 24.6635L23.2722 24.6792L23.2883 24.6945C23.9869 25.3628 24.5454 26.1766 24.9586 27.1618L24.9632 27.1727L24.9679 27.1836C25.3681 28.1071 25.5729 29.0989 25.5729 30.179C25.5729 31.2591 25.3681 32.2509 24.9679 33.1744C24.5541 34.1292 23.9857 34.9653 23.2565 35.6945C22.5858 36.3652 21.7622 36.9163 20.7582 37.3373Z" fill="#F0F1EC" stroke="#879A77" stroke-width="4" />
                        <circle cx="17.7709" cy="30.5936" r="8.14392" fill="#879A77" />
                    </svg>what is nearby?</h2>
                <p class="nearby__text nearby__text--01" data-aos="fade-left" data-aos-delay="600" data-aos-anchor=".nearby">seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
                <p class="nearby__text nearby__text--02" data-aos="fade-left" data-aos-delay="800" data-aos-anchor=".nearby">Seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday.
                    <br> Seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday.
                </p>
            </div>
        </div>
    </section><!-- Nearby  :: End-->
    <!-- Locations  :: Start-->
    <section class="locations" data-aos="fade-in" data-aos-anchor=".locations">
        <div class="container-fluid">
            <ul class="locations__list">
                <li>
                    <div class="locations__item">
                        <div class="row">
                            <div class="col-lg-9">
                                <picture class="locations__item-image" data-aos="fade-in" data-aos-delay="200">
                                    
                                    <img src="<?php echo get_theme_file_uri('/assets/images/img-locations-01.png'); ?>" alt="[Alt]" />
                                </picture>
                                <h2 class="locations__item-title" data-aos="fade-right" data-aos-delay="400">Karon beach</h2>
                            </div>
                            <div class="col-lg-3">
                                <p class="locations__item-text" data-aos="fade-up" data-aos-delay="600">Seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="locations__item">
                        <div class="row">
                            <div class="col-lg-9">
                                <picture class="locations__item-image" data-aos="fade-in" data-aos-delay="200">
                                    
                                    <img src="<?php echo get_theme_file_uri('/assets/images/img-locations-02.png'); ?>" alt="[Alt]" />
                                </picture>
                                <h2 class="locations__item-title" data-aos="fade-left" data-aos-delay="400">Kata Noi beach</h2>
                            </div>
                            <div class="col-lg-3">
                                <p class="locations__item-text" data-aos="fade-up" data-aos-delay="600">seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="locations__item">
                        <div class="row">
                            <div class="col-lg-9">
                                <picture class="locations__item-image" data-aos="fade-in" data-aos-delay="200">
                                    
                                    <img src="<?php echo get_theme_file_uri('/assets/images/img-locations-03.png'); ?>" alt="[Alt]" />
                                </picture>
                                <h2 class="locations__item-title" data-aos="fade-right" data-aos-delay="400">Kata Sourth, North</h2>
                            </div>
                            <div class="col-lg-3">
                                <p class="locations__item-text" data-aos="fade-up" data-aos-delay="600">seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Locations :: End-->
    <!-- Places :: Start-->
    <section class="places" data-aos="fade-in" data-aos-anchor=".places">
        <div class="container-fluid">
            <ul class="places__list">
                <li data-aos="fade-in">
                    <div class="places__item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="places__item-desc">
                                    <h2 class="places__item-title" data-aos="fade-up" data-aos-delay="200">Big Buddha</h2>
                                    <p class="places__item-text" data-aos="fade-up" data-aos-delay="400">seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <picture class="places__item-image" data-aos="fade-in" data-aos-delay="600">
                                    
                                    <img src="<?php echo get_theme_file_uri('/assets/images/img-places-01.png'); ?>" alt="[Alt]" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </li>
                <lii data-aos="fade-in">
                    <div class="places__item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="places__item-desc">
                                    <h2 class="places__item-title" data-aos="fade-up" data-aos-delay="200">Night market</h2>
                                    <p class="places__item-text" data-aos="fade-up" data-aos-delay="400">seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <picture class="places__item-image" data-aos="fade-in" data-aos-delay="600">
                                    
                                    <img src="<?php echo get_theme_file_uri('/assets/images/img-places-02.png'); ?>" alt="[Alt]" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </lii>
            </ul>
        </div>
    </section><!-- Places :: End-->



    <!-- Offer :: Start-->
    <section class="offer" data-aos="fade-in" data-aos-anchor=".offer">
        <div class="container-fluid">
            <h2 class="offer__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".offer">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M39.5232 39.6136L39.5311 39.606L39.5388 39.5982C41.5414 37.5956 43.1077 35.2663 44.2344 32.6252C45.4142 29.9134 46 27.0317 46 24C46 20.9705 45.415 18.1061 44.2321 15.4288C43.1055 12.7898 41.54 10.4624 39.5388 8.46116C37.5377 6.45997 35.2102 4.89451 32.5713 3.76791C29.894 2.58502 27.0295 2 24 2C20.9682 2 18.0866 2.58583 15.3748 3.76558C12.7337 4.89234 10.4044 6.45859 8.40181 8.46116L8.39404 8.46893L8.38636 8.47678C6.43262 10.4739 4.8756 12.7921 3.71417 15.416L3.70859 15.4286L3.70318 15.4413C2.563 18.1164 2 20.9762 2 24C2 27.024 2.56301 29.8993 3.69864 32.6073L3.70623 32.6254L3.71417 32.6433C4.8756 35.2673 6.43262 37.5854 8.38636 39.5826L8.40172 39.5983L8.41744 39.6136C10.4146 41.5674 12.7327 43.1244 15.3567 44.2858L15.3746 44.2938L15.3927 44.3014C18.1007 45.437 20.976 46 24 46C27.0238 46 29.8836 45.437 32.5587 44.2968L32.5714 44.2914L32.584 44.2858C35.2079 43.1244 37.5261 41.5674 39.5232 39.6136ZM36.9335 18.6024L36.9363 18.6091L36.9392 18.6157C37.6599 20.2975 38.0237 22.086 38.0237 24C38.0237 25.9561 37.6589 27.7868 36.9361 29.51C36.2057 31.212 35.205 32.6941 33.9308 33.9707C32.6506 35.214 31.16 36.2036 29.4436 36.9392C27.7664 37.658 25.9587 38.0237 24 38.0237C22.0413 38.0237 20.2336 37.658 18.5564 36.9392C16.84 36.2036 15.3495 35.214 14.0693 33.9708C12.795 32.6941 11.7942 31.2119 11.0637 29.5097C10.3411 27.7866 9.97626 25.956 9.97626 24C9.97626 22.086 10.3401 20.2975 11.0608 18.6157L11.0637 18.6091L11.0665 18.6024C11.7987 16.859 12.7976 15.3852 14.0594 14.1575L14.0692 14.1479L14.0789 14.1382C15.3595 12.8577 16.8471 11.8527 18.5564 11.1202L18.5721 11.1134L18.5877 11.1064C20.2578 10.3566 22.0544 9.97626 24 9.97626C25.9455 9.97626 27.7422 10.3566 29.4123 11.1064L29.4279 11.1134L29.4436 11.1202C31.1529 11.8528 32.6405 12.8577 33.9211 14.1382L33.9308 14.1479L33.9406 14.1575C35.2024 15.3852 36.2013 16.859 36.9335 18.6024Z" fill="#F0F1EC" stroke="#879A77" stroke-width="4" />
                    <path d="M38.479 23.8732C38.479 31.6576 32.1684 37.9681 24.384 37.9681C16.5996 37.9681 10.2891 31.6576 10.2891 23.8732C10.2891 16.0887 16.5996 9.7782 24.384 9.7782C32.1684 9.7782 38.479 16.0887 38.479 23.8732Z" fill="#879A77" />
                </svg>n the map
            </h2>

            <div class="acf-map">
                <div class="marker" data-lat="<?php echo $onmap['lat']; ?>" data-lon="<?php echo $onmap['lon']; ?>"></div>
            </div>
            
        </div>
    </section><!-- Offer :: End-->

    <?php 
    $textType = get_field('plain_text_type');
    get_template_part('template-parts/blocks/text', $textType); ?>
</main><!-- Main :: End-->

<?php get_footer(); ?>