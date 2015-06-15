<?php
 /*
Template Name: Reading Room
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="section">
                    
    <div class="content">

        <?php include (get_theme_root() .'/heliae/includes/scroll-page-header-text.php'); ?>
        
    </div>

    <div class="content">

        <?php

            for ($news_year = date("Y"); $news_year >= date("Y") - 2; $news_year--) {
                
        ?>
        
        <ul class="news-items">
            
            <?php if( have_rows('news_'. $news_year .'') ): ?>
            
            <?php if($news_year != date("Y")){ ?>
            
            <h2 id="show-old-year-news-<?php echo $news_year; ?>" class="show-old-year-news"><span class="more-less-more" id="more-less-more-<?php echo $news_year; ?>"><i class="fa fa-plus-square"></i> Show <?php echo $news_year; ?> Links</span><span class="more-less-less" id="more-less-less-<?php echo $news_year; ?>"><i class="fa fa-minus-square"></i> Hide <?php echo $news_year; ?> Links</span></h2>
            
                <div class="old-year-news" id="old-year-news-<?php echo $news_year; ?>">
            
            <? } ?>

            <?php while( have_rows('news_'. $news_year .'') ): the_row(); 

                // vars
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $image = get_sub_field('image');
                $date = date("F j, Y", strtotime(get_sub_field('date')));
                $link_url = get_sub_field('link_url');

            ?>

            <li>
                
                <div class="news-image">
                    
                    <img src="<?php echo $image; ?>" />
                
                </div>
                
                <div class="news-info">
                    
                    <h2 class="news-title"><?php echo $title; ?> - <?php echo $news_year; ?></h2>
                    
                    <p class="news-date"><?php echo $date; ?></h2>

                    <p class="news-description"><?php echo $description; ?> <a href="<?php echo $link_url; ?>" target="_blank">Continue Reading...</a></p>
                
                </div>

            </li>
            
            <?php endwhile; ?>
    
            <?php if($news_year != date("Y")){ ?>
    
                    </div>
    
                    <script>
                        
                        $(document).ready(function(){
                            $("#show-old-year-news-<?php echo $news_year; ?>").click(function () {
                                $("#old-year-news-<?php echo $news_year; ?>").slideToggle("slow");
                                $("#more-less-more-<?php echo $news_year; ?>").toggle();
                                $("#more-less-less-<?php echo $news_year; ?>").toggle();
                            });
                        });

                    </script>

            <? } ?>

            <?php endif; ?>

        </ul>

        <?php } ?>

    </div>

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
