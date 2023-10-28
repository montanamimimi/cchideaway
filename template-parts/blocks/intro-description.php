    <?php 
    $title = get_field('banner_header');
    $image = get_the_post_thumbnail_url($post, 'large');
    ?>
    
    <section class="intro" data-aos="fade-in" data-aos-anchor=".intro">
        <div class="container-fluid">
            <picture class="intro__image">

                <img src="<?php echo $image ? $image : get_theme_file_uri('/assets/images/img-demo-03.jpg'); ?>" />
            </picture>
            <div class="intro__desc">
                <h1 class="intro__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".intro"><?php echo $title ? $title : get_the_title(); ?></h1>
                <p class="intro__text" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".intro"><?php echo get_field('banner_description'); ?> </p>
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
    </section>