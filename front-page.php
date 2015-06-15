<?php get_header(); ?>

<video autoplay loop poster="/wp-content/uploads/2015/05/background-1.jp" id="bgvid">
    <source src="<?php echo the_field('front_page_background_video_webm'); ?>" type="video/webm">
    <source src="<?php echo the_field('front_page_background_video_mp4'); ?>" type="video/mp4">
</video>

<style>

video#bgvid {
position: fixed;
top: 50%;
left: 50%;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -100;
-webkit-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
background: url(/wp-content/uploads/2015/05/background-1.jp) no-repeat;
background-size: cover;
}

</style>

<div class="home-footer">
    
    <p class="footer-info">578 E. Germann Road | Gilbert, AZ 85297<span class="footer-desktop-show"> | 480-424-2875</span><span class="footer-mobile-show"><br />480-424-2875</span><br />&copy; 2015 Heliae, Inc. All rights reserved.</p>
                    
</div>
 

<?php get_footer(); ?>