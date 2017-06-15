<?php

/**
 * Description of Cards
 *
 * @author AndrewXia
 */
class Cards extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Card_m');
  }
  
  // 用于查看自己的卡或所有人的卡
  public function index() {
    // 查看是否登录
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    
    $this->Card_m->get_cards(FALSE, $this->session->userdata('user_id'));
  }
  
  // 用于查看所属银行的所有银行卡
  public function bank_cards($bank_id = FALSE) {
    // 查看是否登录
    if (!$this->session->userdata('logged_in')) {
      redirect('users/login');
    }
    
    // 去掉‘现金银行’
    if ($bank_id === '1') {
      redirect('cards/');
    }
    
    //***
  }
}
