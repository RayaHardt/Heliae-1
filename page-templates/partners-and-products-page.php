<?php
 /*
Template Name: Partners + Products
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="section">

        <div class="content">

            <?php include (get_theme_root() .'/heliae/includes/scroll-page-header-text.php'); ?>
            
            <div class="the-content">
                
                <?php echo the_content(); ?>
                
            </div>

            <ul class="partners">

            <?php if( have_rows('partners') ): ?>

                <?php while( have_rows('partners') ): the_row(); 

                    // vars
                    $partner_url = get_sub_field('partner_url');
                    $partner_logo = get_sub_field('partner_logo');

                ?>

                    <li>

                        <a href="<?php echo $partner_url; ?>" target="_blank"><img src="<?php echo $partner_logo; ?>" /></a>

                    </li>

                <?php endwhile; ?>

            <?php endif; ?>

            </ul>
            
            <div class="the-content">
                
                <?php echo the_field('bottom_text_section'); ?>
                
            </div>

        </div>

    </div>		

<?php endwhile; endif; ?>

<?php get_footer(); ?>