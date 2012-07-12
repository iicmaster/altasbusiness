<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_model {
	
    public function __construct()
    {
        parent::__construct();
    }
}

class IIC_Model extends MY_Model {
	
    /**
     * Setup database
     */
    
    protected $table = array(
    							'main'		=> 'content'
							);
    
    // ------------------------------------------------------------------------
    
    /**
     * Get content detail
     *
     * @access  public
     * @param   int     $id     
     * @return  array
     */
    
    function get_content($id)
    {       
        $this->db->where('id', $id);
        $_query = $this->db->get($this->table['main']);
        
        return $_query->row_array();
    }   
    
    // ------------------------------------------------------------------------
    
    /**
     * Get content list
     *
     * @access  public
     * @param   int     $limit
     * @param   int     $offset     
     * @return  array
     */
    
    function list_content($limit = 25, $offset = 0, $select = NULL, $where = NULL, $order_by = NULL, $order_direction = 'ASC')
    {
    	// Select
    	if($select != '')
		{
			$this->db->select($select);
		}  
		
    	// Where
    	if(is_array($where))
		{
			$this->db->where($where);
		}   
		
		// Ordering
		if(is_null($order_by))
		{
			$this->db->order_by('id', 'DESC');
		}  
		else
		{
			$this->db->order_by($order_by, $order_direction);
		}
		      
        $_query = $this->db->get($this->table['main'], $limit, $offset);
        
        return $_query->result_array();
    }
    
    // ------------------------------------------------------------------------
    
    /**
     * Search content
     *
     * @access  public
     * @param   string  $keyword        
     * @param   string  $criteria   
     * @return  array
     */
    
    function search_content($keyword, $criteria)
    {   
        $this->db->like($criteria, $keyword);
        $_query = $this->db->get($this->table['main']);
        
        return $_query->result_array();
    }   
    
    // ------------------------------------------------------------------------
    
    /**
     * Create content 
     *
     * @access  public
     * @param   array   $data   
     */
    
    function create_content($data)
    {
        $this->db->insert($this->table['main'], $data);
    }
    
    // ------------------------------------------------------------------------
    
    /**
     * Update content
     *
     * @access  public
     * @param   int     $id     
     * @param   array   $data   
     */
    
    function update_content($id, $data)
    {               
        $this->db->where('id', $id);
        $_query = $this->db->update($this->table['main'], $data);
    }
    
    // ------------------------------------------------------------------------
    
    /**
     * Delete content
     *
     * @access  public
     * @param   array   $id     
     */
    
    function delete_content($id)
    {       
        for($loop = 0; $loop < count($id); $loop++)
        {
            $this->db->where('id', $id[$loop]);
            $this->db->delete($this->table['main']);
        }
    }	
	
	// ------------------------------------------------------------------------
	
	/**
	 * Count content
	 *
	 * @access	public	
	 * @param 	array		$where		
	 * @return	integer
	 */
	
	function count_content($where = NULL)
	{		
		$this->db->select('COUNT(*) AS total');

		if(is_array($where) && count($where) > 0)
		{
			$this->db->where($where);
		}
		
		$_query = $this->db->get($this->table['main']);
		
		$_total = $_query->row_array();
		
		return $_total['total'];
	}	

    // ------------------------------------------------------------------------
}


/* End of file news_model.php */
/* Location: ./application/modules/site/model/news_model.php */