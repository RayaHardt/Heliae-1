<?php
 /*
Template Name: Careers
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="section">

        <div class="content">

            <?php include (get_theme_root() .'/heliae/includes/scroll-page-header-text.php'); ?>
            
            <div class="the-content">
                
                <?php echo the_content(); ?>
                
            </div>
            
            <div class="the-content">

                <ul class="careers">

                <h2>Open Positions</h2>

                <?php if( have_rows('careers') ): ?>
                    
                    <?php $careers_i = 1; ?>

                    <?php while( have_rows('careers') ): the_row(); 

                        // vars
                        $job_name = get_sub_field('job_name');
                        $job_description = get_sub_field('job_description');
                        $read_more = get_sub_field('read_more');

                    ?>

                        <li>

                            <h3 class="job_name"><?php echo $job_name; ?></h3>

                            <p class="job_description"><?php echo $job_description; ?><a id="show-more-<?php echo $careers_i; ?>"> <span class="more-less-more" id="more-less-more-<?php echo $careers_i; ?>"><i class="fa fa-plus-square"></i> Read More</span><span class="more-less-less" id="more-less-less-<?php echo $careers_i; ?>"><i class="fa fa-minus-square"></i> Read Less</span></a></p>
                            
                            <div class="read-more" id="read-more-<?php echo $careers_i; ?>">
                            
                                <?php echo $read_more; ?>
                            
                            </div>

                        </li>
                    
                        <script>
                        
                            $(document).ready(function(){
                                $("#show-more-<?php echo $careers_i; ?>").click(function () {
                                    $("#read-more-<?php echo $careers_i; ?>").toggle("slow");
                                    $("#more-less-more-<?php echo $careers_i; ?>").toggle();
                                    $("#more-less-less-<?php echo $careers_i; ?>").toggle();
                                });
                            });
                    
                        </script>
                    
                        <?php $careers_i++; ?>

                    <?php endwhile; ?>

                <?php endif; ?>

                </ul>
                
            </div>

        </div>

    </div>		

<?php endwhile; endif; ?>

<?php get_footer(); ?>