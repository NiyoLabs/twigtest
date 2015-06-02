<?php
$context = Timber::get_context();
$context['post'] = new TimberPost(); // It's a new TimberPost object, but an existing post from WordPress.

//var_dump($context);
Timber::render('templates/single.twig', $context);
