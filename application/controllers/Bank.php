<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bank extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bank_model');
    } 

    /*
     * Listing of banks
     */
    function index()
    {
        // Check login
        if (!$this->session->userdata('adlog')) {
            redirect('user/login');
        }
        
        $data['banks'] = $this->Bank_model->get_all_banks();
        
        $data['_view'] = 'bank/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new bank
     */
    function add()
    {   
        // Check login
        if (!$this->session->userdata('adlog')) {
            redirect('user/login');
        }
        
        $this->load->library('form_validation');

		$this->form_validation->set_rules('BankName','BankName','required|is_unique[banks.BankName]|max_length[40]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'BankName' => $this->input->post('BankName'),
            );
            
            $bank_id = $this->Bank_model->add_bank($params);
            redirect('bank/index');
        }
        else
        {            
            $data['_view'] = 'bank/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a bank
     */
    function edit($BankID)
    {   
        // Check login
        if (!$this->session->userdata('adlog')) {
            redirect('user/login');
        }
        
        // check if the bank exists before trying to edit it
        $data['bank'] = $this->Bank_model->get_bank($BankID);
        
        if(isset($data['bank']['BankID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('BankName','BankName','required|is_unique[banks.BankName]|max_length[40]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'BankName' => $this->input->post('BankName'),
                );

                $this->Bank_model->update_bank($BankID,$params);            
                redirect('bank/index');
            }
            else
            {
                $data['_view'] = 'bank/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The bank you are trying to edit does not exist.');
    } 

    /*
     * Deleting bank
     */
    function remove($BankID)
    {
        // Check login
        if (!$this->session->userdata('adlog')) {
            redirect('user/login');
        }
        
        $bank = $this->Bank_model->get_bank($BankID);

        // check if the bank exists before trying to delete it
        if(isset($bank['BankID']))
        {
            $this->Bank_model->delete_bank($BankID);
            redirect('bank/index');
        }
        else
            show_error('The bank you are trying to delete does not exist.');
    }
    
}