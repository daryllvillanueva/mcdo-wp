<?php get_header(); ?>

    <section class="banner">

    <?php
        if(have_rows('homepage_slider')) : ; ?>
            <?php while(have_rows('homepage_slider')): the_row(); ?>
            <a href="#">
                <picture>
                    <source srcset="<?php echo get_sub_field('image_large')?>" media="(min-width:460px)">  
                    <source srcset="<?php echo get_sub_field('image_small')?>" media="(max-width:459px)">  
                    <img src="<?php echo get_sub_field('image_large')?>" alt="">
                </picture>
            </a>
        <?php endwhile;
            else:
                echo "No more sldier";
            endif;
    ?>
    </section>

    <section class="cards ">
        <div class="container">
          <div class="cards__wrapper">
                <?php
                if(have_rows('homepage_menus')) : ; ?>
                <?php while(have_rows('homepage_menus')): the_row(); ?>
                    <a href="<?php echo get_sub_field('menu_link')?>">
                        <div class="card">
                            <img src="<?php echo get_sub_field('menu_image')?>" alt="">
                            <h4><?php echo get_sub_field('menu_label')?></h4>
                        </div>
                    </a>
                <?php endwhile; else: echo "No more sldier"; endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>

