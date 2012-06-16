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

<script type="text/javascript">IMAGE_URL = "<?php echo image_asset_url('', 'cms');?>";</script>
<?php echo js_asset('jquery.js', 'cms');?>
<?php echo js_asset('prettyPhoto/js/jquery.prettyPhoto.js', 'cms');?>
<?php echo js_asset('easing.js', 'cms');?>
<?php echo js_asset('swfobject.js', 'cms');?>
<?php echo js_asset('pk.js', 'cms');?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery("#menu li:eq(0)").addClass("current");
});
</script>
</head>
<body>
<!--[if !IE]>start #top<![endif]-->
<div class="wrapper top">
	<div class="container">
		<div id="logo">
			<!--<span id="logo_background"><img src="<?php echo image_asset_url('skin/back_ground_logo.png', 'cms');?>" /></span>-->
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
					<h2>Altas Business</h2>
					<h3>altas business salogan</h3>
				</div>
				<div id="featured">
					<p class="content_label"><img src="<?php echo image_asset_url('skin/featured_label.png', 'cms');?>" alt="" /></p>
					<h2 class="label_title">PROMOTION</h2>
					<div id="featured_items">
						<div id="fetured_items_content">
						    <?php foreach ($promotion as $key => $value): ?>
								
							<div class="item">
								<div class="caption">
									<h3 class="caption_title"><?php echo $value['topic'] ?></h3>
									<p><?php echo $value['desc_short'] ?></p>
								</div>
								<a href="single_work.html" title=""><img src="<?php echo image_asset_url('featured/01.jpg', 'cms');?>" alt="" /></a>
							</div>
							
							<?php endforeach ?>
						</div>
						<div id="featured_numbers">
							<div class="numbers">
								<ul>
                                    <?php foreach ($promotion as $key => $value): ?>
									<li>
										<a href="#" title="" rel="<?php echo image_asset_url('featured/thumbs/01.jpg', 'cms');?>"><?php echo $key + 1  ?></a>
									</li>
                                     <?php endforeach ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div id="others">
				    <h2 class="label_title">NEW PRODUCT</h2>
					<div id="slide">
						<div id="slide_items">
                            <?php foreach ($product as $key => $value): ?>
							<div class="item">
								<h3 class="item_title"><?php echo $value['product_name'] ?></h3>
								<img src="<?php echo $value['product_icon_file'] ?>" />
								<p><?php echo substr($value['product_desc'], 0, 200).'...' ?></p>
								<a href="#" title="" class="read_more">Read more</a>
							</div>
                            <?php endforeach ?>
						</div>
						<div id="list">
							<ul>
                                <?php foreach ($product as $key => $value): ?>
								<li>
									<div>
										<h4 class="item_title"><?php echo $value['product_name'] ?></h4>
                                <p><?php echo substr($value['product_desc'], 0, 50).'...' ?></p>
									</div>
								</li>
                             <?php endforeach ?>
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
							<input type="image" src="<?php echo image_asset_url('skin/button_search.jpg', 'cms');?>" alt="Submit" />
						</p>
					</form>
				</div>
				<div id="latest_news">
					<h2 class="label_title">NEWS</h2>
					<ul>
						<?php foreach ($news as $key => $value): ?>
						<li>
							<h4 class="item_title"><a href="#" title=""><?php echo $value['topic'] ?></a></h4>
							<p class="date"><?php echo $value['date_creat'] ?></p>
                            <p><?php echo $value['desc_short'] ?></p>
						</li>
                        <?php endforeach ?>
					</ul>
				</div>
				<div class="text">
					<h2 class="label_title">BANNER</h2>
				</div>
			</div>
			<!--[if !IE]>end #sidebar<![endif]-->
		</div>
	</div>
</div>
<?php $this->load->view('footer') ?>
</body>
</html>