<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>

  <body>	
	<div id="page">
	  <div id="container">
	    <div id="header">
		  <h1><span></span><?php print $site_name; ?></h1>
				
		  <div class="navigation">
            <?php if (isset($primary_links)) : ?>
              <?php print theme('links', $primary_links, array('class' => 'primary-links')) ?>
            <?php endif; ?>
          </div>		
	    </div>
	    <div id="content" class="clearfix">
		
		  <div id="sidebar-left">
			<?php print $sidebar_left; ?>
		  </div>
		
		  <div id="body">
	          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
	          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
	          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
	          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
	          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
	          <?php if ($show_messages && $messages): print $messages; endif; ?>
	          <?php print $help; ?>

	        <?php print $content; ?>
		  </div>
		
		  <div id="sidebar-right">
			<?php print $sidebar_right; ?>
		  </div>
		
	    </div>
	    <div id="footer">
		  <div id="sharing">
			  <img src="/<?php print path_to_theme(); ?>/images/icon-addtoany.png" alt="Add to any" />
			  <p class="share">Share this website</p>
              <p class="social">Follow us at:</p>
	          <img src="/<?php print path_to_theme(); ?>/images/icon-facebook.png" alt="Facebook" />
	          <img src="/<?php print path_to_theme(); ?>/images/icon-twitter.png" alt="Twitter" />
	          <img src="/<?php print path_to_theme(); ?>/images/icon-blogger.png" alt="Blogger" />	
		  </div>
		  <div id="notice">
            <?php if (isset($secondary_links)) : ?>
              <?php print theme('links', $secondary_links, array('class' => 'secondary-links')) ?>
            <?php endif; ?>
            <p class="copyright">&copy; Bythongtran 2010. All rights reserved</p>
          </div>
		</div> 
	  </div>
    </div>
  </body>
</html>