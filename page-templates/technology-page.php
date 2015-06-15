<?php
 /*
Template Name: Technology
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="section">
                    
    <div class="content">

        <?php include (get_theme_root() .'/heliae/includes/scroll-page-header-text.php'); ?>
        
         <div class="the-content">
    
            <?php echo the_field('secondary_description'); ?>

            <div class="yt-player">

                <iframe src="http://www.youtube.com/embed/<?php echo the_field('video_id'); ?>" frameborder="0" allowfullscreen></iframe>

            </div>

        </div>
        
    </div>
    
   

        <?php if( have_rows('technology') ): ?>

            <?php while( have_rows('technology') ): the_row(); 

                // vars
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $image = get_sub_field('image');
                $alignment = get_sub_field('alignment');
                $section_id = get_sub_field('section_id');

            ?>
    
            <?php if($alignment == 'right'){ ?>
    
                <div class="content">

                    <div class="technology-section technology-section-<?php echo $alignment; ?>" id="<?php echo $section_id; ?>">

                        <!--<?php if($section_id == 'organism-screening'){ ?><h2 class="super-technology-title">Areas of Focus & Expertise</h2><?php } ?>-->

                        <div class="technology-info">
                            
                            <h2 class="technology-title" style="text-align: right;"><?php echo $title; ?></h2>

                            <p class="technology-description"><?php echo $description; ?></p>
                            
                        </div>

                        <div class="technology-image">

                            <img src="<?php echo $image; ?>" />

                        </div>

                    </div>
                    
                </div>
    
            <?php } else { ?>
    
                <div class="technology-section technology-section-<?php echo $alignment; ?>" id="<?php echo $section_id; ?>">
                    
                    <div class="technology-image">

                        <img src="<?php echo $image; ?>" />

                    </div>

                    <div class="technology-info">
                        
                        <h2 class="technology-title" style="text-align: left;"><?php echo $title; ?></h2>

                        <p class="technology-description"><?php echo $description; ?></p>

                    </div>

                </div>

            <?php } ?>

            <?php endwhile; ?>

        <?php endif; ?>

</div>






<style>
    
    
    .content {
        margin-bottom: 0px;
    }
    
    .technology-section {
        width: 100%;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        position: relative;
    }
    .technology-section-left {
        background: #f9f9f9;
    }
    .technology-section-right {
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 90px;
        padding-bottom: 90px;
    }
    
    
    
    
    h2.technology-title {
        font-size: 35px;
        margin-bottom: 30px;
        text-transform: uppercase;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    h2.super-technology-title {
        font-size: 75px;
        margin-bottom: 40px;
        text-align: center;
    }
    
    p.technology-description {
        text-align: justify;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 20px;
    }
    
    
    .technology-section-right .technology-info {
        width: calc(100% - 420px);
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        padding: 0px;
    }
    #organism-screening .technology-info {
        margin-top: 75px;
    }
    .technology-section-right .technology-image {
        width: 400px;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 20px;
        margin-right: 0px;
        padding: 0px;
    }
    
    
    
    
    
    
    
    
    
    .technology-section-left .technology-info {
        width: calc(100% - 760px);
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;
        padding-top: 60px;
        padding-bottom: 60px;
    }
    .technology-section-left .technology-image {
        width: 740px;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 20px;
        padding: 0px;
    }

    
    
 #overcoming-challenges {
     background-color: #000000;
     color: #ffffff;
 }
    
    

</style>
<style>


    
    .circular {
	width: 300px;
	height: 300px;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
	background: url(http://link-to-your/image.jpg) no-repeat;
	}
    
    
    
    
    .yt-player {
    float: none;
    clear: both;
    width: 100%;
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
        margin-top: 20px;
        margin-bottom: 20px;
}
.yt-player iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
    
    
</style>

			

		

<?php endwhile; endif; ?>

<?php get_footer(); ?>
