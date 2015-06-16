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

<script type="text/javascript">
var tplDir = "<?php echo get_stylesheet_directory_uri(); ?>";
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twig.js/0.6.0/twig.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/js/single.js'; ?>"></script>

<?php get_footer(); ?>
