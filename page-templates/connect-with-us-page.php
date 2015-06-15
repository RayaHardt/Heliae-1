<?php
 /*
Template Name: Connect With Us
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="section">
                    
    <div class="content">

        <?php include ('/home/content/p3pnexwpnas07_data01/72/2605772/html/wp-content/themes/html5-blank-wordpress/includes/scroll-page-header-text.php'); ?>
        
    </div>

    <div class="content">
        
        <div class="connect">
                            
            <h1>Connect with us</h1>

            <ul class="contact">

                <li>
                    
                    <span class="contact-icon"><i class="fa fa-map-marker fa-2x"></i></span><br />
                    
                    578 E Germann Road<br />Gilbert, AZ 85297
                
                </li>

                <li>
                    
                    <span class="contact-icon"><i class="fa fa-phone fa-2x"></i></span><br />
                    
                    (480) 424-2875
                    
                </li>

                <li>
                    
                    <span class="contact-icon"><i class="fa fa-envelope fa-2x"></i></span><br />
                    
                    web@heliae.com
                
                </li>

            </ul>
            
            <p class="contact-info-intro-header">Looking for specific information?</p>
            
            <ul class="contact-info-intro">
            
                <li>
                
                    <p class="contact-intro-header">Careers</p>
                    
                    <p>Heliae is always seeking to expand its expertise by incorporating new talent. Please share your experience and unique perspectives with us.
</p>
                    
                    <a class="chevron-down" href="/careers/"><i class="fa fa-chevron-down"></i></a>
                    
                </li>
                
                <li>
                
                    <p class="contact-intro-header">Partnering</p>
                    
                    <p>For business opportunities please <a href="#" class="contact-modal">contact us</a>, or click to learn more.</p>
                    
                    <a class="chevron-down" href="/products-partners/"><i class="fa fa-chevron-down"></i></a>
                    
                </li>
            
            </ul>

        </div>

    </div>
    
    <div id="google-maps"><img src="/wp-content/uploads/2015/06/map.jpg" /></div>
    
    <div id="contact-form-container">
    
        <div id="contact-form">
            
            <div id="contact-modal-close"><i class="fa fa-times fa-2x"></i></div>
            
            <?php the_content(); ?>

        </div>
        
    </div>
    
</div>

<script>
$(document).ready(function(){
    
    var i=0,j=0;
    $('ul.contact-info-intro li').each(function(){
        j=$(this).height();
        if (i<j)
            i=j;
    });
    $('ul.contact-info-intro li').each(function(){
        $(this).height(i);//set Max height of li to other li
    });
    
    $('.contact-modal').click(function( event ) {
        event.preventDefault();
        $('#contact-form-container').show();
    });
    
    $('#contact-modal-close').click(function( event ) {
        event.preventDefault();
        $('#contact-form-container').hide();
    });
    
});
</script>


<style>

.gform_wrapper input[type=text], .gform_wrapper input[type=email] {
    width: 100%;
    height: 70px;
    padding-left: 10px !important;
    background: none;
    border: 2px solid #6c6c6c;
    color: #6c6c6c;
    font-size: 25px;
}
.gform_wrapper textarea.medium {
    width: 100%;
    height: 285px;
    padding-left: 10px !important;
    background: none;
    border: 2px solid #6c6c6c;
    color: #6c6c6c;
    font-size: 25px;
    margin-top: -215px;
}
.gform_wrapper .gform_footer input.button, .gform_wrapper .gform_footer input[type=submit] {
    border: none;
    background: none;
    font-size: 25px;
    color: #6c6c6c;
    float: right;
    margin-top: -80px;
    font-weight: 100;
}
</style>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
