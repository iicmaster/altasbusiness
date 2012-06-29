<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Altasbusiness</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<?php echo css_asset('style.css', 'cms');?>
<?php echo css_asset('skin.css', 'cms');?>
<?php echo css_asset('prettyPhoto/css/prettyPhoto.css', 'cms');?>

<!--[if IE 6]>
<script type="text/javascript" src="jscript/belated_png.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix(".logo a, #logo_background img, #featured, .numbers li,
.content_label img, .sidebar_label img");
</script>
<![endif]-->

<?php echo js_asset('jquery.js', 'cms');?>
<?php echo js_asset('prettyPhoto/js/jquery.prettyPhoto.js', 'cms');?>
<?php echo js_asset('easing.js', 'cms');?>
<?php echo js_asset('swfobject.js', 'cms');?>
<?php echo js_asset('pk.js', 'cms');?>

<script type="text/javascript">
IMAGE_URL = "<?php echo image_asset_url('', 'cms');?>";

$(function() 
{
    jQuery("#menu li:eq(0)").addClass("current");
});
</script>
</head>

<body>
	
	<!--[if !IE]>start #top<![endif]-->
	<div class="wrapper top">
		<div class="container">
			<div id="logo">
				<span id="logo_background"><img src="images/skin/back_ground_logo.png" alt="" /></span>
				<h1 class="logo"><a href="index.html" title="">Simply</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.html" title="">HOME</a>
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
					<li class="current"><a href="about.html" title="">ABOUT</a></li>
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
						<h2 class="title">ABOUT MY WORK</h2>
						<h3 class="title">lorem ipsum dolor sit amet...</h3>
					</div>
					
					<!--[if !IE]>start #about<![endif]-->
					<div id="about">
						<p class="content_label"><img src="images/skin/about_label.png" alt="" /></p>
						<h2 class="label_title">MY LIFE</h2>
						
						<div id="life">
							<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.</p>
							
							<!--[if !IE]>start .thumbs_slide<![endif]-->
							<div class="thumbs_slide">
								<span class="prev"><img src="images/skin/button_prev.png" alt="" /></span>
								<span class="next"><img src="images/skin/button_next.png" alt="" /></span>
								<div class="thumbs_shadow">
									<div class="thumbs">
										<ul>
											<li><a href="http://www.youtube.com/watch?v=HkjNfFaYl4M" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/01.jpg" alt="" /></a></li>
											<li><a href="images/gallery/02.jpg" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/02.jpg" alt="" /></a></li>
											<li><a href="images/gallery/03.jpg" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/03.jpg" alt="" /></a></li>
											<li><a href="http://www.youtube.com/watch?v=ml297IBrtwg" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/04.jpg" alt="" /></a></li>
											<li><a href="images/gallery/05.jpg" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/05.jpg" alt="" /></a></li>
											<li><a href="images/gallery/01.jpg" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/01.jpg" alt="" /></a></li>
											<li><a href="images/gallery/02.jpg" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/02.jpg" alt="" /></a></li>
											<li><a href="images/gallery/03.jpg" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/03.jpg" alt="" /></a></li>
											<li><a href="http://www.youtube.com/watch?v=VxhejQsrbfs" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/04.jpg" alt="" /></a></li>
											<li><a href="images/gallery/05.jpg" title="" rel="prettyPhoto[one]"><img src="images/gallery/thumbs/05.jpg" alt="" /></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!--[if !IE]>end .thumbs_slide<![endif]-->

							<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<blockquote>
								<p>Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipisici elit, sed eiusmod tempor incidunt ut labore...</p>
							</blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non.</p>
							
							<h4 class="heading">Table example</h4>
							<div class="table_wrapper">
								<table class="table">
									<tr>
										<th>Products</th>
										<th>Categories</th>
										<th>Prices</th>
									</tr>
									<tr>
										<td>Milky Template</td>
										<td>Xthml/Css</td>
										<td>15$</td>
									</tr>
									<tr class="alt">
										<td>Arrowhead Template</td>
										<td>Xthml/Css</td>
										<td>10$</td>
									</tr>
									<tr>
										<td>Minimal Thumbs Gallery R1</td>
										<td>Image Viewers</td>
										<td>12$</td>
									</tr>
									<tr class="alt">
										<td>Black Gold Website Template</td>
										<td>Flash Template</td>
										<td>40$</td>
									</tr>
									<tr>
										<td>Mirror Portfolio Template</td>
										<td>Flash Template</td>
										<td>40$</td>
									</tr>
									<tr class="alt">
										<td>Minimal Website Template R1</td>
										<td>Flash Template</td>
										<td>40$</td>
									</tr>
									<tr>
										<td>Pearl White Portfolio Template</td>
										<td>Flash Template</td>
										<td>30$</td>
									</tr>
									<tr class="alt">
										<td>Elegant Portfolio Template</td>
										<td>Flash Template</td>
										<td>35$</td>
									</tr>
								</table>
							</div>
						</div>
						
						<div id="clients">
							<h2 class="label_title">I WORK FOR</h2>
							<div class="grid">
								<ul>
									<li><img src="images/clients/01.jpg" alt="" /></li>
									<li><img src="images/clients/02.jpg" alt="" /></li>
									<li><img src="images/clients/03.jpg" alt="" /></li>
									<li><img src="images/clients/04.jpg" alt="" /></li>
									<li><img src="images/clients/05.jpg" alt="" /></li>
									<li><img src="images/clients/06.jpg" alt="" /></li>
									<li><img src="images/clients/07.jpg" alt="" /></li>
									<li><img src="images/clients/08.jpg" alt="" /></li>
								</ul>
							</div>
						</div>
						
						<div id="links">
							<div id="friends">
								<h2 class="label_title">FRIENDS</h2>
								<ul class="list_style_arrows">
									<li><a href="#" title="">Parker&amp;kent</a></li>
									<li><a href="#" title="">Envato</a></li>
									<li><a href="#" title="">Activeden</a></li>
									<li><a href="#" title="">Themeforest</a></li>
									<li><a href="#" title="">Creattica</a></li>
									<li><a href="#" title="">Audiojungle</a></li>
									<li><a href="#" title="">Graphicriver</a></li>
									<li><a href="#" title="">Codecanyon</a></li>
								</ul>
							</div>
							<div id="respect">
								<h2 class="label_title">RESPECT</h2>
								<ul class="list_style_none">
									<li><a href="#" title="">Lorem Ipsum</a></li>
									<li><a href="#" title="">Sit Dolor</a></li>
									<li><a href="#" title="">Excepteur</a></li>
									<li><a href="#" title="">Quis Nostrud</a></li>
									<li><a href="#" title="">Parker&amp;kent</a></li>
									<li><a href="#" title="">Officia Deserunt</a></li>
									<li><a href="#" title="">Mollit</a></li>
								</ul>
							</div>
							<div id="resources">
								<h2 class="label_title">RESOURCES</h2>
								<ul class="list_style_none">
									<li><a href="#" title="">Tutsplus</a></li>
									<li><a href="#" title="">NetTuts</a></li>
									<li><a href="#" title="">Free Icons</a></li>
									<li><a href="#" title="">Jquery</a></li>
									<li><a href="#" title="">Wordpress</a></li>
								</ul>
							</div>
						</div>
						
					</div>
					<!--[if !IE]>end #about<![endif]-->
					
				</div>
				<!--[if !IE]>end #content<![endif]-->
				
				<!--[if !IE]>start #sidebar<![endif]-->
				<div class="sidebar">
					<div id="search">
						<form action="" method="get">
							<p>
								<input type="text" class="input_search" name="search" value="Search..." onfocus="if (this.value == 'Search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" />
								<input type="image" src="images/skin/button_search.jpg" alt="Submit" />
							</p>
						</form>
					</div>
					
					<div id="contacts">
						<div id="contact_form">
							<h2 class="label_title">SPEEDY MAIL</h2>
							<div id="speedy_form">
								<div id="response"></div>
								<form id="speedy_form_mail" action="">		
									<fieldset class="input">
										<input type="text" name="name" id="name" value="Name" onfocus="if (this.value == 'Name') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Name';}" tabindex="1" />
										<input type="text" name="email" id="email" value="Email" onfocus="if (this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}" tabindex="2" />
										<input type="text" name="subject" id="subject" value="Subject" onfocus="if (this.value == 'Subject') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Subject';}" tabindex="3" />
									</fieldset>
									<fieldset class="textarea">
										<textarea name="message" id="message" rows="" cols="" tabindex="4">Message</textarea>
									</fieldset>
									<div>
										<input class="btn" name="submit" type="submit" id="submit" tabindex="5" value="Send" />
									</div>
								</form>
							</div>
						</div>
						
						<div id="contact_info">
							<h2 class="label_title">MY CONTACTS</h2>
							<ul>
								<li>Your Name</li>
								<li><a href="mailto:yourname@yourdomain.com">info@yourdomain.com</a></li>
								<li>c. 0041 123 45 67</li>
								<li>Simply Street. 102</li>
								<li>6900 . Lugano .Ti</li>
								<li>Switzerland</li>
							</ul>
						</div>
					</div>
					
					<div>
						<p id="button_contact_info"><img src="images/skin/button_contact_info.jpg" alt="" /></p>
						<p id="button_contact_form"><img src="images/skin/button_contact_form.jpg" alt="" /></p>
					</div>
					
					<div id="note">
						<p>I'm available for freelance works...Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea.</p>
					</div>
					
					<div id="twitter">
						<p class="sidebar_label"><img src="images/skin/twitter_label.png" alt="" /></p>
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
					
					<div class="text background_none">
						<h2 class="label_title">BLOG</h2>
						<h4 class="item_title"><a href="blog_post.html" title="" >Latest post title</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
						<a href="blog_post.html" title="" class="read_more">Read more</a>
					</div>
				</div>
				<!--[if !IE]>end #sidebar<![endif]-->
				
			</div>
		</div>
	</div>
	<!--[if !IE]>end #main<![endif]-->
	
	
<?php $this->load->view('footer') ?>
</body>
</html>