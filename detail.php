<?php
/**
 * Template Name: Details Page
 * Description: A Page Template Details Page
 */

// Code to display Page goes here...

$context = Timber::get_context();
	$post = new TimberPost();
	$context['foo'] = 'bar';
	$context['new'] = new TimberPost();

	Timber::render('detail.twig', $context );


