<?php get_header()?>


<section class="banner" style="background-image: url(<?php echo get_field('banner')?>)"></section>

<section class="activity py-5">
    <div class="container">
        <?php
            $activity = new WP_Query(array (
                'post_type' => 'post'
            )) 
        ?>
        <?php if($activity ->have_posts()) : while($activity ->have_posts()) :  $activity ->the_post(); ?>
        <div class="activity__card">
            <?php if(has_post_thumbnail()) {
                the_post_thumbnail();
            }?>
            <!-- <img src="./images/family-act/act-1.jpeg" alt="" class="mb-2"> -->
            <div class="activity__card__content">
                <div>
                    <h2><?php the_title() ;?></h2>
                    <?php the_content() ?>
                </div>
                <a href="#" class="btn btn-primary  w-full">Learn More</a>
            </div>
        </div>
        <?php endwhile;
            else: 
                echo "No more activity";
            endif;
        ?>
    </div>
</section>



<?php get_footer()?>