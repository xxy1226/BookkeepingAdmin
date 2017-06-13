<?php

/**
 * Description of Banks
 *
 * @author AndrewXia
 */
class Banks extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Bank_m');
    $this->load->model('Bank_card_m');
  }
  
  public function index() {
    // check user login
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    
    $data['title'] = '管理-银行';
    
    $data['banks'] = $this->Bank_m->get_bank();
    
    $this->load->view('comps/header', $data);
    $this->load->view('banks/index');
    $this->load->view('comps/footer');
  }
  
  public function edit($bank_id = FALSE) {
    // check user login
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    
    if ($bank_id === FALSE) {
      redirect('banks');
    }
    
    $data['bank'] = $this->Bank_m->get_bank($bank_id);
    
    $data['title'] = '修改银行' . $data['bank']['BankName'];
    
    $this->load->view('comps/header', $data);
    $this->load->view('banks/edit');
    $this->load->view('comps/footer');
  }
  
  public function update() {
    // check user login
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    
    $this->Bank_m->update_bank();
    
    $this->session->set_flashdata('bank_updated', '银行更新成功。');
    
    redirect(banks);
  }
}
