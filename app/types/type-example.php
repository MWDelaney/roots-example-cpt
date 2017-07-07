<?php

use PostTypes\PostType;

// Post type options
$options = [
	'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail' ),
	'capability_type' => 'page',
];

// Register post type
$example = new PostType('example', $options);

// Set post type dashicon
$example->icon('dashicons-no');

// Set post type translation domain
$example->translation('cpt-example');
