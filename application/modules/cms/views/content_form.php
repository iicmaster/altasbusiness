<?php 
if(! isset($id))
{
	$id = '';
	$id_category = '';
	$topic = '';
	$content = '';
	$is_enable = 1;
} 
?>

<form id="tabs">
	<ul>
		<li><a href="#tabs-1">Content</a></li>
		<li><a href="#tabs-2">Attach files</a></li>
	</ul>
	<div id="tabs-1">
		<label for="id_category"><?php echo $this->lang->line('content_category') ?></label>
		<select id="id_category" name="id_category" multiple="multiple" class="required">
			<option value="">-</option>
			<?php echo Modules::run('cms/category/get_content_selectbox_option', $id_category); ?>
		</select>
		
		<label for="topic"><?php echo $this->lang->line('topic') ?></label>
		<input id="topic" name="topic" type="text" value="<?php echo $topic ?>" class="required" />
		
		<label for="content"><?php echo $this->lang->line('content') ?></label>
		<textarea id="txt_content" name="content" rows="5" class="required"><?php echo $content ?></textarea>
		
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
	</div>
	<div id="tabs-2">
	<?php for($loop = 1; $loop <= 5; $loop++): ?>
		<label for="attach_file_<?php echo $loop ?>">
			<?php echo $this->lang->line('attach_file') ?> <?php echo $loop ?>
		</label>
		<input type="file" name="attach_file[]" id="attach_file_<?php echo $loop ?>"/>		
	<?php endfor ?>
	</div>
	<input id="id_auther" name="id_author" type="hidden" value="<?php echo date('Y-m-d') ?>" />
	<input id="date_create" name="date_create" type="hidden" value="<?php echo date('Y-m-d') ?>" />
	<input id="id" name="id" type="hidden" value="<?php echo $id ?>" />
</form>
