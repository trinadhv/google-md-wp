<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<section class="post-card-wide mdl-grid mdl-grid--no-spacing mdl-shadow--6dp" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="section-card mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color-text--white"
        style="background:url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>'); ">

    </header>


    <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card__supporting-text">
            <h4 class="mdl-card__title-text"><?php the_title(); ?></h4>
            <?php
            echo substr(get_the_excerpt(), 0, 160) . '. . .';

            ?>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
               href="<?php the_permalink(); ?>">
                Read Full Article
            </a>
        </div>
    </div>



</section>
