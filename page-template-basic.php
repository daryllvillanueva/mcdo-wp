
<?php 
/* 
    Template Name: Basic Template 
*/
?>

<?php get_header(); ?>
<section class="banner" style="background-image: url(<?php echo get_field('banner')?>)">
</section>

<?php the_content(); ?>

<?php get_footer(); ?>

