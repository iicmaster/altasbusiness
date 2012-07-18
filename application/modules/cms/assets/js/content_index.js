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


/* End of file level.js */
/* Location: assets/modules/cms/assets/js/category.js */