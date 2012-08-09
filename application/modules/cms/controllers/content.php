<?php
class Content extends IIC_Controller 
{	
	// ------------------------------------------------------------------------
	// Constructor
	// ------------------------------------------------------------------------
	
	function __construct()
	{
		parent::__construct();
		
		// Set variable
		$this->module_config['module'] = 'cms';
		$this->module_config['controller'] = 'content';
		$this->module_config['form'] = $this->module_config['controller'].'_form';
		
		// Load model
		$this->load->model($this->module_config['controller'].'_model', 'cms_content_model');
		$this->content_model = $this->cms_content_model;
		
		// Load language
		$this->lang->load(
							$this->module_config['module'], 
							$this->config->item('backoffice_language')
						 );
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
		$_data['module']		= $this->module_config['module'];
		$_data['controller']	= $this->module_config['controller'];
		$_data['ajax_uri']		= 'content';
		$_data['template']		= 'backoffice/tpl_module_index';
		$_data['page']			= 'content_index';
		$_data['title']			= $this->lang->line('content');
		
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
												'label' => $this->lang->line('content'),	
												'link'	=> 'cms/content'
											 ));
		
		// Set table haed
		$_data['th'] = array();
		array_push($_data['th'], array(
										'axis'			=>'date_create',	
										'label'			=>$this->lang->line('date'),	
										'is_criteria'	=> FALSE
									  ));
		array_push($_data['th'], array(
										'axis'			=>'topic',		
										'label'			=>$this->lang->line('topic'),	
										'is_criteria'	=> TRUE
									  ));
		
		// Display
		$this->load->view('backoffice/main', $_data);
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Create content 
	 *
	 * @access	public
	 */
	
	function create_content()
	{
		$_data = $this->input->post();
		
		//header('HTTP/1.0 500 Internal Server Error');
		//print_array($this->input->post());
		//print_array($_POST);
		//print_array($_FILES);
		//exit();
		
		//unset($_data['id']);
		unset($_data['is_delete_file']);
		unset($_data['file_path']);
		unset($_data['file_path_old']);
		
		$this->load->library('upload');
		
		$_data['attach_file'] = array();
		
		foreach($_FILES as $field => $attach_file) 
		{
			if($attach_file['name'] != '')
			{
				$_config['upload_path'] = 'uploads/modules/upload';
				$_config['allowed_types'] = 'jpg|png|gif|pdf';
				$_config['max_filename'] = 10;
				$_config['encrypt_name'] = TRUE;
				$_config['remove_spaces'] = TRUE;
		
 				$this->upload->initialize($_config);
		
				if($this->upload->do_upload($field))
				{
					array_push($_data['attach_file'], $this->upload->data());
					echo 'Upload success '.print_array($this->upload->data());
				}
				else
				{
					echo 'Upload fail :( '.$this->upload->display_errors();
				}
			}
		}
		
		exit();
		
		$this->content_model->create_content($_data); 
	}
	
	// ------------------------------------------------------------------------
}


/* End of file content.php */
/* Location: application/modules/cms/controllers/content.php */