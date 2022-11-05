
       
    <?php 
    
    if ((isset($args['ID']))) {
        $id = $args['ID'];
    } else {
        $id = get_the_ID();
    }
    ?> 

    <section class="txt txt--02" data-aos="fade-in" data-aos-anchor=".txt--02">
        <div class="container-fluid">
            <h2><?php echo get_field('alt_header', $id); ?></h2>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <em><?php echo get_field('preheader', $id); ?></em>
                    <?php the_content($id); ?>
                </div>
            </div>
        </div>
    </section>