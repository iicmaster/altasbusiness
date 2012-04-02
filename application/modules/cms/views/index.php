<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>parker&amp;kent</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<?php echo css_asset('style.css', 'cms');?>
	<?php echo css_asset('skin.css', 'cms');?>
	<?php echo css_asset('prettyPhoto/css/prettyPhoto.css', 'cms');?>
	
	<!--
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/skin.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="jscript/prettyPhoto/css/prettyPhoto.css" charset="utf-8" />
	-->
	
	<!--[if IE 6]>
		<script type="text/javascript" src="jscript/belated_png.js"></script>
		<script type="text/javascript">
			DD_belatedPNG.fix(".logo a, #logo_background img, #featured, .numbers li, .content_label img, .sidebar_label img");
		</script>
	<![endif]-->
	
	<script type="text/javascript">
		IMAGE_URL = "<?php echo image_asset_url('', 'cms'); ?>";
	</script>
	
	<?php echo js_asset('jquery.js', 'cms');?>
	<?php echo js_asset('prettyPhoto/js/jquery.prettyPhoto.js', 'cms');?>
	<?php echo js_asset('easing.js', 'cms');?>
	<?php echo js_asset('swfobject.js', 'cms');?>
	<?php echo js_asset('pk.js', 'cms');?>
	<!--
	<script type="text/javascript" src="jscript/jquery.js"></script>
	<script type="text/javascript" src="jscript/prettyPhoto/js/jquery.prettyPhoto.js" charset="utf-8"></script>
	<script type="text/javascript" src="jscript/easing.js"></script>
	<script type="text/javascript" src="jscript/swfobject.js"></script>
	<script type="text/javascript" src="jscript/pk.js"></script>
	-->
</head>

<body>
	<!--[if !IE]>start #top<![endif]-->
	<div class="wrapper top">
		<div class="container">
			<div id="logo">
				<span id="logo_background"><img src="<?php echo image_asset_url('skin/back_ground_logo.png', 'cms'); ?>" alt="" /></span>
				<h1 class="logo"><a href="index.html" title="">Simply</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current"><a href="index.html" title="">HOME</a>
						<ul>
							<li><a href="index_flash.html" title="">HOME FLASH</a></li>
						</ul>
					</li>
					<li><a href="works.html" title="">WORKS</a>
						<ul>
							<li><a href="works.html" title="">PRINT</a></li>
							<li><a href="works.html" title="">IDENTITY</a></li>
							<li><a href="works.html" title="">WEB</a></li>
							<li><a href="works.html" title="">ANIMATION</a>
								<ul>
									<li><a href="works.html" title="">MOTION</a></li>
									<li><a href="works.html" title="">3D ANIMATION</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="about.html" title="">ABOUT</a></li>
					<li><a href="blog.html" title="">BLOG</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--[if !IE]>end #top<![endif]-->
	
	<!--[if !IE]>start #main<![endif]-->
	<div class="wrapper center">
		<div class="container">
			<div id="main">
				
				<!--[if !IE]>start #content<![endif]-->
				<div class="content">
					<div id="slogan">
						<h2>HELLO THERE...</h2>
						<h3>welcome to my online portfolio</h3>
					</div>
					
					<div id="featured">
						<p class="content_label"><img src="<?php echo image_asset_url('skin/featured_label.png', 'cms'); ?>" alt="" /></p>
						<h2 class="label_title">FEATURED PROJECTS</h2>
						
						<div id="featured_items">
							<div id="fetured_items_content">
	 			
								<div class="item current">
									<div class="caption">
										<h3 class="caption_title">Item title one</h3>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur deserunt mollit anim id est laborum... <a href="single_work.html" title="Read More">Read More</a></p>
									</div>
									<a href="single_work.html" title=""><img src="<?php echo image_asset_url('featured/01.jpg', 'cms'); ?>" alt="" /></a>
								</div>
								<div class="item">
									<div class="caption">
										<h3 class="caption_title">Item title two</h3>
										<p>Cillum dolore eu fugiat nulla pariatur deserunt aute iure reprehenderit in voluptate velit esse anim id est laborum... <a href="single_work.html" title="Read More">Read More</a></p>
									</div>
									<a href="single_work.html" title=""><img src="<?php echo image_asset_url('featured/02.jpg', 'cms'); ?>" alt="" /></a>
								</div>
								<div class="item">
									<div class="caption">
										<h3 class="caption_title">Item title three</h3>
										<p>Fugiat nulla pariatur deserunt mollit anim id est laborum quis aute iure reprehenderit in voluptate velit esse... <a href="single_work.html" title="Read More">Read More</a></p>
									</div>
									<a href="single_work.html" title=""><img src="<?php echo image_asset_url('featured/03.jpg', 'cms'); ?>" alt="" /></a>
								</div>
							</div>
							
							<div id="featured_numbers">
								<div class="numbers">
									<ul>
										<li><a href="#" title="" rel="<?php echo image_asset_url('featured/thumbs/01.jpg', 'cms'); ?>">1</a></li>
										<li><a href="#" title="" rel="<?php echo image_asset_url('featured/thumbs/02.jpg', 'cms'); ?>">2</a></li>
										<li><a href="#" title="" rel="<?php echo image_asset_url('featured/thumbs/03.jpg', 'cms'); ?>">3</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<div id="others">
						<div id="slide">
							<div id="slide_items">
								<div class="item current">
									<h3 class="item_title">Lorem ipsum dolor sit amet, consectetur</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.</p>
									<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur deserunt mollit anim id est laborum...</p>
									<a href="#" title="" class="read_more">Read more</a>
								</div>
								<div class="item">
									<h3 class="item_title">Fugiat nulla pariatur sunt in culpa qui officia</h3>
									<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
									<a href="#" title="" class="read_more">Read more</a>
								</div>
								<div class="item">
									<h3 class="item_title">Tempor incidunt ut labore et dolore nostrud</h3>
									<p>Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.</p>
									<a href="#" title="" class="read_more">Read more</a>
								</div>
							</div>
							<div id="list">
								<ul>
									<li class="first">
										<div class="current">
											<h4 class="item_title">Lorem ipsum dolor</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed</p>
										</div>
									</li>
									<li>
										<div>
											<h4 class="item_title">Ullamco laboris nisi ut</h4>
											<p>In voluptate velit esse cillum dolore eu fugiat nulla pariatur...</p>
										</div>
									</li>
									<li>
										<div>
											<h4 class="item_title">Lorem ipsum dolor sit...</h4>
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--[if !IE]>end #content<![endif]-->
				
				<!--[if !IE]>start #sidebar<![endif]-->
				<div class="sidebar">
					<div id="search">
						<form action="" method="get">
							<p>
								<input type="text" class="input_search" name="search" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
								<input type="image" src="<?php echo image_asset_url('skin/button_search.jpg', 'cms'); ?>" alt="Submit" />
							</p>
						</form>
					</div>
					
					<div id="latest_news">
						<h2 class="label_title">NEWS</h2>
						<ul>
							<li>
								<h4 class="item_title"><a href="#" title="">News title one</a></h4>
								<p class="date">25.02.2010</p>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
							</li>
							<li>
								<h4 class="item_title"><a href="#" title="">News title two</a></h4>
								<p class="date">20.02.2010</p>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan sed eiusmod tempor...</p>
							</li>
						</ul>
					</div>
					
					<div id="twitter">
						<p class="sidebar_label"><img src="<?php echo image_asset_url('skin/twitter_label.png', 'cms'); ?>" alt="" /></p>
					</div>
					
					<div class="text">
						<h2 class="label_title">ABOUT</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid.</p>
						<a href="about.html" title="" class="read_more">Read more</a>
					</div>
				</div>
				<!--[if !IE]>end #sidebar<![endif]-->
				
			</div>
		</div>
	</div>
	<!--[if !IE]>end #main<![endif]-->
	
	<!--[if !IE]>start #footer<![endif]-->
	<div class="wrapper bottom">
		<div class="container">
			<div id="footer">
				<div id="footer_content">
					<ul>
						<li>Simply Theme</li>
						<li>Forest street, 102</li>
						<li>Bern - Switzerland</li>
						<li><a href="mailto:info@simply.com">info@simply.com</a></li>
					</ul>
					<div id="follow_me">
						<h5>Follow Me</h5>
						<a href="#" title=""><img src="<?php echo image_asset_url('social_network/twitter.jpg', 'cms'); ?>" alt="twitter" /></a>
						<a href="#" title=""><img src="<?php echo image_asset_url('social_network/facebook.jpg', 'cms'); ?>" alt="facebook" /></a>
						<a href="#" title=""><img src="<?php echo image_asset_url('social_network/feed.jpg', 'cms'); ?>" alt="feed" /></a>
					</div>
				</div>
				<div id="newsletter">
					<form action="" method="get">
						<p>
							<input type="text" class="input_newsletter" name="search" value="Enter your email" onfocus="if (this.value == 'Enter your email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email';}" />
							<input type="image" src="<?php echo image_asset_url('skin/button_newsletter.jpg', 'cms'); ?>" alt="Submit" />
						</p>
					</form>
					<p class="note">Lorem ipsum dolor sit amet, consectetur adipisici elit... sed eiusmod tempor incidunt ut labore et dolore!</p>
				</div>
			</div>
		</div>
	</div>
	<!--[if !IE]>end #footer<![endif]-->
</body>
</html>