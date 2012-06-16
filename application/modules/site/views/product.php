<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Altasbusiness</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<?php echo css_asset('style.css', 'cms') ?>
<?php echo css_asset('skin.css', 'cms') ?>
<?php echo css_asset('prettyPhoto/css/prettyPhoto.css', 'cms') ?>

<!--[if IE 6]>
<script type="text/javascript" src="jscript/belated_png.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix(".logo a, #logo_background img, #featured, .numbers li,
.content_label img, .sidebar_label img");
</script>
<![endif]-->

<script type="text/javascript">IMAGE_URL = "<?php echo image_asset_url('', 'cms') ?>";</script>
<?php echo js_asset('jquery.js', 'cms') ?>
<?php echo js_asset('prettyPhoto/js/jquery.prettyPhoto.js', 'cms') ?>
<?php echo js_asset('easing.js', 'cms') ?>
<?php echo js_asset('swfobject.js', 'cms') ?>
<?php echo js_asset('pk.js', 'cms') ?>

<script type="text/javascript">
jQuery(document).ready(function()
{
	jQuery("#menu li:eq(1)").addClass("current");
});
</script>
</head>
<body>
<!--[if !IE]>start #top<![endif]-->
<div class="wrapper top">
	<div class="container">
		<div id="logo">
			<!--<span id="logo_background"><img src="<?php echo
			image_asset_url('skin/back_ground_logo.png', 'cms');?>" /></span>-->
			<!--<h1 class="logo"><a href="index.html" title="">Altas Business</a></h1>-->
		</div>
		<?php $this->load->view('menu') ?>
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
					<h2>Product and Services</h2>
					<h3>lorem ipsum dolor...</h3>
				</div>

				<div id="blog">

					<div id="posts">
						<h2 class="label_title">FEATURED PRODUCT</h2>

						<!--[if !IE]>start #slide_posts<![endif]-->
						<div id="slide_posts">
							<span id="sp_prev"><img src="<?php echo image_asset_url('skin/button_prev.png', 'cms') ?>" alt="" /></span>
							<span id="sp_next"><img src="<?php echo image_asset_url('skin/button_next.png', 'cms') ?>" alt="" /></span>
							<div id="slide_posts_shadow">
								<div id="slide_posts_content">
									<ul>
										<li><a href="blog_post.html" title=""><img src="<?php echo image_asset_url('works/01.jpg', 'cms') ?>" alt="" /></a><h3 class="item_title"><a href="blog_post.html" title="">Voluptate esse cillum</a></h3>
											<p>
												Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia...
											</p><a href="blog_post.html" title="Read More" class="read_more">Read More</a></li>
										<li><a href="blog_post.html" title=""><img src="<?php echo image_asset_url('works/07.jpg', 'cms') ?>" alt="" /></a><h3 class="item_title"><a href="blog_post.html" title="">Sunt in culpa qui officia</a></h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua...
											</p><a href="blog_post.html" title="Read More" class="read_more">Read More</a></li>
										<li><a href="blog_post.html" title=""><img src="<?php echo image_asset_url('works/12.jpg', 'cms') ?>" alt="" /></a><h3 class="item_title"><a href="blog_post.html" title="">Lorem sed eiusmod tempor</a></h3>
											<p>
												Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia...
											</p><a href="blog_post.html" title="Read More" class="read_more">Read More</a></li>
										<li><a href="blog_post.html" title=""><img src="<?php echo image_asset_url('works/16.jpg', 'cms') ?>" alt="" /></a><h3 class="item_title"><a href="blog_post.html" title="">Sunt in culpa qui officia</a></h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua...
											</p><a href="blog_post.html" title="Read More" class="read_more">Read More</a></li>
										<li><a href="blog_post.html" title=""><img src="<?php echo image_asset_url('works/19.jpg', 'cms') ?>" alt="" /></a><h3 class="item_title"><a href="blog_post.html" title="">Voluptate esse cillum</a></h3>
											<p>
												Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia...
											</p><a href="blog_post.html" title="Read More" class="read_more">Read More</a></li>
										<li><a href="blog_post.html" title=""><img src="<?php echo image_asset_url('works/21.jpg', 'cms') ?>" alt="" /></a><h3 class="item_title"><a href="blog_post.html" title="">Sunt in culpa qui officia</a></h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua...
											</p><a href="blog_post.html" title="Read More" class="read_more">Read More</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!--[if !IE]>end #slide_posts<![endif]-->

					</div>

					<div class="entry">
						<h2 class="item_title"><a href="blog_post.html" title="">Our Services</a></h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
						</p>

						<p>
							Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
						</p>
						<p>
							Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit.
						</p>
					</div>

					<div id="posts">
						<h2 class="label_title">OTHER SERVICES</h2>
						<ul class="list_style_arrows older_posts">
							<li><a href="blog_post.html" title="" rel="<?php echo image_asset_url('gallery/thumbs/01.jpg', 'cms') ?>">Lorem ipsum dolor sita amet</a></li>
							<li><a href="blog_post.html" title="" rel="<?php echo image_asset_url('gallery/thumbs/02.jpg', 'cms') ?>">Voluptate velit esse cillum dolore eu fugiat</a></li>
							<li><a href="blog_post.html" title="" rel="<?php echo image_asset_url('gallery/thumbs/03.jpg', 'cms') ?>">Excepteur sint obcaecat cupiditat</a></li>
							<li><a href="blog_post.html" title="" rel="<?php echo image_asset_url('gallery/thumbs/04.jpg', 'cms') ?>">Cillum dolore eu fugiat</a></li>
							<li><a href="blog_post.html" title="" rel="<?php echo image_asset_url('gallery/thumbs/05.jpg', 'cms') ?>">Quis nostrud exercitation</a></li>
							<li><a href="blog_post.html" title="" rel="<?php echo image_asset_url('gallery/thumbs/01.jpg', 'cms') ?>">Enim ad minim veniam quis</a></li>
							<li><a href="blog_post.html" title="" rel="<?php echo image_asset_url('gallery/thumbs/02.jpg', 'cms') ?>" class="last">Incidunt ut labore et dolore</a></li>
						</ul>
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
							<input type="image" src="<?php echo image_asset_url('skin/button_search.jpg', 'cms') ?>" alt="Submit" />
						</p>
					</form>
				</div>

				<div id="categories">
					<h2 class="label_title">CATEGORIES</h2>
					<a href="#" title="" id="button_feed"><img src="<?php echo image_asset_url('skin/button_feed.png', 'cms') ?>" alt="" /></a>
					<ul class="list_style_none">
						<li><a href="#" title="">Architecture</a></li>
						<li><a href="#" title="">Books</a></li>
						<li><a href="#" title="">Design Studios</a></li>
						<li><a href="#" title="">Editorial</a></li>
						<li><a href="#" title="">Exhibitions</a></li>
						<li><a href="#" title="">Film</a></li>
						<li><a href="#" title="">Branding</a></li>
						<li><a href="#" title="">Illustrations</a></li>
						<li><a href="#" title="">Music</a></li>
						<li><a href="#" title="">Packaging</a></li>
						<li><a href="#" title="">Photography</a></li>
						<li><a href="#" title="">Prints</a></li>
						<li><a href="#" title="">Products</a></li>
					</ul>
				</div>

			</div>
			<!--[if !IE]>end #sidebar<![endif]-->

		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>

</body>
</html>