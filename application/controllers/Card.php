<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Card extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Card_model');
    } 

    /*
     * Listing of cards
     */
    function index()
    {
        $data['cards'] = $this->Card_model->get_all_cards();
        
        $data['_view'] = 'card/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new card
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('CardNum','CardNum','integer|max_length[19]|min_length[12]');
		$this->form_validation->set_rules('SecureNum','SecureNum','min_length[3]|max_length[4]');
		$this->form_validation->set_rules('Balance','Balance','decimal|max_length[10]');
		$this->form_validation->set_rules('Limit','Limit','decimal|max_length[10]');
		$this->form_validation->set_rules('Order','Order','is_natural_no_zero');
		$this->form_validation->set_rules('Description','Description','max_length[100]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'UserID' => $this->input->post('UserID'),
				'BankID' => $this->input->post('BankID'),
				'CardTypeID' => $this->input->post('CardTypeID'),
				'ExpMonth' => $this->input->post('ExpMonth'),
				'ExpYear' => $this->input->post('ExpYear'),
				'CardNum' => $this->input->post('CardNum'),
				'SecureNum' => $this->input->post('SecureNum'),
				'Balance' => $this->input->post('Balance'),
				'Limit' => $this->input->post('Limit'),
				'Order' => $this->input->post('Order'),
				'Description' => $this->input->post('Description'),
            );
            
            $card_id = $this->Card_model->add_card($params);
            redirect('card/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();

			$this->load->model('Bank_model');
			$data['all_banks'] = $this->Bank_model->get_all_banks();

			$this->load->model('Card_type_model');
			$data['all_card_types'] = $this->Card_type_model->get_all_card_types();
            
            $data['_view'] = 'card/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a card
     */
    function edit($CardID)
    {   
        // check if the card exists before trying to edit it
        $data['card'] = $this->Card_model->get_card($CardID);
        
        if(isset($data['card']['CardID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('CardNum','CardNum','integer|max_length[19]|min_length[12]');
			$this->form_validation->set_rules('SecureNum','SecureNum','min_length[3]|max_length[4]');
			$this->form_validation->set_rules('Balance','Balance','decimal|max_length[10]');
			$this->form_validation->set_rules('Limit','Limit','decimal|max_length[10]');
			$this->form_validation->set_rules('Order','Order','is_natural_no_zero');
			$this->form_validation->set_rules('Description','Description','max_length[100]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'UserID' => $this->input->post('UserID'),
					'BankID' => $this->input->post('BankID'),
					'CardTypeID' => $this->input->post('CardTypeID'),
					'ExpMonth' => $this->input->post('ExpMonth'),
					'ExpYear' => $this->input->post('ExpYear'),
					'CardNum' => $this->input->post('CardNum'),
					'SecureNum' => $this->input->post('SecureNum'),
					'Balance' => $this->input->post('Balance'),
					'Limit' => $this->input->post('Limit'),
					'Order' => $this->input->post('Order'),
					'Description' => $this->input->post('Description'),
                );

                $this->Card_model->update_card($CardID,$params);            
                redirect('card/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

				$this->load->model('Bank_model');
				$data['all_banks'] = $this->Bank_model->get_all_banks();

				$this->load->model('Card_type_model');
				$data['all_card_types'] = $this->Card_type_model->get_all_card_types();

                $data['_view'] = 'card/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The card you are trying to edit does not exist.');
    } 

    /*
     * Deleting card
     */
    function remove($CardID)
    {
        $card = $this->Card_model->get_card($CardID);

        // check if the card exists before trying to delete it
        if(isset($card['CardID']))
        {
            $this->Card_model->delete_card($CardID);
            redirect('card/index');
        }
        else
            show_error('The card you are trying to delete does not exist.');
    }
    
}
