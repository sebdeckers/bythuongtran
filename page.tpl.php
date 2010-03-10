<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<?php print $head ?>
<title><?php print $head_title ?></title>
<?php
print $styles;
print $scripts;
?>
</head>
<body>
<div id="page">
	<div id="container">
		<div id="header">
			<div id="language-switcher">
				<?php print $languageswitcher; ?>
			</div>
			<h1><span></span><?php print $site_name; ?></h1>
			<div class="navigation">
				<?php if (isset($primary_links)): print theme('links', $primary_links, array('class' => 'primary-links')); endif; ?>
			</div>		
		</div>
		<div id="content" class="clearfix">
			<div id="sidebar-left">
				<?php print $sidebar_left; ?>
				&nbsp;
			</div>
			<div id="body">
				<?php
				print $main_content_above;
				if ($mission): print '<div id="mission">'. $mission .'</div>'; endif;
				if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif;
				if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif;
				if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif;
				if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif;
				if ($show_messages && $messages): print $messages; endif;
				if ($help): print $help; endif;
				print $content;
				print $main_content_below;
				?>
			</div>
			<div id="sidebar-right">
				<?php print $sidebar_right; ?>
			</div>
		</div>
		<div id="footer">
			<div id="sharing">
				<a class="a2a_dd" href="http://www.addtoany.com/share_save?linkname=Bythuongtran&amp;linkurl=bythuongtran.com">
					<img src="/<?php print path_to_theme(); ?>/images/icon-addtoany.png" alt="Add to any" />
				</a>
				<script type="text/javascript">a2a_linkname="Bythuongtran";a2a_linkurl="bythuongtran.com";</script>
				<script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
				<p class="share">Share this website</p>
				<p class="social">Follow us at:</p>
				<a href="http://www.facebook.com/bythuongtran"><img src="/<?php print path_to_theme(); ?>/images/icon-facebook.png" alt="Facebook" /></a>
				<a href="http://twitter.com/by_thuongtran"><img src="/<?php print path_to_theme(); ?>/images/icon-twitter.png" alt="Twitter" /></a>
				<a href="http://blog.bythuongtran.com/"><img src="/<?php print path_to_theme(); ?>/images/icon-blogger.png" alt="Blogger" /></a>
				<a href="http://www.flickr.com/photos/bythuongtran"><img src="/<?php print path_to_theme(); ?>/images/icon-flickr.png" alt="Flickr" /></a>
			</div>
			<div id="notice">
				<?php if (isset($secondary_links)): print theme('links', $secondary_links, array('class' => 'secondary-links')); endif; ?>
				<p class="copyright">&copy; <span class="btt">by</span>thuongtran 2010. All rights reserved.</p>
			</div>
		</div> 
	</div>
</div>
</body>
</html>
