<?php 
	$button_text = ($button_text == '') ? 'OK' : $button_text;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<link rel="shortcut icon" href="../favicon.ico" />

<!--iic_tools assets-->
<?php echo css_asset('aristo/jquery-ui-1.8.7.custom.css', 'iic_tools'); ?>
<?php echo css_asset('iic_layout.css', 'iic_tools'); ?>
<?php echo css_asset('iic_style.css', 'iic_tools'); ?>

<!--Backoffice assets-->
<?php echo css_asset('backoffice.css', 'backoffice'); ?>
<?php echo css_asset('backoffice_theme.css', 'backoffice'); ?>
<?php echo js_asset('jquery-1.6.1.min.js', 'backoffice'); ?>
<?php echo js_asset('jquery-ui-1.8.10.custom.min.js', 'backoffice'); ?>

<script type="text/javascript">
$(function() {
		
	$('#dialog').dialog({
	title		: '<?php echo $title ?>',
	autoOpen	: true,
	resizable	: false,
	draggable	: false,
	width		: 400,
	height		: 'auto',
	modal		: false,
	buttons		: {
					<?php echo $button_text ?>: function() {
						window.open('<?php echo base_url().$url_target ?>','_self');
					}
				  }
	});	
	
	$('body').keypress(function(event){
		
		if (event.keyCode == '13') 
		{
			window.open('<?php echo base_url().$url_target ?>','_self');
		}
		
	})
	
});
</script>
<style type="text/css">
li { list-style: circle; margin-left: 15px; }
hr { border-top-style: dashed; }
div.ui-dialog a.ui-dialog-titlebar-close { display: none; }
#dialog { margin-top: 10px; }
</style>
</head>

<body>
<div id="dialog" class="dialog">
	<?php echo $message; ?>
</div>
</body>
</html>