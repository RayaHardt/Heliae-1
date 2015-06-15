<?php
 /*
Template Name: Company
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="section">

        <div class="content">

            <?php include (get_theme_root() .'/heliae/includes/scroll-page-header-text.php'); ?>
            
            <div class="the-content">
                
                <?php if( have_rows('who_we_are') ): ?>

                    <?php while( have_rows('who_we_are') ): the_row(); 

                        // vars
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');

                    ?>
                
                        <h2><?php echo $title; ?></h2>
                
                        <?php echo $description; ?>

                    <?php endwhile; ?>

                <?php endif; ?>
                
            </div>

        </div>

    </div>		

<?php endwhile; endif; ?>

<?php get_footer(); ?>