<?php
 /*
Template Name: No-Scroll
*/
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



    
		
            
                <div class="section" id="full-bleed">
                    
                    <div class="content">
                        
                        <h2><?php the_title(); ?></h2>

			<?php posted_on(); ?>

			<div class="entry">

				<?php the_content(); ?>


			</div>
                    
                    
                    
                    </div>
        
                    
                    
                    

                    
                    
                    

    </div>

<style>

    #full-bleed {
        width: 100%;
        height: 100%;
        background-image: url('<?php echo the_field('full_screen_background_image'); ?>');
        background-size: cover;
        background-position: center;
    }
    html,body {
    height:100%;
}
    
    .content {
        width: calc(100% - 300px);
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 300px;
        margin-right: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        padding-right: 0px;
        background: #ff0000;
    }
    
</style>

			

		

		<?php endwhile; endif; ?>

<?php //get_sidebar(); ?>

<?php //get_footer(); ?>
