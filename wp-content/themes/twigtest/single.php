<?php
get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
		<?php
		$context = Timber::get_context();
		$context['post'] = new TimberPost(); // It's a new TimberPost object, but an existing post from WordPress.

		//var_dump($context);
		Timber::render('templates/single.twig', $context);
		?>
    </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>