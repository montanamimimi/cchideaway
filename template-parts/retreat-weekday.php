<?php 

$days = cchideaway_get_weekday_retreats( $args['key'] );

$day1 = $days[0];
$day2 = $days[1];
?>

<li>
    <div class="week__day" data-aos="fade-up">
        <h3 class="week__day-title"><?php echo $args['value']; ?></h3>
        <div class="week__day-group">
            <div class="week__day-choose">
                <div class="ui-choose">
                    <label class="ui-choose__check">
                        <input class="ui-choose__check-input" type="checkbox" name="<?php echo $args['key'] ?>[<?php echo get_the_id(); ?>]">
                        <span class="ui-choose__check-btn">Get</span>
                    </label>
                    <label class="ui-choose__check">
                        <input class="ui-choose__check-input" type="checkbox" name="<?php echo $args['key'] ?>[<?php echo get_the_id(); ?>]">
                        <span class="ui-choose__check-btn">Get</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="week__day-item">
                        <h4 class="week__day-item-title"><?php echo get_the_title($day1); ?></h4>
                        <ul class="week__day-item-info">
                            <li><?php echo get_field('duration', $day1); ?></li>
                        </ul>
                        <picture class="week__day-item-image">

                            <img src="<?php echo get_the_post_thumbnail_url($day1); ?>" alt="[Alt]" />
                        </picture>
                        <p class="week__day-item-text"><?php echo get_field('description', $day1); ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="week__day-item">
                        <h4 class="week__day-item-title"><?php echo get_the_title($day2); ?></h4>
                        <ul class="week__day-item-info">
                            <li><?php echo get_field('duration', $day2); ?></li>
                        </ul>
                        <picture class="week__day-item-image">

                            <img src="<?php echo get_the_post_thumbnail_url($day2); ?>" alt="[Alt]" />
                        </picture>
                        <p class="week__day-item-text"><?php echo get_field('description', $day2); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>