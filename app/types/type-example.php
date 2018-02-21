<?php

use PostTypes\PostType;

// Post type options
$options = [
	'supports' => [ 'title', 'editor', 'page-attributes', 'thumbnail' ],
	'capability_type' => 'page',
];

// Register post type
$example = new PostType('example', $options);

// Set post type dashicon from Dashicons: https://developer.wordpress.org/resource/dashicons/#chart-bar
$example->icon('dashicons-no');

// Register the "Example" post type with WordPress
$example->register(); 
