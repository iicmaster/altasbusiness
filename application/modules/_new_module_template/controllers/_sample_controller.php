<?php
class Sample extends IIC_Controller 
{	
	// ------------------------------------------------------------------------
	// Constructor
	// ------------------------------------------------------------------------
	
	function __construct()
	{
		parent::__construct();
		
		// Load model
		$this->load->model('course_model');
		
		// Setup variable
		$this->content_form = 'course_form';
		$this->content_model = $this->course_model;
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
		$_data['module']		= '';
		$_data['controller']	= '';
		$_data['ajax_uri']		= '';
		$_data['template']		= 'backoffice/tpl_module_index';
		$_data['page']			= '';
		$_data['title']			= '';
		
		// Set navigator
		$_data['navigator'] = array();
		array_push($_data['navigator'], array('label' => $this->lang->line('home'),	'link' => 'backoffice'));
		array_push($_data['navigator'], array('label' => 'หลักสูตร',					'link' => '#'));
		array_push($_data['navigator'], array('label' => 'คอร์สเรียน',					'link' => 'institute/course'));
		
		// Set table haed
		$_data['th'] = array();
		array_push($_data['th'], array('axis'=>'name',		'label'=>'ระดับชั้น',	'is_criteria' => TRUE));
		array_push($_data['th'], array('axis'=>'id_group',	'label'=>'สถานะ',	'is_criteria' => FALSE));
		
		// Display
		$this->load->view('backoffice/main', $_data);
	}
	
	// ------------------------------------------------------------------------
	// Function
	// ------------------------------------------------------------------------
	
	/**
	 * Module page for display backoffice module
	 *
	 * @access	public
	 */
	
	function get_sample()
	{

	}
	
	// ------------------------------------------------------------------------
}


/* End of file _sample_controller.php */
/* Location: application/modules/sample/controllers/_sample_controller.php */