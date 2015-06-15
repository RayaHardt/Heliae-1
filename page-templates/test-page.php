<?php
 /*
Template Name: Test Page
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="section">
                    
    <div class="content">

        <?php include ('/home/content/p3pnexwpnas07_data01/72/2605772/html/wp-content/themes/html5-blank-wordpress/includes/scroll-page-header-text.php'); ?>

        <?php if( have_rows('teams') ): ?>

            <?php while( have_rows('teams') ): the_row(); 

                // vars
                $team_name = get_sub_field('team_name');
                $team_description = get_sub_field('team_description');
                $team_image = get_sub_field('team_image');
                $team_slug = get_sub_field('team_slug');

            ?>

                <div class="team-group" id="<?php echo str_replace('_', '-', $team_slug); ?>">
                    
                    <h2 class="team-name"><?php echo $team_name; ?></h2>
                    <p class="team-description"><?php echo $team_description; ?></p>

                    <ul class="team-images">

                        <?php if( have_rows($team_slug) ): ?>
                        
                        <?php $team_i = 1; ?>

                        <?php while( have_rows($team_slug) ): the_row(); 

                            $image = get_sub_field('image');
                            $profile_id = get_sub_field('profile_id');

                        ?>

                            <li id="show-profile-<?php echo $profile_id; ?>" class="show-profile-marker<?php if($team_i == 1){echo ' hover-zoom';} ?>"><img src="<?php echo $image;?>" /></li>
                            <script>
                                $( "#show-profile-<?php echo $profile_id; ?>" ).hover(
                                    function() {
                                        $(this).addClass('hover-zoom');
                                        $(this).siblings().removeClass('hover-zoom');
                                        $("#profile-<?php echo $profile_id; ?>").siblings().hide();
                                        $("#profile-<?php echo $profile_id; ?>").show();
                                    }
                                );
                        </script>
                        
                        <?php $team_i++; ?>

                        <?php endwhile; ?>

                        <?php endif; ?>

                    </ul>

                    <div class="team-profile" id="team-<?php echo $team_slug; ?>">

                        <?php if( have_rows($team_slug) ): ?>
                        
                        <?php $profile_i = 1; ?>

                        <?php while( have_rows($team_slug) ): the_row(); 

                            // vars
                            $name = get_sub_field('name');
                            $title = get_sub_field('title');
                            $description = get_sub_field('description');
                            $image = get_sub_field('image');
                            $marker_color = get_sub_field('marker_color');
                            $profile_id = get_sub_field('profile_id');

                        ?>

                            <div class="profile-id profile-count-<?php echo $profile_i; ?>" id="profile-<?php echo $profile_id; ?>">
                                
                                <div class="profile-intro">

                                    <div class="profile-info">

                                        <h2 class="profile-name"><?php echo $name; ?></h2>
                                        <p class="profile-title"><?php echo $title; ?></p>

                                    </div>
                                
                                </div>

                                <div class="profile-description">

                                    <p class="profile-description"><?php echo $description; ?></p>

                                </div>
                        
                            </div>
                        
                            <?php $profile_i++; ?>

                        <?php endwhile; ?>

                        <?php endif; ?>

                    </div>

                </div>
        
                <?php $profile_i = 1; ?>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>

</div>






<style>

    .team-group {
        width: 100%;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 100px;
        margin-left: 0px;
        margin-right: 0px;
        padding: 0px;
    }
    h2.team-name {
        text-align: center;
        font-size: 30px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    p.team-description {
        text-align: justify;
        width: 80%;
        font-size: 15px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 40px;
    }
    /*--------------------------------------- Team Info */
    .team-images {
        width: 510px;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 45px;
        padding: 0px;
    }
    .team-images .show-profile-marker {
        cursor: pointer;
    }
    .team-images li {
        width: 140px;
        height: 140px;
        float: right;
        margin-bottom: 30px;
        margin-left: 30px;
    }
    .team-images li img {
        width: 100%;
        height: auto;
        float: left;
    }
    .team-images li img { transition: all .2s ease-in-out; }
    .team-images li.hover-zoom img { transform: scale(1.3); }
    
    /*--------------------------------------- Team Profile */
    .profile-id {
        display:none;
    }
    .profile-count-1 {
        display: block;
    }
    .team-profile {
        width: calc(100% - 510px - 20px - 45px);
        height: auto;
        float: left;
        margin-left: 0px;
        margin-right: 20px;
        padding: 0px;
    }
    .team-profile .profile-intro {
          width: 100%;
          height: auto;
          float: left;
          position: relative;
    }
    .team-profile .profile-image {
        width: 188px;
        height: auto;
        float: left;
    }
    .team-profile .profile-image img {
        width: 100%;
        height: auto;
        float: left;
    }
    .team-profile .profile-info {
        height: auto;
        float: left;
    }
    .team-profile h2.profile-name {
        font-size: 30px;
        font-weight: bold;
    }
    .team-profile p.profile-title {
        font-size: 30px;
        line-height: 1em;
    }
    .team-profile .profile-description {
        width: 100%;
        height: auto;
        float: left;
        margin-top: 10px;
    }
    .team-profile .profile-description p {
        text-align: justify;
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
    
    
    
    
</style>

			

		

<?php endwhile; endif; ?>

<?php //get_sidebar(); ?>

<?php //get_footer(); ?>
