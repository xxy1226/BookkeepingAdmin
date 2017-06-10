<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Store_good_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get store_good by StoreID
     */
    function get_store_good($StoreID)
    {
        return $this->db->get_where('stores_goods',array('StoreID'=>$StoreID))->row_array();
    }
        
    /*
     * Get all stores_goods
     */
    function get_all_stores_goods()
    {
        $this->db->order_by('StoreID', 'desc');
        return $this->db->get('stores_goods')->result_array();
    }
        
    /*
     * function to add new store_good
     */
    function add_store_good($params)
    {
        $this->db->insert('stores_goods',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update store_good
     */
    function update_store_good($StoreID,$params)
    {
        $this->db->where('StoreID',$StoreID);
        return $this->db->update('stores_goods',$params);
    }
    
    /*
     * function to delete store_good
     */
    function delete_store_good($StoreID)
    {
        return $this->db->delete('stores_goods',array('StoreID'=>$StoreID));
    }
}