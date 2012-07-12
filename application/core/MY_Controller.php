<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

    public function MY_Controller()
    {
        parent::MX_Controller();
    }
	
    public function __construct()
    {
        parent::__construct();
    }
}

class IIC_Controller extends MX_Controller {
	
	protected $content_form;
	protected $content_model;
	
	// ------------------------------------------------------------------------
	// Constructor
	// ------------------------------------------------------------------------
	
	function __construct()
	{
		parent::__construct();
		
		// Load language
		$this->config->load('../../modules/backoffice/config/config');
		$this->lang->load(
							'../../../modules/backoffice/language/'.
							$this->config->item('backoffice_language').
							'/backoffice', $this->config->item('backoffice_language')
						 );
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Get content
	 *
	 * @access	public
	 * @param 	integer	$id
	 * @return	json
	 */
	
	function get_content($id)
	{
		return json_encode($this->content_model->get_content($id));
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Get form
	 *
	 * @access	public
	 * @param 	integer	$id
	 * @return	html
	 */
	
	function get_content_form($id = NULL)
	{
		$_data = ($id != NULL) ? $this->content_model->get_content($id) : NULL;	
		
		$this->load->view($this->content_form, $_data);	
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Get content list
	 *
	 * @access	public
	 * @return	json
	 */
	  
	function list_content($limit = 25, $offset = 0)
	{		
		echo json_encode($this->content_model->list_content($limit, $offset));	
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Search content list
	 *
	 * @access	public
	 * @return	json
	 */
	  
	function search_content()
	{		
		$_data = $this->input->post();
		
		echo json_encode($this->content_model->search_content($_data['keyword'], $_data['criteria']));	
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
		
		unset($_data['id']);
				 
		$this->content_model->create_content($_data);
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Update content 
	 *
	 * @access	public
	 */
	
	function update_content()
	{
		$_data = $this->input->post();
		$_id = $_data['id'];
		
		unset($_data['id']);
				 
		$this->content_model->update_content($_id, $_data);
		
		// Get content data for update session
		$_content = $this->content_model->get_detail_by_contentname($this->input->post('contentname'));		
		
		// Update content session
		$this->content_model->set_session($_content);	
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Delete content 
	 *
	 * @access	public
	 */
	 
	function delete_content()
	{
		$this->content_model->delete_content($this->input->post('id'));
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Get content selecbox option 
	 *
	 * @access	public
	 * @param 	string	$selected	
	 * @return	mixed
	 */
	
	function get_content_selectbox_option($selected = NULL)
	{
		$_option = '';
		$_group = $this->content_model->list_content(25, 0, NULL, 'name');
		
		foreach($_group as $_data)
		{
			$_selected = ($_data['id'] == $selected) ? ' selected="selected"' : '';
			$_option .= '<option value="'. $_data['id'].'"'.$_selected.'>'.$_data['name'].'</option>';
		}
		
		return $_option;
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Module page for display backoffice module
	 *
	 * @access	public
	 */
	
	function get_menu()
	{
		$this->load->view('menu');
	}
	
	// ------------------------------------------------------------------------
}


/* End of file IIC_Controller.php */
/* Location: ./system/core/IIC_Controller.php */