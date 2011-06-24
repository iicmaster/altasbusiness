<div id="content_top">
	<button class="button_add">New Category</button>
	<div id="search_section">
		<label class="inline" for="quick_access">Quick access:</label>
		<select name="quick_access" id="quick_access"></select>
	</div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<?php
		foreach($th as $data)
		{
			echo '<th axis="'.$data['axis'].'">'.$data['label'].'</th>';
		}
	 	?>
		</tr>
	</thead>
	<tbody>
		<?php
			echo'<tr><td colspan="'.count($th).'" class="center">No result found.</td></tr>';
	 	?>
	</tbody>
</table>
<div id="content_bottom">
	<button class="button_delete">Delete</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="button_move_up" rel="up">Move Up</button>
	<button class="button_move_down" rel="down">Move Down</button>
</div>

<div id="dialog_alert" class="dialog"></div>
<div id="dialog_add" class="dialog"></div>
<div id="dialog_edit" class="dialog"></div>
<div id="dialog_delete" class="dialog">
	<p><span class="ui-icon ui-icon-alert"></span>
	These items will be permanently deleted and cannot be recovered. Are you sure?</p>
</div>