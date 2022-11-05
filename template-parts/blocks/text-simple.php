    
    <?php 
    
    if ((isset($args['ID']))) {
        $id = $args['ID'];
    } else {
        $id = get_the_ID();
    }
    ?> 
    
    <section class="txt txt--01" data-aos="fade-in" data-aos-anchor=".txt--01">
        <div class="container-fluid">
            <h2><?php echo get_field('alt_header', $id); ?></h2>

            <?php the_content($id); ?>
        </div>
    </section>