<?php 
if(! isset($id))
{
	$id = '';
	$name = '';
	$description = '';
	$is_enable = 1;
} 
?>

<form>
	<label for="name"><?php echo $this->lang->line('content_category') ?></label>
	<input id="name" name="name" type="text" value="<?php echo $name ?>" />
	
	<label for="description"><?php echo $this->lang->line('description') ?></label>
	<textarea id="description" name="description" type="text"><?php echo $description ?></textarea>
	
	<label><?php echo $this->lang->line('status') ?></label>
	<label for="enable">
		<input type="radio" name="is_enable" value="1" id="enable" 
			   <?php if($is_enable == 1) echo 'checked="checked"' ?> /> 
		<?php echo $this->lang->line('enable') ?>
	</label>
	<label for="disable">
		<input type="radio" name="is_enable" value="0" id="disable" 
			   <?php if($is_enable == 0) echo 'checked="checked"' ?> /> 
		<?php echo $this->lang->line('disable') ?>
	</label> 
	
	<input id="date_create" name="date_create" type="hidden" value="<?php echo date('Y-m-d') ?>" />
	<input id="id" name="id" type="hidden" value="<?php echo $id ?>" />
</form>