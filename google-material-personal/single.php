<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div class="mdl-grid">


		<div id="primary" class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">

            <div class="article-share-icon">
            <!-- Right aligned menu below button -->
            <button id="share-top-right"
                    class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">share</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                for="share-top-right">
                <li class="mdl-menu__item">Facebook</li>
                <li class="mdl-menu__item">Twitter</li>
                <li class="mdl-menu__item">Linked In</li>
            </ul>
                </div>

			<?php

            if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); }
				/* Start the Loop */
				while ( have_posts() ) : the_post();


					get_template_part( 'template-parts/post/content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					$nextpost=get_next_post();
					$beforepost=get_previous_post();

					echo '<div class="post-navigation">';

                    if(!empty($beforepost)){

                        ?>
                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored previous-post mdl-button--raised" onclick="location.href='<?php echo get_permalink($beforepost->ID) ?>'">
                            <i class="material-icons">navigate_before</i>
                        </button>
                        <?php

                    }


                    if(!empty($nextpost)) {

                     ?>

                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored next-post mdl-button--raised" onclick="location.href='<?php echo get_permalink($nextpost->ID) ?>'">
                            <i class="material-icons">navigate_next</i>
                        </button>

                        <?php

                    }


                    echo '</div>';

				endwhile; // End of the loop.
			?>


	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();
