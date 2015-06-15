<!-- Kills Content Div to create full width-->
</div>

    <?php if(get_field('hero_image')){ ?>

        <div id="hero-div" class="hero-image hero_active" style="background-image: url('<?php echo the_field('hero_image'); ?>');" data-parallax="scroll" data-image-src="<?php echo the_field('hero_image'); ?>"></div>

    <?php } ?>

<style>
    .hero-image {
        /*border-image: linear-gradient(to right, #<?php echo the_field('hero_border_color_start'); ?> 0%, #<?php echo the_field('hero_border_color_finish'); ?> 100%);
            -moz-border-image: -moz-linear-gradient(left, #<?php echo the_field('hero_border_color_start'); ?> 0%, #<?php echo the_field('hero_border_color_finish'); ?> 100%);
            -webkit-border-image: -webkit-linear-gradient(left, #<?php echo the_field('hero_border_color_start'); ?> 0%, #<?php echo the_field('hero_border_color_finish'); ?> 100%);*/
        border-bottom-color: rgba(<?php echo the_field('hero_border_color'); ?>,0.7);
    } 
</style>

    
    <script>
if($(window).width() >= 1300) {
    $(window).scroll(function() {
  var scrolledY = $(window).scrollTop();
  $('#hero-div').css('background-position', 'center ' + ((scrolledY)) + 'px');
});
}
    
    </script>









<!-- Re-enables Content Div to disable full width-->
<div class="content">
    
    <?php if(get_field('circular_image')){ ?>
    
        <div class="circular-image">

            <img src="<?php echo the_field('circular_image'); ?>" />

        </div>
    
    <?php } ?>
    
<?php if(get_field('scroll_page_title') || get_field('scroll_page_description')){ ?>
    
    <div class="scroll-page-header-text">

        <?php if(get_field('scroll_page_title')){ ?><h1 class="scroll-page-title"><?php echo the_field('scroll_page_title'); ?></h1><?php } ?>

        <?php if(get_field('scroll_page_description')){ ?><p class="scroll-page-description"><?php echo the_field('scroll_page_description'); ?></p><?php } ?>

    </div>
    
<?php } ?>
    
    
    
    
    
    
    <?php if( have_rows('scroll_page_top_images') ): ?>
        
            <div class="the-content">
                
            <ul class="top-image-squares">

            <?php while( have_rows('scroll_page_top_images') ): the_row(); 

                // vars
                $image = get_sub_field('image');
                $image_size = get_sub_field('image_size');
                $title = get_sub_field('title');
                $anchor = get_sub_field('anchor');

            ?>
        
                <li class="<?php echo $image_size; ?>">
                    
                    <a href="#<?php echo $anchor; ?>">
        
                        <img src="<?php echo $image; ?>" />

                        <p><?php echo $title; ?></p>
                        
                    </a>
        
                </li>

            <?php endwhile; ?>
                
            </ul>
                
            </div>

        <?php endif; ?>
    
    <style>
    
    .top-image-squares {
        width: 100%;
        height: auto;
        float: left;
    }
    .top-image-squares li.square {
        width: 33%;
        height: auto;
        float: left;
        padding-left: 15px;
        padding-right: 15px;
    }
    .top-image-squares li.rectangle{
        width: 50%;
        height: auto;
        float: left;
        padding-left: 40px;
        padding-right: 40px;
    }
    .top-image-squares li img {
        width: 100%;
        height: auto;
        float: left;
        margin-bottom: 10px;
    }
        .top-image-squares li p {
            text-align: center;
            margin-bottom: 20px;
        }
        .top-image-squares li a {
            color: #000000;
        }
    
    </style>
    
    
    
    