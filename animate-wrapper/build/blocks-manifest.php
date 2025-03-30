<?php
// This file is generated. Do not modify it manually.
return array(
	'animate-wrapper' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'fwd-blocks/animate-wrapper',
		'version' => '1.0.0',
		'title' => 'Animate Wrapper',
		'category' => 'design',
		'icon' => 'smiley',
		'description' => 'Wraps content in AOS animation',
		'attributes' => array(
			'animationType' => array(
				'type' => 'string',
				'default' => 'fade-up'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'animate-wrapper',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
