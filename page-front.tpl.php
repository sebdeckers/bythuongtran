<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>

  <body>	
	<div id="frontpage">
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
          <div id="media">
		    <div class="picture">
			   <img src="/<?php print path_to_theme(); ?>/images/frontpage-testimage.jpg" alt="testimage" />
            </div>
		    <div class="gallery">
			  <div class="gallery-wrapper">
                 <a href="#" class="nav-left"><img src="/<?php print path_to_theme(); ?>/images/gallery-left.png" alt="gallery-left" /></a>
  			     <ul class="images">
				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
  				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
				    <li><a href="#"><img src="/<?php print path_to_theme(); ?>/images/testimage.png" alt="testimage" /></a></li>
			     </ul>
                 <a href="#" class="nav-right"><img src="/<?php print path_to_theme(); ?>/images/gallery-right.png" alt="gallery-left" /></a>
              </div>
 		    </div>
	      </div>
          <div id="introduction">
		    <p class="certified"><span></span>The certified wedding specialist in Vietnam and Singapore</p>
		
			<?php print $content; ?>
					
			<p class="provision"><span></span>Providing premium wedding and destination wedding services inplanning and consulting</p>
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