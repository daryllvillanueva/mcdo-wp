<?php get_header()?>

<section class="banner" style="background-image: url(<?php echo get_field('banner')?>)"></section>


<section class="category bg-primary">
    <div class="container">
        <div class="category__wrapper">
            <?php
            if(have_rows('our_food_card')) : ; ?>
            <?php while(have_rows('our_food_card')): the_row(); ?>
                <a href="<?php echo get_sub_field('our_food_link')?>">
                    <div class="category__card">
                        <img src="<?php echo get_sub_field('our_food_image')?>" alt="">
                        <h5><?php echo get_sub_field('our_food_label')?></h5>
                    </div>
                </a>
            <?php endwhile; else: echo "No more card"; endif; ?>
        </div>
    </div>
</section>

<section class="quality">
        <div class="container">
            <div class="quality__header">
                <h3 class="mb-1">Food Quality</h3>
                <h5 class="mb-1 text-accent">Quality and Safety</h5>
                <p>This is McDonald's promise whent it comes to food</p>
            </div>
        </div>
            <div class="quality__wrapper">
            <div class="container">
                <div class="quality__cards">
                    <?php
                        if(have_rows('our_food_quality')) : ; ?>
                    <?php while(have_rows('our_food_quality')): the_row(); ?>
                    <div class="quality__card">
                        <img src="<?php echo get_sub_field('food_quality_image')?>" alt="">
                        <h4><?php echo get_sub_field('food_quality_label')?></h4>
                        <p class="bg-primary p-3"><?php echo get_sub_field('our_food_details')?>
                        </p>
                    </div>
                    <?php endwhile; else: echo "No more card"; endif; ?>
                </div>
            </div>
        </div>  
</section>



<?php get_footer()?>