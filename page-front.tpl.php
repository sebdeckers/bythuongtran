<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<?php print $head ?>
<title><?php print $head_title ?></title>
<?php
drupal_add_css(path_to_theme() . '/styles/galleria.css', 'theme');
drupal_add_css(path_to_theme() . '/styles/slideshow.css', 'theme');
$styles = $variables['styles'] = drupal_get_css();
drupal_add_js(path_to_theme() . '/scripts/jquery.galleria.js', 'theme');
drupal_add_js(path_to_theme() . '/scripts/slideshow.js', 'theme');
$scripts = $variables['script'] = drupal_get_js();
print $styles;
print $scripts;
?>
</head>
<body>
<div id="frontpage">
	<div id="container">
		<div id="header">
			<div id="language-switcher">
				<?php print $languageswitcher; ?>
			</div>
			<h1>
				<?php print $site_name; ?>
			</h1>
			<div class="navigation">
				<?php if (isset($primary_links)): print theme('links', $primary_links, array('class' => 'primary-links')); endif; ?>
			</div>		
		</div>
		<div id="content" class="clearfix">
			<div id="media">
				<!-- Wrapper where the main image is displayed. Can be used to style a border etc. -->
				<div class="slideshow-big">
					<!-- Fallback for disabled javascript -->
					<noscript>
						<img src="http://farm5.static.flickr.com/4003/4419893170_de1f79eb6c.jpg" />
					</noscript>
				</div>
				<div class="slideshow-controls">
					<!-- List of thumbnail IMGs with Anchors to the big images. -->
					<a href="#" class="slideshow-back" title="<?php t('Back'); ?>"><?php t('Back'); ?></a>
					<ul class="slideshow-list"> </ul>
					<a href="#" class="slideshow-forward" title="<?php t('Forward'); ?>"><?php t('Forward'); ?></a>
					<!-- Buttons to open the corresponding full screen Flickr slideshow and main gallery. -->
					<a class="slideshow-fullscreen" target="_blank" href="http://www.flickr.com/photos/bythuongtran/sets/72157623394214280/show/" title="<?php t('Full screen'); ?>"><?php t('Full screen'); ?></a>
					<a class="slideshow-more" target="_blank" href="http://www.flickr.com/photos/bythuongtran" title="<?php t('More photos'); ?>"><?php t('More photos'); ?></a>
				</div>
			</div>
			<div id="introduction">
				<?php
				print $main_content_above;
				if ($mission): print '<div id="mission">'. $mission .'</div>'; endif;
				if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif;
				//if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif;
				if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif;
				if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif;
				if ($show_messages && $messages): print $messages; endif;
				if ($help): print $help; endif;
				print $content;
				print $main_content_below;
				?>
			</div>
		</div>
		<div id="footer">
			<div id="sharing">
				<a class="a2a_dd" href="http://www.addtoany.com/share_save?linkname=Bythuongtran&amp;linkurl=bythuongtran.com">
					<img src="/<?php print path_to_theme(); ?>/images/icon-addtoany.png" alt="Add to any" />
				</a>
				<script type="text/javascript">a2a_linkname="Bythuongtran";a2a_linkurl="bythuongtran.com";</script>
				<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
				<p class="share"><?php print t('Share this website'); ?></p>
				<p class="social"><?php print t('Follow us at'); ?>:</p>
				<a href="http://www.facebook.com/bythuongtran"><img src="/<?php print path_to_theme(); ?>/images/icon-facebook.png" alt="Facebook" /></a>
				<a href="http://twitter.com/by_thuongtran"><img src="/<?php print path_to_theme(); ?>/images/icon-twitter.png" alt="Twitter" /></a>
				<a href="http://blog.bythuongtran.com/"><img src="/<?php print path_to_theme(); ?>/images/icon-blogger.png" alt="Blogger" /></a>
				<a href="http://www.flickr.com/photos/bythuongtran"><img src="/<?php print path_to_theme(); ?>/images/icon-flickr.png" alt="Flickr" /></a>
			</div>
			<div id="notice">
				<?php if (isset($secondary_links)): print theme('links', $secondary_links, array('class' => 'secondary-links')); endif; ?>
				<p class="copyright">&copy; <span class="btt">by</span>thuongtran 2010. <?php print t('All rights reserved.'); ?></p>
			</div>
		</div> 
	</div>
</div>
</body>
</html>
