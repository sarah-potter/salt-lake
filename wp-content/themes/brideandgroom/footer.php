<div style="clear:both;"></div>
</div> <!-- close #wrap div -->

<div id="footertop">

    <div id="footerwidgets">
        
            <div class="footerwidgetleft">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?> 
                <?php endif; ?>
            </div>
            
            <div class="footerwidgetmidleft">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Left') ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="footerwidgetmidright">
            	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid Right') ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="footerwidgetright">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ) : ?>
                <?php endif; ?>
            </div>
            
    </div>

</div>

<div id="footerbottom">

	<div id="footer">
    
    	<div class="footerleft">       
         <p><?php _e("Copyright", 'organicthemes'); ?> &copy; <?php echo date(__("Y", 'organicthemes')); ?> &middot; <?php _e("All Rights Reserved", 'organicthemes'); ?> &middot; <?php bloginfo('name'); ?></p>


            <p><a href="<?php bloginfo('rss2_url'); ?>"><?php _e("RSS Feed", 'organicthemes'); ?></a> &middot; <?php wp_loginout(); ?></p>
        </div>
        
        <div class="footerright">
    		<a href="http://www.organicthemes.com" title="Designer WordPress Themes" target="_blank" alt="<?php _e("Organic Themes",'organicthemes'); ?>" /></a> 
    		<p><a href="http://sarahpotter.net" target="blank">Site Cred</a></p>
    	</div>
		
	</div>
	
</div>

<?php do_action('wp_footer'); ?>

</body>
</html>