<?php
/**
 * Template Name: Home Page
 * Description: A Page Template for the Home Page
 */

// Code to display Page goes here...

$context = Timber::get_context();
	$post = new TimberPost();
	$context['post'] = $post;
	$context['foo'] = 'bar';
		$context['posts']=Timber::get_posts(array('post_type'=>'post'));

	Timber::render(
	 array( 'page-' . $post->post_name . '.home',
	  'home.twig'
	   ), $context );
