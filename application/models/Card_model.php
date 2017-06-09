<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Card_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get card by CardID
     */
    function get_card($CardID)
    {
        return $this->db->get_where('cards',array('CardID'=>$CardID))->row_array();
    }
        
    /*
     * Get all cards
     */
    function get_all_cards()
    {
        $this->db->order_by('CardID', 'desc');
        return $this->db->get('cards')->result_array();
    }
        
    /*
     * function to add new card
     */
    function add_card($params)
    {
        $this->db->insert('cards',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update card
     */
    function update_card($CardID,$params)
    {
        $this->db->where('CardID',$CardID);
        return $this->db->update('cards',$params);
    }
    
    /*
     * function to delete card
     */
    function delete_card($CardID)
    {
        return $this->db->delete('cards',array('CardID'=>$CardID));
    }
}
