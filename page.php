<?php

/**
 * The main page-template wrapper
 *
 * @package nord_
 */

get_header();

?>

<?php do_action( 'nord_before_page' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'partials/content', 'page' ); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
