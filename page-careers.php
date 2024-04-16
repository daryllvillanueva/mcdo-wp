<?php get_header()?>

    <section class="careers-video py-4">
        <div class="container">
            <h2 class="text-center mb-5">The McDonald's Experience</h2>

            <iframe width="1050" height="529" src="https://www.youtube.com/embed/D7rzFo7LhT8" title="Excellence is within your reach! Start your Best Me story at McDo." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <h2 class="text-accent text-center mb-5">Job Opportunities</h2>

            <div class="dropdowns">
                <button><span>Location</span><i class="fa-solid fa-angle-down"></i></button>
                <button><span>Level</span><i class="fa-solid fa-angle-down"></i></button>
                <button><span>Specialization</span><i class="fa-solid fa-angle-down"></i></button>
            </div>

            <div class="filter text-center">
                <button>FILTER</button>
            </div>
            
        </div>
    </section>

    <section class="careers-location py-3">
        <div class="container">
            <div class="location__wrapper">

                <?php $career = new WP_Query(array(
                    'post_type' => 'careers',
                    'posts_per_page' => 2,
                    'paged' =>  get_query_var('paged', 2) 
                )) ?>

                <?php if($career->have_posts()) : while($career->have_posts()) : $career->the_post() ?>
            
                <div class="location bg-primary">
                    <div class="details">
                        <div class="info">
                            <h3><?php the_title() ?></h3>
                            <?php the_content() ?>
                        </div>
                        <a href="#" class="apply">APPLY</a>
                    </div>
                </div>

                <?php endwhile;
                    else:
                        echo "no more career";
                    endif;
                ?>

                <div class="pagination">
                    <?php
                        global $wp_query;
                        $big = 9999999;
                        echo paginate_links(array (
                            'base' => str_replace($big, '%%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $career->max_num_pages,
                            'next_text' => '<i class="fas fa-caret-right"></i>',
                            'prev_text' => '<i class="fas fa-caret-left"></i>',
                        ));
                    ?>
                </div>


            </div>
        </div>
    </section>

<?php get_footer()?>