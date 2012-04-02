<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends MX_Controller 
{	
	// ------------------------------------------------------------------------
	// Constructor
	// ------------------------------------------------------------------------
	
	function __construct()
	{
		parent::__construct();
	}
	
	// ------------------------------------------------------------------------
	
	/**
	 * Mian page
	 *
	 * @access	public
	 */
	
	function index()
	{
		//echo '555';
		$this->load->view('index');
	}	
}


/* End of file cms.php */
/* Location: application/modules/cms/controllers/cms.php */