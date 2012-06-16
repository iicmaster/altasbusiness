<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MX_Controller 
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
	    $this->load->model('promotion_model');
        $this->load->model('product_model');
        $this->load->model('news_model');
        
        $data['promotion'] = $this->promotion_model->list_content();
        $data['product'] = $this->product_model->list_new_content(3);
        $data['news'] = $this->news_model->list_content(2);
        
		$this->load->view('index', $data);
	}	
    
    // ------------------------------------------------------------------------
    
    /**
     * Product page
     *
     * @access  public
     */
    
    function product()
    {
        $this->load->model('product_model');
        
        $data['product'] = $this->product_model->list_content();
        
        $this->load->view('product', $data);
    }   
    
    // ------------------------------------------------------------------------
    
    /**
     * Product detail page
     *
     * @access  public
     */
    
    function product_detail()
    {
        $this->load->model('product_model');
        
        $data['product'] = $this->product_model->get_content($this->input->post('id'));
        
        $this->load->view('service', $data);
    }   
    
    // ------------------------------------------------------------------------
    
    /**
     * Contact page
     *
     * @access  public
     */
    
    function contact()
    {
        $this->load->view('contact_us', $data);
    }   
    
    // ------------------------------------------------------------------------
}


/* End of file cms.php */
/* Location: application/modules/site/controllers/site.php */