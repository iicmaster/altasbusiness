<?php
class Category extends IIC_Controller 
{	
	// ------------------------------------------------------------------------
	// Constructor
	// ------------------------------------------------------------------------
	
	function __construct()
	{
		parent::__construct();
		
		// Load language
		$this->lang->load(
							'../../../modules/cms/language/'.
							$this->config->item('backoffice_language').
							'/cms', $this->config->item('cms_language')
						 );
		
		// Load model
		$this->load->model('category_model');
		
		// Setup variable
		$this->content_form = 'category_form';
		$this->content_model = $this->category_model;
	}
	
	// ------------------------------------------------------------------------
	// Page
	// ------------------------------------------------------------------------
	
	/**
	 * Mian page
	 *
	 * @access	public
	 */
	
	function index()
	{		
		// Check permission
		Modules::run('backoffice/auth/check_permission');	
		
		// Set module
		$_data['module']		= 'cms';
		$_data['controller']	= 'category';
		$_data['ajax_uri']		= 'content';
		$_data['template']		= 'backoffice/tpl_module_index';
		$_data['page']			= '';
		$_data['title']			= $this->lang->line('content_category');
		
		// Set navigator
		$_data['navigator'] = array();
		array_push($_data['navigator'], array(
												'label'	=> $this->lang->line('home'),	
												'link'	=> 'backoffice'
											  ));
		array_push($_data['navigator'], array(
												'label' => $this->lang->line('cms'),	
												'link'	=> '#'
											  ));
		array_push($_data['navigator'], array(
												'label' => $this->lang->line('content_category'),	
												'link'	=> 'cms/category'
											  ));
		
		// Set table haed
		$_data['th'] = array();
		array_push($_data['th'], array(
										'axis'			=>'name',		
										'label'			=>$this->lang->line('content_category'),	
										'is_criteria'	=> TRUE
									  ));
		array_push($_data['th'], array(
										'axis'			=>'is_enable',	
										'label'			=>$this->lang->line('status'),	
										'is_criteria'	=> FALSE
									  ));
		
		// Display
		$this->load->view('backoffice/main', $_data);
	}
	
	// ------------------------------------------------------------------------
}


/* End of file category.php */
/* Location: application/modules/cms/controllers/category.php */