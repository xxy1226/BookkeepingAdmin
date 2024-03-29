<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Good extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Good_model');
    } 

    /*
     * Listing of goods
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('good/index?');
        $config['total_rows'] = $this->Good_model->get_all_goods_count();
        $this->pagination->initialize($config);

        $data['goods'] = $this->Good_model->get_all_goods($params);
        
        $data['_view'] = 'good/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new good
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('GoodName','GoodName','required|max_length[40]');
		$this->form_validation->set_rules('Brand','Brand','max_length[30]');
		$this->form_validation->set_rules('Weight','Weight','max_length[20]');
		$this->form_validation->set_rules('Pic','Pic','max_length[200]');
		$this->form_validation->set_rules('Description','Description','max_length[255]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'GoodName' => $this->input->post('GoodName'),
				'Brand' => $this->input->post('Brand'),
				'Weight' => $this->input->post('Weight'),
				'Pic' => $this->input->post('Pic'),
				'Description' => $this->input->post('Description'),
            );
            
            $good_id = $this->Good_model->add_good($params);
            redirect('good/index');
        }
        else
        {            
            $data['_view'] = 'good/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a good
     */
    function edit($GoodID)
    {   
        // check if the good exists before trying to edit it
        $data['good'] = $this->Good_model->get_good($GoodID);
        
        if(isset($data['good']['GoodID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('GoodName','GoodName','required|max_length[40]');
			$this->form_validation->set_rules('Brand','Brand','max_length[30]');
			$this->form_validation->set_rules('Weight','Weight','max_length[20]');
			$this->form_validation->set_rules('Pic','Pic','max_length[200]');
			$this->form_validation->set_rules('Description','Description','max_length[255]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'GoodName' => $this->input->post('GoodName'),
					'Brand' => $this->input->post('Brand'),
					'Weight' => $this->input->post('Weight'),
					'Pic' => $this->input->post('Pic'),
					'Description' => $this->input->post('Description'),
                );

                $this->Good_model->update_good($GoodID,$params);            
                redirect('good/index');
            }
            else
            {
                $data['_view'] = 'good/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The good you are trying to edit does not exist.');
    } 

    /*
     * Deleting good
     */
    function remove($GoodID)
    {
        $good = $this->Good_model->get_good($GoodID);

        // check if the good exists before trying to delete it
        if(isset($good['GoodID']))
        {
            $this->Good_model->delete_good($GoodID);
            redirect('good/index');
        }
        else
            show_error('The good you are trying to delete does not exist.');
    }
    
}
