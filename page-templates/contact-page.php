<?php
 /*
Template Name: Contact
*/
 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="section">
                    
    <div class="content">

        <?php include (get_theme_root() .'/heliae/includes/scroll-page-header-text.php'); ?>
        
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
                    
                    <a class="chevron-down" href="/careers/"><i class="fa fa-chevron-right"></i></a>
                    
                </li>
                
                <li>
                
                    <p class="contact-intro-header">Partnering</p>
                    
                    <p>For business opportunities please <a href="#" class="contact-modal">contact us</a>, or click to learn more.</p>
                    
                    <a class="chevron-down" href="/products-partners/"><i class="fa fa-chevron-right"></i></a>
                    
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

<?php endwhile; endif; ?>

<?php get_footer(); ?>
