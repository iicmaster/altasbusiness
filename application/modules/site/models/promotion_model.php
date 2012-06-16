<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Promotion_model extends CI_Model 
{
    /**
     * Setup database
     */
    
    protected $table = array('main' => 'tb_promotion');
    
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
     * Get content list
     *
     * @access  public
     * @param   int     $limit
     * @param   int     $offset     
     * @return  array
     */
    
    function list_content($limit = 25, $offset = 0)
    {           
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
        $this->db->like($_criteria, $keyword);
        $_query = $this->db->get($this->table['main']);
        
        return $_query->result_array();
    }   
    
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
        $_query = $this->db->get($this->table['user']);
        
        return $_query->row_array();
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
}


/* End of file promotion_model.php */
/* Location: ./application/modules/site/model/promotion_model.php */