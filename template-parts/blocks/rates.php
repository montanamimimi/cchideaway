    <?php  
    
    $rates = get_field($args['field_name'], 'options');
    ?>
    
    <!-- Tariffs :: Start-->
    <section class="tariffs" data-aos="fade-in" data-aos-anchor=".tariffs">
        <div class="container-fluid">
            <div class="tariffs__wrapper">
                <h2 class="tariffs__title" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".tariffs">Rates & Plans</h2>
                <ul class="tariffs__list" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".tariffs">

                    <?php 
                        foreach ($rates as $rate) { ?>

                            <li>
                                <div class="tariffs__item">
                                    <h3 class="tariffs__item-title"> <?php echo $rate['first_column']; ?> </h3>
                                    <p class="tariffs__item-text"><?php echo $rate['second_column']; ?></p>
                                    <span class="tariffs__item-price"><?php echo $rate['third_column']; ?></span>
                                </div>
                            </li>

                        <?php }   ?>

                </ul>
            </div>
        </div>
    </section><!-- Tariffs :: End-->
