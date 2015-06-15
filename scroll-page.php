<?php
 /*
Template Name: Scrolling Page
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="section" id="full-bleed">
                    
    <div class="content">

        <div class="entry">

            <h1 class="scroll-page-title">MEET THE TEAMS</h1>

            <p class="scroll-page-description">Heliae employs more than 100 associates primarily focused in one of four key areas:<br />R&D  |  Operations  |   Quality   |  Corporate</p>
            
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
                            <img src="<?php echo $team_image; ?>" />
                        
                        </div>
                        
                        <div class="team-profile">
                        
                            <?php if( have_rows($team_slug) ): ?>
            
                            <?php while( have_rows($team_slug) ): the_row(); 

                                // vars
                                $name = get_sub_field('name');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                                $image = get_sub_field('image');
                                $marker_color = get_sub_field('marker_color');

                            ?>

                                <h2 class="team-name"><?php echo $name; ?></h2>
                                <h2 class="team-name"><?php echo $title; ?></h2>
                                <p class="team-description"><?php echo $description; ?></p>
                                <img src="<?php echo $image; ?>" />
                                <p><?php echo $marker_color; ?></p>

                            <?php endwhile; ?>

                        <?php endif; ?>
                        
                        </div>
            
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </div>

</div>



<style>
    
    h1.scroll-page-title {
        font-family: 'TradeGothic', 'Helvetica';
        font-size: 75px;
        line-height: 1em;
        text-align: center;
        margin-bottom: 85px;
    }
    p.scroll-page-description {
        font-family: 'TradeGothic', 'Helvetica';
        font-size: 25px;
        line-height: 33px;
        text-align: center;
        margin-bottom: 85px;
    }

    .team-group {
        width: 100%;
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 20px;
        margin-left: 0px;
        margin-right: 0px;
        padding: 0px;
    }
    /*--------------------------------------- Team Info */
    .team-info {
        width: calc(50% - 45px);
        height: auto;
        float: left;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 45px;
        padding: 0px;
        background-color: #ff0000;
    }
    .team-info h2.team-name {
        text-align: center;
        font-size: 31.25px;
        margin-bottom: 40px;
        text-transform: uppercase;
    }
    .team-info p.team-description {
        text-align: justify;
        width: 80%;
        font-size: 19.79px;
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
    .team-profile {
        width: 50%;
        height: auto;
        float: left;
        margin: 0px;
        padding: 0px;
        background-color: #ff00ff;
    }

</style>
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
    }
    
    
    
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
