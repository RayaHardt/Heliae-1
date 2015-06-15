<?php
 /*
Template Name: Our Team
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

                <div class="team-group">

                    <div class="team-info">

                        <h2 class="team-name"><?php echo $team_name; ?></h2>
                        <p class="team-description"><?php echo $team_description; ?></p>
                        
                        <div class="team-images">
                        
                            <img src="<?php echo $team_image; ?>" />
                        
                            <?php if( have_rows($team_slug) ): ?>

                            <?php while( have_rows($team_slug) ): the_row(); 

                                $marker_color = get_sub_field('marker_color');
                                $profile_id = get_sub_field('profile_id');
                                $x_position = get_sub_field('x_position');
                                $y_position = get_sub_field('y_position');

                            ?>

                                <span id="show-profile-<?php echo $profile_id; ?>" class="show-profile-marker" style="color: #<?php echo $marker_color; ?>; position: absolute; top: <?php echo $y_position; ?>px; left: <?php echo $x_position; ?>px"><i class="fa fa-2x fa-map-marker"></i></span>
                                <script>
                                    $( "#show-profile-<?php echo $profile_id; ?>" ).hover(
                                        function() {
                                        $("#profile-<?php echo $profile_id; ?>").siblings().hide();
                                        $("#profile-<?php echo $profile_id; ?>").show();
                                        }
                                    );
                            </script>

                            <?php endwhile; ?>

                            <?php endif; ?>
                            
                        </div>

                    </div>

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
                        
                                    <div class="profile-image">

                                        <img src="<?php echo $image; ?>" />

                                    </div>

                                    <div class="profile-info">

                                        <h2 class="profile-name"><span class="marker" style="color: #<?php echo $marker_color; ?>;"><i class="fa fa-map-marker"></i></span> <?php echo $name; ?></h2>
                                        <p class="profile-title"><?php echo $title; ?></p>

                                    </div>
                                
                                </div>

                                <div class="profile-description">

                                    <p class="team-description"><?php echo $description; ?></p>

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
    /*--------------------------------------- Team Info */
    .team-info {
        width: 468px;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 45px;
        padding: 0px;
    }
    .team-images {
        position: relative;
    }
    .team-images .show-profile-marker {
        cursor: pointer;
    }
    .team-info h2.team-name {
        text-align: center;
        font-size: 30px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .team-info p.team-description {
        text-align: justify;
        width: 80%;
        font-size: 15px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 20px;
    }
    .team-info img {
        width: 100%;
        height: auto;
        float: left;
        margin: 0px;
        padding: 0px;
    }
    /*--------------------------------------- Team Profile */
    .profile-id {
        display:none;
    }
    .profile-count-1 {
        display: block;
    }
    .team-profile {
        width: calc(100% - 468px - 20px - 45px);
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
        width: calc(100% - 208px);
        height: auto;
        float: right;
        margin-left: 20px;
        position: absolute;
        bottom: 0px;
        right: 0px;
    }
    .team-profile h2.profile-name {
        text-align: right;
        font-size: 30px;
        font-weight: bold;
    }
    .team-profile p.profile-title {
        text-align: right;
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
