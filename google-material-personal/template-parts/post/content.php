<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_sticky() && is_home() ) :
			echo gm_personal_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>
	<header class="entry-header">
		<?php


			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) :
			echo '<div class="entry-meta">';
			if ( is_single() ) :
				gm_personal_posted_on();
			else :
				echo gm_personal_time_link();
				gm_personal_edit_link();
			endif;
			echo '</div><!-- .entry-meta -->';
		endif;
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail()  ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'gm_personal-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gm_personal' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'gm_personal' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( is_single() ) :

        echo '<div class="post-related-categories">';

        $post_categories= wp_get_post_categories(get_the_ID());
        echo '<h6>Related Categories:</h6>';
        foreach($post_categories as $c){
            $cat = get_category( $c );

            ?>

            <button type="button" class="mdl-chip" onclick="location.href='<?php echo get_category_link($cat->term_id)?>'">
                <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white"><?php echo substr($cat->name,0,1); ?></span>
                <span class="mdl-chip__text"><?php echo $cat->name; ?></span>
            </button>

         <?php

        }
       echo '</div>';
    endif; ?>

</article><!-- #post-## -->
