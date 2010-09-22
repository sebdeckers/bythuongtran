<?php
/**
* This file is part of the Bythuongtran Gallery module for Drupal
* Copyright (c) 2010 Sebastiaan Deckers
* License: GNU General Public License version 3 or later
*
* @file bttgallery.tpl.php
*
* Theme implementation to display a Galleria slideshow for Bythuongtran.
*/
?>

<?
//	drupal_add_css(drupal_get_path('module', 'bttgallery') . '/styles/galleria.css', 'theme');
	drupal_add_css(drupal_get_path('module', 'bttgallery') . '/styles/photos.css', 'theme');

	drupal_add_js(drupal_get_path('module', 'bttgallery') . '/scripts/galleria/galleria.js');
	drupal_add_js(drupal_get_path('module', 'bttgallery') . '/scripts/galleria/themes/classic/galleria.classic.js');
	drupal_add_js(drupal_get_path('module', 'bttgallery') . '/scripts/photos.js');
?>

<div class="btt-gallery"></div>
