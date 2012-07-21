$(function() 
{
	// Load content 
	get_content();
});	

// ------------------------------------------------------------------------

/**
 * Generate HTML tag and replace in <tbody>
 * 
 * @param json content
 */	

function generate_html(content)
{
	var list = '';
	 
	$.each(content, function(i, data) 
	{
		var status = (data['is_enable'] == 1) ? '<span class="green">'+LANG_ENABLE+'</span>' : 
												'<span class="lite_gray">'+LANG_DISABLE+'</span>';
		
		list += '<tr rel="' + data['id'] + '">' + 
					'<td><input type="checkbox" id="' + data['id'] + '" value="' + data['id'] + '" /></td>' + 
					'<td>' + data['name'] + '</td>' + 
					'<td class="center">' + status + '</td>' + 
				'</tr>';
	});
	
	return list;
}

// ------------------------------------------------------------------------

function get_create_form(url)
{
	// Setup ajax
	$.post(url, function(response)
	{
		var dialog = $('#dialog_create');
		
		// Insert content;
		dialog.html(response);
		
		// Generate tabs
		dialog.find("#tabs").tabs();
		
		// Generate select list
		dialog.find('select[multiple]').selectList();
		
		// Fix jquery.form -> ajaxSubmit bug
		dialog.find('select.selectlist-select').attr('name', 'selectlist[]'); 
		
		// Generate date picker
		//dialog.find('#receive_date').datepicker();
		
		// Open dialog		
		dialog.dialog('open')
	})
	.error(function() 
	{  
		var msg = 'Error: get_create_form(' + url + ')';
		$('#dialog_alert_message').html(msg);
		$('#dialog_alert').dialog('open');
	});
}

// ------------------------------------------------------------------------


/* End of file content_index.js */
/* Location: assets/modules/cms/assets/js/content_index.js */