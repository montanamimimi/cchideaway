    <?php $gallery = get_field('gallery'); 
   
    ?>
    
    <!-- Gallery  :: Start-->
    <section class="gallery" data-aos="fade-in" data-aos-anchor=".gallery">
        <div class="container-fluid">
            <div class="gallery__grid">
                <div class="row">
                    <div class="col-lg-3" data-aos="fade-up">
                        <a class="gallery__item" href="<?php echo $gallery[0]['url']; ?>" data-fancybox="gallery">
                            <picture class="gallery__item-image">
                                
                                <img src="<?php echo $gallery[0]['url']; ?>" alt="[Alt]" />
                            </picture>
                        </a>
                    </div>
                    <div class="col-lg-2" data-aos="fade-up">
                        <div class="gallery__item">
                            <p class="gallery__item-text">seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up">
                        <a class="gallery__item" href="<?php echo $gallery[1]['url']; ?>" data-fancybox="gallery">
                            <picture class="gallery__item-image">
                                <img src="<?php echo $gallery[1]['url']; ?>" alt="[Alt]" />
                            </picture>
                        </a>
                    </div>
                    <div class="col-lg-12" data-aos="fade-up">
                        <a class="gallery__item" href="<?php echo $gallery[2]['url']; ?>" data-fancybox="gallery">
                            <picture class="gallery__item-image">
                                
                                <img src="<?php echo $gallery[2]['url']; ?>" alt="[Alt]" />
                            </picture>
                        </a>
                    </div>
                    <div class="col-lg-3" data-aos="fade-up">
                        <div class="gallery__item">
                            <p class="gallery__item-text">seeking a respite from the crowds and noise from the more urban locations as well as those seeking a yoga retreat or a wellness holiday. </p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up">
                        <a class="gallery__item" href="<?php echo $gallery[3]['url']; ?>" data-fancybox="gallery">
                            <picture class="gallery__item-image">
                                
                                <img src="<?php echo $gallery[3]['url']; ?>" alt="[Alt]" />
                            </picture>
                        </a>
                    </div>
                    <div class="col-lg-2" data-aos="fade-up">
                        <a class="gallery__item" href="<?php echo $gallery[4]['url']; ?>" data-fancybox="gallery">
                            <picture class="gallery__item-image">
                                
                                <img src="<?php echo $gallery[4]['url']; ?>" alt="[Alt]" />
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Gallery :: End-->