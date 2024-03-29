<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Purchase_good_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get purchase_good by PurchaseID
     */
    function get_purchase_good($PurchaseID)
    {
        return $this->db->get_where('purchases_goods',array('PurchaseID'=>$PurchaseID))->row_array();
    }
        
    /*
     * Get all purchases_goods
     */
    function get_all_purchases_goods()
    {
        $this->db->order_by('PurchaseID', 'desc');
        return $this->db->get('purchases_goods')->result_array();
    }
        
    /*
     * function to add new purchase_good
     */
    function add_purchase_good($params)
    {
        $this->db->insert('purchases_goods',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update purchase_good
     */
    function update_purchase_good($PurchaseID,$params)
    {
        $this->db->where('PurchaseID',$PurchaseID);
        return $this->db->update('purchases_goods',$params);
    }
    
    /*
     * function to delete purchase_good
     */
    function delete_purchase_good($PurchaseID)
    {
        return $this->db->delete('purchases_goods',array('PurchaseID'=>$PurchaseID));
    }
}
