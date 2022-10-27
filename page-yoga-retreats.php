<?php get_header(); ?>

<?php 

$weekNames = array(
    'monday' => 'Monday',
    'tuesday' => 'Tuesday',
    'wednesday' => 'Wednesday',
    'thursday' => 'Thursday',
    'friday' => 'Friday',
    'saturday' => 'Saturday',
    'sunday' => 'Sunday',
);

 ?>

<main class="main">
    

    <?php get_template_part('template-parts/blocks/intro', 'description'); ?>

    <!-- Yoga retreat  :: Start-->
    <section class="yr" data-aos="fade-in" data-aos-anchor=".yr">
        <div class="container-fluid">
            <div class="yr__grid">
                <div class="row">
                    <div class="col-12 col-lg-auto">
                        <h2 class="yr__title" data-aos="fade-right" data-aos-delay="200" data-aos-anchor=".yr"> Yoga retreat</h2>
                    </div>
                    <div class="col-10 offset-2 col-lg offset-lg-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <picture class="yr__image" data-aos="fade-in" data-aos-delay="400" data-aos-anchor=".yr">                                    
                                    <img src="<?php echo get_theme_file_uri('assets/images/img-yr.png'); ?>" alt="[Alt]" />
                                </picture>
                            </div>
                            <div class="col-lg-8">
                                <p class="yr__text yr__text--01" data-aos="fade-up" data-aos-delay="600" data-aos-anchor=".yr"> Included: unlimited Drinking Water, Face Towels, Yoga equipment, Cleaning Services.</p>
                            </div>
                            <div class="col-lg-4">
                                <p class="yr__text yr__text--02" data-aos="fade-up" data-aos-delay="800" data-aos-anchor=".yr"> Ashtanga is the original power yoga. A systematic sequence of predetermined flowing postures linked together with the breath.
                                    <br> If you like a strong power yoga or vinyasa class then you should find this challenging and rewarding. Primary Series works to heal and align the body, with a particular focus on realignment of the spine and detoxification.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Yoga retreat  :: End-->
    <!-- Why  :: Start-->
    <section class="why" data-aos="fade-in" data-aos-anchor=".why">
        <div class="container-fluid">
            <h2 class="why__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".why">Why <mark>CC’s</mark> yoga retreat?</h2>
            <ul class="why__list" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".why">
                <li>
                    <div class="why__item">
                        <h3 class="why__item-title">Anytime</h3>
                        <p class="why__item-text">Ashtanga is the original power yoga. A systematic sequence of predetermined flowing postures linked together with the breath. </p>
                    </div>
                </li>
                <li>
                    <div class="why__item">
                        <h3 class="why__item-title">Adventurous/relaxing</h3>
                        <p class="why__item-text">Ashtanga is the original power yoga. A systematic sequence of predetermined flowing postures linked together with the breath. </p>
                    </div>
                </li>
                <li>
                    <div class="why__item">
                        <h3 class="why__item-title">Flexible duration</h3>
                        <p class="why__item-text">Ashtanga is the original power yoga. A systematic sequence of predetermined flowing postures linked together with the breath. </p>
                    </div>
                </li>
                <li>
                    <div class="why__item">
                        <h3 class="why__item-title">All inclusive</h3>
                        <p class="why__item-text">Ashtanga is the original power yoga. A systematic sequence of predetermined flowing postures linked together with the breath. </p>
                    </div>
                </li>
                <li>
                    <div class="why__item">
                        <h3 class="why__item-title">Suitable for all levels of practice</h3>
                        <p class="why__item-text">Ashtanga is the original power yoga. A systematic sequence of predetermined flowing postures linked together with the breath. </p>
                    </div>
                </li>
                <li>
                    <div class="why__item">
                        <h3 class="why__item-title">Bring a Corporation</h3>
                        <p class="why__item-text">Ashtanga is the original power yoga. A systematic sequence of predetermined flowing postures linked together with the breath. </p>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Why  :: End-->
    <!-- Week  :: Start-->
    <section class="week" data-aos="fade-in" data-aos-anchor=".week">
        <div class="container-fluid">
            <form method="GET" action="<?php // echo get_rest_url(0, "cc/v2/register"); ?>">
                <input type="hidden" name="redirect" value="<?php  echo get_site_url() . '/yoga-retreats/'; ?>">
                <h2 class="week__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".week">Select your perfect week</h2>
                <ol class="week__steps" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".week">
                    <li>
                        <div class="week__step">
                            <h3 class="week__step-title">1</h3>
                            <p class="week__step-text"> Click on all the buttons next to the programs you like. </p>
                        </div>
                    </li>
                    <li>
                        <div class="week__step">
                            <h3 class="week__step-title">2</h3>
                            <p class="week__step-text">After that, if desired, add a few more options</p>
                        </div>
                    </li>
                    <li>
                        <div class="week__step">
                            <h3 class="week__step-title">3</h3>
                            <p class="week__step-text">Fill in the period, the number of people and send a request, we will respond to you as soon as possible</p>
                        </div>
                    </li>
                </ol>
                <ul class="week__list">

                    <?php 
                        foreach ($weekNames as $key => $value) {


                            get_template_part('template-parts/retreat', 'weekday', $args = array(
                                'key' => $key, 
                                'value' => $value, 
                            ));

                            // echo $key;
                        }
                    ?>

                </ul>
            
        </div>
    </section><!-- Week :: End-->
    <!-- Add more :: Start-->
    <section class="add-more" data-aos="fade-in" data-aos-anchor=".add-more">
        <div class="container-fluid">
            <form method="GET">
                <h2 class="add-more__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".add-more"> Add more</h2>
                <div class="add-more__grid" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".add-more">
                    <div class="row js-isotope">
                        <div class="col-lg-3">
                            <div class="add-more__item add-more__item--474">
                                <div class="add-more__item-switch">
                                    <label class="ui-switch">
                                        <input class="ui-switch__input" type="checkbox">
                                        <span class="ui-switch__btn">get </span>
                                    </label>
                                </div>
                                <h3 class="add-more__item-title">Drinking Water, Face Towels, Yoga Equipment, Green tea after session, Outdoor Pool & Shower, Free wifi. </h3>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="add-more__item add-more__item--328">
                                <div class="add-more__item-switch">
                                    <label class="ui-switch">
                                        <input class="ui-switch__input" type="checkbox">
                                        <span class="ui-switch__btn">get </span>
                                    </label>
                                </div>
                                <h3 class="add-more__item-title">Drinking Water, Face Towels, Yoga Equipment, Green tea after session, Outdoor Pool & Shower, Free wifi. </h3>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="add-more__item add-more__item--355">
                                <div class="add-more__item-switch">
                                    <label class="ui-switch">
                                        <input class="ui-switch__input" type="checkbox">
                                        <span class="ui-switch__btn">get </span>
                                    </label>
                                </div>
                                <h3 class="add-more__item-title">Drinking Water, Face Towels, Yoga Equipment, Green tea after session, Outdoor Pool & Shower, Free wifi. </h3>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="add-more__item add-more__item--446">
                                <div class="add-more__item-switch">
                                    <label class="ui-switch">
                                        <input class="ui-switch__input" type="checkbox">
                                        <span class="ui-switch__btn">get </span>
                                    </label>
                                </div>
                                <h3 class="add-more__item-title">Drinking Water, Face Towels, Yoga Equipment, Green tea after session, Outdoor Pool & Shower, Free wifi. </h3>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="add-more__item add-more__item--300">
                                <div class="add-more__item-switch">
                                    <label class="ui-switch">
                                        <input class="ui-switch__input" type="checkbox">
                                        <span class="ui-switch__btn">get </span>
                                    </label>
                                </div>
                                <h3 class="add-more__item-title">Drinking Water, Face Towels, Yoga Equipment, Green tea after session, Outdoor Pool & Shower, Free wifi. </h3>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="add-more__item add-more__item--419">
                                <div class="add-more__item-switch">
                                    <label class="ui-switch">
                                        <input class="ui-switch__input" type="checkbox">
                                        <span class="ui-switch__btn">get </span>
                                    </label>
                                </div>
                                <h3 class="add-more__item-title">Drinking Water, Face Towels, Yoga Equipment, Green tea after session, Outdoor Pool & Shower, Free wifi. </h3>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </section><!-- Add more :: End-->
    <!-- Feedback :: Start-->
    <section class="feedback" data-aos="fade-in" data-aos-anchor=".feedback">
        <div class="container-fluid">
            <h2 class="feedback__title">Feedback form</h2>
            <div class="feedback__form">
                <form class="js-valdiate">
                    <div class="row">
                        <div class="col-lg">
                            <div class="ui-group">
                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        <label class="ui-label">From date</label>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <input class="ui-date js-datepicker" type="text" value="08/09" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="ui-group">
                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        <label class="ui-label">To date</label>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <input class="ui-date js-datepicker" type="text" value="10/09" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="ui-group">
                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        <label class="ui-label">People</label>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <div class="ui-number">
                                            <button class="ui-number__decrease">-</button>
                                            <input class="ui-number__input" type="number" value="0" readonly>
                                            <button class="ui-number__increase">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="ui-group">
                                <label class="ui-label is-lg-visible"> E-mail</label>
                                <input class="ui-input" type="email" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="ui-button">
                                <button class="ui-btn ui-btn--primary" type="submit"> send inquire<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.5303 7.03033C26.8232 6.73744 26.8232 6.26256 26.5303 5.96967L21.7574 1.1967C21.4645 0.903806 20.9896 0.903806 20.6967 1.1967C20.4038 1.48959 20.4038 1.96447 20.6967 2.25736L24.9393 6.5L20.6967 10.7426C20.4038 11.0355 20.4038 11.5104 20.6967 11.8033C20.9896 12.0962 21.4645 12.0962 21.7574 11.8033L26.5303 7.03033ZM6.55671e-08 7.25L26 7.25V5.75L-6.55671e-08 5.75L6.55671e-08 7.25Z" fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- Feedback :: End-->
</main><!-- Main :: End-->


<?php get_footer(); ?>