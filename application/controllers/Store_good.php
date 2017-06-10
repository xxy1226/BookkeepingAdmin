<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Store_good extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Store_good_model');
    } 

    /*
     * Listing of stores_goods
     */
    function index()
    {
        // Check login
        if (!$this->session->userdata('adlog')) {
            redirect('user/login');
        }
        
        $data['stores_goods'] = $this->Store_good_model->get_all_stores_goods();
        
        $data['_view'] = 'store_good/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new store_good
     */
    function add()
    {   
        // Check login
        if (!$this->session->userdata('adlog')) {
            redirect('user/login');
        }
        
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
            );
            
            $store_good_id = $this->Store_good_model->add_store_good($params);
            redirect('store_good/index');
        }
        else
        {            
            $data['_view'] = 'store_good/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a store_good
     */
    function edit($StoreID)
    {   
        // Check login
        if (!$this->session->userdata('adlog')) {
            redirect('user/login');
        }
        
        // check if the store_good exists before trying to edit it
        $data['store_good'] = $this->Store_good_model->get_store_good($StoreID);
        
        if(isset($data['store_good']['StoreID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                );

                $this->Store_good_model->update_store_good($StoreID,$params);            
                redirect('store_good/index');
            }
            else
            {
                $data['_view'] = 'store_good/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The store_good you are trying to edit does not exist.');
    } 

    /*
     * Deleting store_good
     */
    function remove($StoreID)
    {
        // Check login
        if (!$this->session->userdata('adlog')) {
            redirect('user/login');
        }
        
        $store_good = $this->Store_good_model->get_store_good($StoreID);

        // check if the store_good exists before trying to delete it
        if(isset($store_good['StoreID']))
        {
            $this->Store_good_model->delete_store_good($StoreID);
            redirect('store_good/index');
        }
        else
            show_error('The store_good you are trying to delete does not exist.');
    }
    
}
