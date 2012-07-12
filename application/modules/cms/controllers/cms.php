<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends IIC_Controller 
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
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Mian page
	 *
	 * @access	public
	 */
	
	function index()
	{
		$this->load->view('index');
	}	
}


/* End of file cms.php */
/* Location: application/modules/cms/controllers/cms.php */