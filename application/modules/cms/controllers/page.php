<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MX_Controller 
{	
	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('page_model');
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Mian page
	 *
	 * @access	public
	 */
	function index()
	{
		echo 'CMS => Page => index';
		//$this->load->view('index');
	}	
	
	// ------------------------------------------------------------------------
	
	/**
	 * Get content list
	 *
	 * @access	public
	 * @return	json
	 */
	function get_content_list()
	{
		echo json_encode($this->page_model->get_content_list());
	}
	
	// ------------------------------------------------------------------------
}


/* End of file page.php */
/* Location: application/modules/cms/controllers/cms.php */