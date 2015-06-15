<?php
 /*
Template Name: Company
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="section">

        <div class="content">
            
            <div class="the-content">
                
                <?php echo the_content(); ?>
                
            </div>

        </div>

    </div>		

<?php endwhile; endif; ?>

<?php get_footer(); ?>