<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$context = Timber::get_context();
		$context['post'] = new TimberPost(); // It's a new TimberPost object, but an existing post from WordPress.

		//var_dump($context);
		Timber::render('single.twig', $context);
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
