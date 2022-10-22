<?php get_header(); ?>

<main class="main">
    <!-- Intro :: Start-->
    <section class="intro" data-aos="fade-in" data-aos-anchor=".intro">
        <div class="container-fluid">
            <picture class="intro__image">                                

                <video autoplay="" id="heroVideo" loop="" style="height: 100%;" muted="" poster="<?php echo get_theme_file_uri('/assets/images/img-intro-homepage.png'); ?>">
                    <source src="<?php  echo get_field('frontpage_video', 'options'); ?>" type="video/mp4" />                    
                </video>
                
            </picture>
            <h1 class="intro__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".intro">&nbsp;<br></h1>
            <!-- <div class="intro__play" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".intro">
                <a class="intro__play-btn" href="https://vimeo.com/642236327" data-fancybox>
                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.1441 28.2588L33.6494 27.3897L33.6492 27.3899L34.1441 28.2588ZM36.3394 28.4361L35.7188 29.2203L35.7197 29.221L36.3394 28.4361ZM51.1153 40.1011L50.4956 40.886L50.496 40.8863L51.1153 40.1011ZM51.1153 43.8992L50.496 43.114L50.4956 43.1143L51.1153 43.8992ZM36.3394 55.5642L35.7197 54.7793L35.719 54.7799L36.3394 55.5642ZM33 53.6651L34 53.6658V53.6651H33ZM33 30.3352H34L34 30.3343L33 30.3352ZM34.6387 29.1279C34.8136 29.0284 35.0014 28.9882 35.1838 29.003L35.3448 27.0095C34.7526 26.9616 34.1651 27.0963 33.6494 27.3897L34.6387 29.1279ZM35.1838 29.003C35.3666 29.0177 35.5521 29.0884 35.7188 29.2203L36.9599 27.652C36.4951 27.2841 35.9366 27.0573 35.3448 27.0095L35.1838 29.003ZM35.7197 29.221L50.4956 40.886L51.7349 39.3162L36.959 27.6513L35.7197 29.221ZM50.496 40.8863C50.6412 41.0008 50.7684 41.1592 50.8594 41.3544L52.6723 40.5098C52.4555 40.0444 52.1366 39.633 51.7345 39.3159L50.496 40.8863ZM50.8594 41.3544C50.9504 41.5499 51 41.7716 51 42.0002H53C53 41.4857 52.889 40.9751 52.6723 40.5098L50.8594 41.3544ZM51 42.0002C51 42.2287 50.9504 42.4504 50.8594 42.6459L52.6723 43.4905C52.889 43.0253 53 42.5147 53 42.0002H51ZM50.8594 42.6459C50.7684 42.8411 50.6412 42.9995 50.496 43.114L51.7345 44.6844C52.1366 44.3673 52.4555 43.9559 52.6723 43.4905L50.8594 42.6459ZM50.4956 43.1143L35.7197 54.7793L36.959 56.3491L51.7349 44.6841L50.4956 43.1143ZM35.719 54.7799C35.5524 54.9117 35.3669 54.9823 35.1842 54.997L35.3453 56.9905C35.9369 56.9427 36.4951 56.716 36.9597 56.3485L35.719 54.7799ZM35.1842 54.997C35.0019 55.0118 34.8142 54.9716 34.6394 54.8722L33.6507 56.6108C34.1662 56.9039 34.7534 57.0384 35.3453 56.9905L35.1842 54.997ZM34.6394 54.8722C34.4633 54.7721 34.302 54.6122 34.1841 54.3983L32.4328 55.3641C32.7188 55.8829 33.1365 56.3183 33.6507 56.6108L34.6394 54.8722ZM34.1841 54.3983C34.0659 54.184 33.9998 53.9302 34 53.6658L32 53.6644C31.9996 54.258 32.1469 54.8458 32.4328 55.3641L34.1841 54.3983ZM34 53.6651V30.3352H32V53.6651H34ZM34 30.3343C33.9998 30.07 34.0658 29.8162 34.1838 29.6019L32.4322 28.6367C32.1466 29.155 31.9994 29.7427 32 30.3362L34 30.3343ZM34.1838 29.6019C34.3017 29.388 34.4629 29.2281 34.6389 29.1278L33.6492 27.3899C33.1354 27.6825 32.718 28.118 32.4322 28.6367L34.1838 29.6019ZM81 42C81 63.5391 63.5391 81 42 81V83C64.6437 83 83 64.6437 83 42H81ZM42 81C20.4609 81 3 63.5391 3 42H1C1 64.6437 19.3563 83 42 83V81ZM42 3C63.5391 3 81 20.4609 81 42H83C83 19.3563 64.6437 1 42 1V3Z" fill="currentColor" />
                        <path opacity="0.3" d="M2 42C2 19.9086 19.9086 2 42 2" stroke="currentColor" stroke-width="2" />
                    </svg>
                </a>
            </div> -->
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
                                        <input class="ui-booking__input" type="number" value="2" readonly>
                                        <button class="ui-booking__increase">+</button>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label class="ui-booking__label">Children</label>
                                    <div class="ui-booking__number">
                                        <button class="ui-booking__decrease">-</button>
                                        <input class="ui-booking__input" type="number" value="0" readonly>
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
    <!-- Welcome :: Start-->
    <section class="welcome" data-aos="fade-in">
        <div class="container-fluid">
            <h2 class="welcome__title" data-aos="fade-up" data-aos-delay="200"> CC’s is an oasis for guests</h2>
            <p class="welcome__text" data-aos="fade-up" data-aos-delay="400"> Seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
        </div>
    </section><!-- Welcome :: End-->
    <!-- Yoga  & Wellness :: Start-->
    <section class="yw" data-aos="fade-in">
        <div class="container-fluid">
            <div class="yw__decor" data-aos="fade-in" data-aos-delay="1000">
                <svg class="is-lg-hidden" width="196" height="731" viewBox="0 0 196 731" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <rect x="1" y="520" width="1" height="211" fill="#444444" />
                    <path d="M17.5 1H195.5V451.748H1V496" stroke="#444444" />
                </svg>
                <svg class="is-lg-visible" width="868" height="960" viewBox="0 0 868 960" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path d="M724.353 1H867V399.382H1V577M201.819 959H1V639" stroke="#444444" />
                </svg>
            </div>
            <div class="yw__grid">
                <div class="row">
                    <div class="col-lg-4 order-lg-1">
                        <h2 class="yw__title" data-aos="fade-up" data-aos-delay="200"> Yoga & Wellness</h2>
                    </div>
                    <div class="col-lg-5 order-lg-2">
                        <picture class="yw__image yw__image--01" data-aos="fade-in" data-aos-delay="400">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-yw-01.png'); ?>" alt="Yoga and wellness" />
                        </picture>
                    </div>
                    <div class="col-lg-5 order-lg-4">
                        <div class="yw__desc" data-aos="fade-up" data-aos-delay="800">
                            <h3>Yoga Holiday Retreat</h3>
                            <p>Our guests come from different parts of the world, with various goals and hopefully CC’s can help you achieve some whether simply to relax or an increased self-realization.</p>
                            <p>Our guests often arrive alone but return home with friends for life. We bring to the Holiday Retreat program Thai tradition and culture, visits to Buddhist temples, culinary Thai cooking classes and great interaction with our guides and yoga masters. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-5">
                        <picture class="yw__image yw__image--02" data-aos="fade-in" data-aos-delay="1000">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-yw-02.png'); ?>" alt="[Alt]" />
                        </picture>
                        <picture class="yw__image yw__image--03" data-aos="fade-in" data-aos-delay="1200">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-yw-03.png'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-4 order-lg-3">
                        <p class="yw__text" data-aos="fade-up" data-aos-delay="600"> Come enjoy CC's Yoga Holiday Retreat Program including the gorgeous beaches, amazing nature hikes, super-nutritiously delicious foods, attentive yoga instructors and so much more.</p>
                    </div>
                    <div class="col-lg-12 order-lg-6">
                        <div class="yw__button" data-aos="fade-up" data-aos-delay="1400">
                            <a class="ui-btn ui-btn--secondary" href="<?php echo get_site_url() . '/yoga'; ?>">read more<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Yoga  & Wellness :: End-->
    <!-- Nutrition & Detox :: Start-->
    <section class="nd" data-aos="fade-in">
        <div class="container-fluid">
            <h2 class="nd__title" data-aos="fade-up" data-aos-delay="200"> Nutrition & <svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <path d="M8.6747 1.00011L8.66735 1H8.66H2H1V2V22.25V23.25H2H8.66C10.1871 23.25 11.6313 22.9657 12.9821 22.3899L12.9821 22.39L12.9893 22.3868C14.335 21.8008 15.518 21.0141 16.5293 20.0248L16.5293 20.0249L16.5371 20.0171C17.5484 19.0058 18.3393 17.8296 18.9084 16.4958C19.5041 15.1264 19.8 13.6711 19.8 12.14C19.8 10.5908 19.5049 9.13289 18.9057 7.77815C18.3165 6.42596 17.5045 5.24829 16.4694 4.2552C15.4569 3.24467 14.2705 2.45592 12.9194 1.88894C11.5777 1.31747 10.1601 1.02195 8.6747 1.00011ZM8.65068 19.24H5.01V5.01H8.66C9.64496 5.01 10.5547 5.20257 11.4004 5.58227L11.4115 5.58726L11.4228 5.59198C12.3053 5.96266 13.0516 6.46842 13.6733 7.10736L13.6828 7.11717L13.6926 7.12673C14.3316 7.74839 14.8373 8.49467 15.208 9.37723L15.2127 9.38847L15.2177 9.39959C15.5974 10.2453 15.79 11.155 15.79 12.14C15.79 13.125 15.5974 14.0347 15.2177 14.8804C14.8271 15.7504 14.3073 16.5073 13.6577 17.158C13.0096 17.7875 12.2549 18.2885 11.3861 18.6609C10.5313 19.0272 9.62226 19.2213 8.65068 19.24Z" fill="#F0F1EC" stroke="#879A77" stroke-width="2" />
                    <path d="M5 5H9C12.866 5 16 8.13401 16 12C16 15.866 12.866 19 9 19H5V5Z" fill="#879A77" />
                </svg>etox</h2>
            <div class="nd__grid">
                <div class="row">
                    <div class="col-lg-4 order-lg-2">
                        <picture class="nd__image nd__image--01" data-aos="fade-in" data-aos-delay="400">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-nd-01.png'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <p class="nd__text" data-aos="fade-up" data-aos-delay="600"> Our Holistic Detox Programs is a lovely mix of balanced nutrition, superfoods enriched cleanse drinks, guided meditations and mindfullness practises, yoga and energy healing sessions, massage treatments, island adventures, all in a perfect balance to help you to restore your inner balance.</p>
                    </div>
                    <div class="col-lg-3 order-lg-3">
                        <picture class="nd__image nd__image--02" data-aos="fade-in" data-aos-delay="800">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-nd-02.png'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-3 push-lg-5 order-lg-5">
                        <div class="nd__desc" data-aos="fade-up" data-aos-delay="1000">
                            <h3>Holistic Cleanse Day</h3>
                            <p>Nutritionally balanced & delicious detox cleanse day - a moderate cleanse perfect for the first time detox experience, focuses on natural detoxing of our physical and emotional self with a plant-based meals, superfood drinks, alkaline cold pressed juices and natural supplements. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 push-lg-4 order-lg-4">
                        <picture class="nd__image nd__image--03" data-aos="fade-in" data-aos-delay="1200">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-nd-03.png'); ?>" alt="[Alt]" />
                        </picture>
                        <div class="nd__button" data-aos="fade-up" data-aos-delay="1400">
                            <a class="ui-btn ui-btn--secondary" href="<?php echo get_site_url() . '/detox'; ?>">read more<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Nutrition & Detox :: End-->
    <!-- ECO adventures :: Start-->
    <section class="ea" data-aos="fade-in">
        <div class="container-fluid">
            <div class="ea__grid">
                <div class="row">
                    <div class="col-lg-12 order-lg-1">
                        <h2 class="ea__title" data-aos="fade-up" data-aos-delay="200"> EC<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.35392 18.6609C8.48506 18.2885 7.7304 17.7875 7.08225 17.158C6.43707 16.5116 5.93038 15.7612 5.56058 14.8994C5.19469 14.027 5.01 13.1002 5.01 12.11C5.01 11.141 5.1942 10.2355 5.55915 9.38392L5.55917 9.38393L5.56198 9.37723C5.93266 8.49467 6.43842 7.74839 7.07736 7.12673L7.07742 7.12679L7.08711 7.11711C7.73543 6.46878 8.4886 5.96 9.35392 5.58914L9.36178 5.58577L9.36959 5.58227C10.2153 5.20257 11.125 5.01 12.11 5.01C13.095 5.01 14.0047 5.20257 14.8504 5.58227L14.8582 5.58577L14.8661 5.58914C15.7314 5.96 16.4846 6.46878 17.1329 7.11711L17.1328 7.11717L17.1426 7.12673C17.7816 7.74839 18.2873 8.49467 18.658 9.37723L18.658 9.37724L18.6609 9.38392C19.0258 10.2355 19.21 11.141 19.21 12.11C19.21 13.1002 19.0253 14.027 18.6595 14.8993C18.2897 15.7611 17.7829 16.5116 17.1377 17.1581C16.4896 17.7875 15.7349 18.2885 14.8661 18.6609C14.0168 19.0248 13.1015 19.21 12.11 19.21C11.1185 19.21 10.2032 19.0248 9.35392 18.6609ZM19.9493 19.9948L19.9493 19.9949L19.9571 19.9871C20.9684 18.9758 21.7594 17.7994 22.3285 16.4655C22.9242 15.0962 23.22 13.6411 23.22 12.11C23.22 10.58 22.9246 9.13351 22.3272 7.78158C21.7583 6.44887 20.9677 5.27349 19.9571 4.26289C18.9465 3.25229 17.7711 2.46172 16.4384 1.89277C15.0865 1.29545 13.64 1 12.11 1C10.5789 1 9.12369 1.29585 7.75433 1.8916C6.42048 2.46064 5.24419 3.2516 4.23289 4.26289L4.23285 4.26285L4.22517 4.27071C3.23851 5.27929 2.45216 6.44999 1.86557 7.77525L1.86548 7.77521L1.86008 7.7879C1.28433 9.1387 1 10.5829 1 12.11C1 13.6372 1.28434 15.0892 1.85781 16.4567L1.8616 16.4658L1.86557 16.4747C2.45216 17.8 3.23851 18.9707 4.22517 19.9793L4.23285 19.9872L4.24071 19.9948C5.24929 20.9815 6.41999 21.7678 7.74525 22.3544L7.75423 22.3584L7.76327 22.3622C9.13078 22.9357 10.5828 23.22 12.11 23.22C13.6371 23.22 15.0813 22.9357 16.4321 22.3599L16.4321 22.36L16.4447 22.3544C17.77 21.7678 18.9407 20.9815 19.9493 19.9948Z" fill="#F0F1EC" stroke="#879A77" stroke-width="2" />
                                <circle cx="12.1001" cy="12.25" r="7" fill="#879A77" />
                            </svg> adventures</h2>
                    </div>
                    <div class="col-lg-4 order-lg-4">
                        <picture class="ea__image ea__image--02" data-aos="fade-in" data-aos-delay="400">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-ea-02.png'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-4 order-lg-3">
                        <div class="ea__desc" data-aos="fade-up" data-aos-delay="600">
                            <h3>Big Buddha Jungle Trek with Lunch</h3>
                            <p>CC’s Hideaway and Belove Yoga offer
                                <br> an Eco Adventure on Phuket Island.
                                <br> This program is ideal for people who like to hike, enjoy the flora and fauna of the Rainforest or enjoy breath-taking views
                            </p>
                        </div>
                        <picture class="ea__image ea__image--03" data-aos="fade-up" data-aos-delay="800">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-ea-03.png'); ?>" alt="[Alt]" />
                        </picture>
                    </div>
                    <div class="col-lg-4 order-lg-2">
                        <picture class="ea__image ea__image--01" data-aos="fade-in" data-aos-delay="1000">

                            <img src="<?php echo get_theme_file_uri('assets/images/img-ea-01.png'); ?>" alt="[Alt]" />
                        </picture>
                        <blockquote class="ea__blockquote" data-aos="fade-up" data-aos-delay="1200">Feed, walk with, and observe elephants as they roam throughout the PES, socialise and bathe in our huge fresh water lagoons, and cover themselves in lovely thick mud.
                            <br> Transform your world as you step into the tranquility of sanctuary life amidst the beautiful forest bordering the Khao Phra Thaeo National Park.
                        </blockquote>
                    </div>
                    <div class="col-lg-12 order-lg-5">
                        <div class="ea__button" data-aos="fade-up" data-aos-delay="1400">
                            <a class="ui-btn ui-btn--secondary" href="<?php echo get_site_url() . '/adventures'; ?>">read more<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ECO adventures :: End-->
    <!-- Hotel :: Start-->
    <section class="hotel" data-aos="fade-in">
        <div class="container-fluid">
            <div class="hotel__wrapper">
                <picture class="hotel__image">

                    <img src="<?php echo get_theme_file_uri('assets/images/img-hotel.png'); ?>" alt="[Alt]" />
                </picture>
                <div class="hotel__desc" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="hotel__title">
                        <small>discover now</small> Our hotel
                    </h2>
                </div>
                <div class="hotel__button" data-aos="fade-up" data-aos-delay="400">
                    <a class="ui-btn ui-btn--responsive ui-btn--primary" href="<?php echo get_site_url() . '/hotel'; ?>">view more<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="#444444" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- Hotel :: End-->
    <!-- Packages :: Start-->
    <section class="packages" data-aos="fade-in">
        <div class="container-fluid">
            <h2 class="packages__title" data-aos="fade-up" data-aos-delay="200">Our pack<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.95 2V1H15.95H13.94H12.94V2V2.19007C12.7044 2.03701 12.4581 1.89619 12.2013 1.76764C11.1965 1.25434 10.111 1 8.96 1C7.86571 1 6.81949 1.2171 5.83096 1.65305C4.87729 2.06251 4.03244 2.63335 3.30289 3.36289C2.58616 4.07962 2.02605 4.92932 1.61918 5.89998C1.20428 6.86957 1 7.90299 1 8.99C1 10.0786 1.20483 11.1202 1.61756 12.1061L1.61753 12.1062L1.62085 12.1139C2.02761 13.063 2.58477 13.906 3.29176 14.6358L3.3028 14.6472L3.3142 14.6582C4.044 15.3652 4.88698 15.9224 5.83608 16.3291L5.83607 16.3292L5.84386 16.3324C6.82982 16.7452 7.87145 16.95 8.96 16.95C10.111 16.95 11.1964 16.6957 12.2013 16.1824C12.458 16.0538 12.7043 15.913 12.94 15.7599V15.95V16.95H13.94H15.95H16.95V15.95V2ZM10.4933 12.6278L10.4932 12.6277L10.4824 12.6324C10.0129 12.8359 9.5088 12.94 8.96 12.94C8.4112 12.94 7.90709 12.8359 7.43761 12.6324C6.95035 12.4213 6.52571 12.1415 6.15732 11.7927C5.80854 11.4243 5.5287 10.9997 5.31756 10.5124C5.11411 10.0429 5.01 9.5388 5.01 8.99C5.01 8.4412 5.11411 7.93709 5.31756 7.46761L5.31762 7.46764L5.32219 7.45673C5.53605 6.94676 5.81609 6.52813 6.15711 6.18711C6.52763 5.81658 6.95249 5.52778 7.43761 5.31756C7.90709 5.11411 8.4112 5.01 8.96 5.01C9.5088 5.01 10.0129 5.11411 10.4824 5.31756L10.4824 5.31762L10.4933 5.32219C10.9939 5.53212 11.4076 5.81598 11.7474 6.17122L11.7627 6.18728L11.7788 6.20264C12.134 6.54244 12.4179 6.95613 12.6278 7.45673L12.6277 7.45675L12.6324 7.46761C12.8359 7.93709 12.94 8.4412 12.94 8.99C12.94 9.5388 12.8359 10.0429 12.6324 10.5124C12.4222 10.9975 12.1334 11.4224 11.7629 11.7929C11.4219 12.1339 11.0032 12.4139 10.4933 12.6278Z" fill="#F0F1EC" stroke="#879A77" stroke-width="2" />
                    <circle cx="9.1001" cy="8.9502" r="4" fill="#879A77" />
                </svg>ges</h2>
            <ul class="packages__list">

                <?php

                $packages = cchideaway_get_packages('featured');

                foreach ($packages as $post) {

                    get_template_part('template-parts/package');
                }
                ?>

            </ul>
        </div>
    </section><!-- Packeages :: End-->
    <!-- Testimonials :: Start-->
    <section class="testimonials" data-aos="fade-in">
        <div class="container-fluid">
            <h2 class="testimonials__title">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.35392 18.6609C8.48506 18.2885 7.7304 17.7875 7.08225 17.158C6.43707 16.5116 5.93038 15.7612 5.56058 14.8994C5.19469 14.027 5.01 13.1002 5.01 12.11C5.01 11.141 5.1942 10.2355 5.55915 9.38392L5.55917 9.38393L5.56198 9.37723C5.93266 8.49467 6.43842 7.74839 7.07736 7.12673L7.07742 7.12679L7.08711 7.11711C7.73543 6.46878 8.4886 5.96 9.35392 5.58914L9.36178 5.58577L9.36959 5.58227C10.2153 5.20257 11.125 5.01 12.11 5.01C13.095 5.01 14.0047 5.20257 14.8504 5.58227L14.8582 5.58577L14.8661 5.58914C15.7314 5.96 16.4846 6.46878 17.1329 7.11711L17.1328 7.11717L17.1426 7.12673C17.7816 7.74839 18.2873 8.49467 18.658 9.37723L18.658 9.37724L18.6609 9.38392C19.0258 10.2355 19.21 11.141 19.21 12.11C19.21 13.1002 19.0253 14.027 18.6595 14.8993C18.2897 15.7611 17.7829 16.5116 17.1377 17.1581C16.4896 17.7875 15.7349 18.2885 14.8661 18.6609C14.0168 19.0248 13.1015 19.21 12.11 19.21C11.1185 19.21 10.2032 19.0248 9.35392 18.6609ZM19.9493 19.9948L19.9493 19.9949L19.9571 19.9871C20.9684 18.9758 21.7594 17.7994 22.3285 16.4655C22.9242 15.0962 23.22 13.6411 23.22 12.11C23.22 10.58 22.9246 9.13351 22.3272 7.78158C21.7583 6.44887 20.9677 5.27349 19.9571 4.26289C18.9465 3.25229 17.7711 2.46172 16.4384 1.89277C15.0865 1.29545 13.64 1 12.11 1C10.5789 1 9.12369 1.29585 7.75433 1.8916C6.42048 2.46064 5.24419 3.2516 4.23289 4.26289L4.23285 4.26285L4.22517 4.27071C3.23851 5.27929 2.45216 6.44999 1.86557 7.77525L1.86548 7.77521L1.86008 7.7879C1.28433 9.1387 1 10.5829 1 12.11C1 13.6372 1.28434 15.0892 1.85781 16.4567L1.8616 16.4658L1.86557 16.4747C2.45216 17.8 3.23851 18.9707 4.22517 19.9793L4.23285 19.9872L4.24071 19.9948C5.24929 20.9815 6.41999 21.7678 7.74525 22.3544L7.75423 22.3584L7.76327 22.3622C9.13078 22.9357 10.5828 23.22 12.11 23.22C13.6371 23.22 15.0813 22.9357 16.4321 22.3599L16.4321 22.36L16.4447 22.3544C17.77 21.7678 18.9407 20.9815 19.9493 19.9948Z" fill="#F0F1EC" stroke="#879A77" stroke-width="2" />
                    <circle cx="12.1001" cy="12.25" r="7" fill="#879A77" />
                </svg>ur clients testimonial
            </h2>
            <div class="testimonials__swiper">
                <div class="swiper swiper-testimonials js-swiper-testimonials">
                    <div class="swiper-wrapper">

                        <?php

                        $testimonials = cchideaway_get_testimonials();                        

                        foreach ($testimonials as $post) {
                            get_template_part('template-parts/testimonial');                            
                        }
                        ?>

                    </div>
                    <div class="swiper-pagination js-swiper-testimonials-pagination"></div>
                    <button class="swiper-prev js-swiper-testimonials-prev">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle r="22.5" transform="matrix(-1 0 0 1 23 23)" fill="#F0F1EC" stroke="currentColor" />
                            <path d="M9.46967 23.5303C9.17678 23.2374 9.17678 22.7626 9.46967 22.4697L14.2426 17.6967C14.5355 17.4038 15.0104 17.4038 15.3033 17.6967C15.5962 17.9896 15.5962 18.4645 15.3033 18.7574L11.0607 23L15.3033 27.2426C15.5962 27.5355 15.5962 28.0104 15.3033 28.3033C15.0104 28.5962 14.5355 28.5962 14.2426 28.3033L9.46967 23.5303ZM36 23.75L10 23.75V22.25L36 22.25L36 23.75Z" fill="currentColor" />
                        </svg>
                    </button>
                    <button class="swiper-next js-swiper-testimonials-next">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="22.5" fill="#F0F1EC" stroke="currentColor" />
                            <path d="M36.5303 23.5303C36.8232 23.2374 36.8232 22.7626 36.5303 22.4697L31.7574 17.6967C31.4645 17.4038 30.9896 17.4038 30.6967 17.6967C30.4038 17.9896 30.4038 18.4645 30.6967 18.7574L34.9393 23L30.6967 27.2426C30.4038 27.5355 30.4038 28.0104 30.6967 28.3033C30.9896 28.5962 31.4645 28.5962 31.7574 28.3033L36.5303 23.5303ZM10 23.75L36 23.75V22.25L10 22.25L10 23.75Z" fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section><!-- Testimonials :: End-->
    <!-- Request :: Start-->
    <section class="request" data-aos="fade-in" data-aos-anchor=".request" 
    style="background: #F0F1EC url(<?php echo get_theme_file_uri('assets/images/bg-request.png'); ?>) 50% 0 no-repeat; background-size: cover;"
    >
        <div class="container-fluid">
            <h2 class="request__title" data-aos="fade-up" data-aos-anchor=".request" data-aos-delay="200">CC’s is an oasis
                <br>for guests
            </h2>
            <p class="request__text" data-aos="fade-up" data-aos-anchor=".request" data-aos-delay="400">Rest in harmony with yourself...</p>
            <div class="request__booking" data-aos="fade-up" data-aos-anchor=".request" data-aos-delay="600">
                <div class="ui-booking">
                    <form action="#">
                        <div class="ui-booking__data">
                            <div class="row">
                                <div class="col">
                                    <label class="ui-booking__label">From date</label>
                                    <input class="ui-booking__input js-datepicker" type="text" value="01/06" readonly>
                                </div>
                                <div class="col">
                                    <label class="ui-booking__label">To date</label>
                                    <input class="ui-booking__input js-datepicker" type="text" value="14/06" readonly>
                                </div>
                                <div class="col">
                                    <label class="ui-booking__label">Adults</label>
                                    <div class="ui-booking__number">
                                        <button class="ui-booking__decrease">-</button>
                                        <input class="ui-booking__input" type="number" value="2" readonly>
                                        <button class="ui-booking__increase">+</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <label class="ui-booking__label">Children</label>
                                    <div class="ui-booking__number">
                                        <button class="ui-booking__decrease">-</button>
                                        <input class="ui-booking__input" type="number" value="0" readonly>
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
    </section><!-- Request :: End-->
</main><!-- Main :: End-->







<?php get_footer(); ?>