<?php 

$counter = $args['counter'];
$coloring = $counter +2;


$color = 'yoga-styles__item--dark';

if ((($coloring % 7) == 0) || (($coloring % 4) == 0) || (($coloring % 2) == 0)) {
    $color = 'yoga-styles__item--light';
}

if ((($coloring % 6) == 0) || (($coloring % 8) == 0)) {
    $color = 'yoga-styles__item--dark';
}

$divider = '';

if ((($counter + 2) % 4) == 0 ) {
    $divider = '<div class="col-lg-12"><hr class="yoga-styles__line"></div>';
}

?>


<div class="col-lg-3">
    <div class="yoga-styles__item <?php echo $color; ?>">
        <h3 class="yoga-styles__item-title"><?php echo get_the_title(); ?></h3>        
        <p class="yoga-styles__item-text">
        <?php echo get_field('description', $post); ?>

        </p>

        <?php
        
        if (get_the_post_thumbnail_url()) { ?>
            <picture class="yoga-styles__item-image">            
                <img src="<?php echo get_the_post_thumbnail_url($post, 'medium'); ?>" alt="[Alt]" />
            </picture>
        <?php }
        
        ?>

        <p class="yoga-styles__item-text">
        <?php echo get_field('duration', $post); ?> <br>
        <?php echo get_field('price', $post); ?>

        </p>
    </div>
</div>

<?php echo $divider; ?>


<!-- <div class="col-lg-3">
    <div class="yoga-styles__item yoga-styles__item--light">
        <h3 class="yoga-styles__item-title">Aerial Yoga</h3>

        <p class="yoga-styles__item-text">Throughout the yoga class, you do various traditional yoga poses or aerial adaptations of traditional poses using the hammock for support.</p>
    </div>
</div>
<div class="col-lg-3">
    <div class="yoga-styles__item yoga-styles__item--dark">
        <h3 class="yoga-styles__item-title">Acro Yoga</h3>
        <picture class="yoga-styles__item-image">
            <source type="image/webp" srcset="images/img-yoga-styles-02.webp" />
            <img src="images/img-yoga-styles-02.png" alt="[Alt]" />
        </picture>
    </div>
</div> -->