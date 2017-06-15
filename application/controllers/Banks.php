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
  }

  public function index() {
    // 查看是否登录
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login/banks');
    }

    $data['title'] = '管理-银行';

    $data['banks'] = $this->Bank_m->get_banks();

    $this->load->view('comps/header', $data);
    $this->load->view('banks/index');
    $this->load->view('comps/footer');
  }

  public function edit($bank_id = FALSE) {
    // 查看是否登录
    if (!$this->session->userdata('logged_in')) {
      if (!$bank_id || $bank_id === '1') {
        redirect('users/login/banks');
      } else {
        redirect('users/login/banks-edit-' . $bank_id);
      }
    }

    if ($bank_id === FALSE) {
      redirect('banks');
    }

    if ($bank_id === '1') {
      $this->session->set_flashdata('alert_message', '银行更新成功。');

      redirect('banks');
    }

    $data['bank'] = $this->Bank_m->get_banks($bank_id);

    $data['title'] = '修改银行' . $data['bank']['BankName'];

    $this->load->view('comps/header', $data);
    $this->load->view('banks/edit');
    $this->load->view('comps/footer');
  }

  public function update() {
    // 查看是否登录
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }

    $this->Bank_m->update_bank();

    $this->session->set_flashdata('success_message', '银行更新成功。');

    redirect(banks);
  }

}
