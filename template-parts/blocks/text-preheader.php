
   
    <section class="txt txt--02" data-aos="fade-in" data-aos-anchor=".txt--02">
        <div class="container-fluid">
            <h2><?php echo get_field('alt_header',); ?></h2>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <em><?php echo get_field('preheader'); ?></em>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>