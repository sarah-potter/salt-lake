<?php get_header(); ?>

<div id="container">

	<div id="content" class="left">	

		<div class="postarea">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <div class="posttitle">		

				<h1><?php the_title(); ?></h1>

                <div class="postauthor">            
                    <p><?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?></p>
                </div>
                    
            </div>

			<?php the_content(__("Read More", 'organicthemes')); ?><div style="clear:both;"></div>
			<?php trackback_rdf(); ?>

			<div class="postmeta">
				<p><?php _e("Filed under", 'organicthemes'); ?> <?php the_category(', ') ?> &middot; <?php _e("Tagged with", 'organicthemes'); ?> <?php the_tags('') ?></p>
			</div>

		</div>

        <div class="postcomments">
			<?php comments_template('',true); ?>
        </div>

		<?php endwhile; else: ?>
		<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
		<?php endif; ?>

	</div>

	<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<?php get_footer(); ?>