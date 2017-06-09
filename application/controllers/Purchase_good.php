<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Purchase_good extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Purchase_good_model');
    } 

    /*
     * Listing of purchases_goods
     */
    function index()
    {
        $data['purchases_goods'] = $this->Purchase_good_model->get_all_purchases_goods();
        
        $data['_view'] = 'purchase_good/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new purchase_good
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('OnSale','OnSale','required');
		$this->form_validation->set_rules('UnitPrice','UnitPrice','decimal|required');
		$this->form_validation->set_rules('UNIT','UNIT','decimal');
		$this->form_validation->set_rules('Description','Description','max_length[200]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'OnSale' => $this->input->post('OnSale'),
				'UnitPrice' => $this->input->post('UnitPrice'),
				'UNIT' => $this->input->post('UNIT'),
				'Description' => $this->input->post('Description'),
            );
            
            $purchase_good_id = $this->Purchase_good_model->add_purchase_good($params);
            redirect('purchase_good/index');
        }
        else
        {            
            $data['_view'] = 'purchase_good/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a purchase_good
     */
    function edit($PurchaseID)
    {   
        // check if the purchase_good exists before trying to edit it
        $data['purchase_good'] = $this->Purchase_good_model->get_purchase_good($PurchaseID);
        
        if(isset($data['purchase_good']['PurchaseID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('OnSale','OnSale','required');
			$this->form_validation->set_rules('UnitPrice','UnitPrice','decimal|required');
			$this->form_validation->set_rules('UNIT','UNIT','decimal');
			$this->form_validation->set_rules('Description','Description','max_length[200]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'OnSale' => $this->input->post('OnSale'),
					'UnitPrice' => $this->input->post('UnitPrice'),
					'UNIT' => $this->input->post('UNIT'),
					'Description' => $this->input->post('Description'),
                );

                $this->Purchase_good_model->update_purchase_good($PurchaseID,$params);            
                redirect('purchase_good/index');
            }
            else
            {
                $data['_view'] = 'purchase_good/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The purchase_good you are trying to edit does not exist.');
    } 

    /*
     * Deleting purchase_good
     */
    function remove($PurchaseID)
    {
        $purchase_good = $this->Purchase_good_model->get_purchase_good($PurchaseID);

        // check if the purchase_good exists before trying to delete it
        if(isset($purchase_good['PurchaseID']))
        {
            $this->Purchase_good_model->delete_purchase_good($PurchaseID);
            redirect('purchase_good/index');
        }
        else
            show_error('The purchase_good you are trying to delete does not exist.');
    }
    
}