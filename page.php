<?php

 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="section">

        <div class="content">
            
            <div class="the-content">
                
                <h2><?php echo the_title(); ?></h2>
                
                <?php echo the_content(); ?>
                
            </div>

        </div>

    </div>

<style>
.the-content {
margin-top: 100px;
}
</style>

<?php endwhile; endif; ?>

<?php get_footer(); ?>