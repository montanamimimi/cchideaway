<?php 
$width = array(3, 7, 2, 7, 3, 2);
$height = array(474, 328, 355, 446, 300, 419);

?>


<div class="col-lg-<?php echo $width[$args['counter']]; ?>">
    <div class="add-more__item add-more__item--<?php echo $height[$args['counter']]; ?>" style="background: url('<?php echo get_the_post_thumbnail_url($post, 'large'); ?>'); background-size: cover;">
        <div class="add-more__item-switch">
            <label class="ui-switch">
                <input class="ui-switch__input" type="checkbox" name="option[<?php echo get_the_id(); ?>]">
                <span class="ui-switch__btn">get </span>
            </label>
        </div>
        <h3><?php echo get_the_title(); ?></h3>
        <h3 class="add-more__item-title">Drinking Water, Face Towels, Yoga Equipment, Green tea after session, Outdoor Pool & Shower, Free wifi. </h3>
    </div>
</div>
