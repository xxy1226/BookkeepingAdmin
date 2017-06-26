<?php

/**
 * 用于用户的登录和登出
 *
 * @author AndrewXia
 */
class Users extends CI_Controller {

  // 用户登录
  public function login($uri = '') {
    // 查看是否登录
    if ($this->session->userdata('logged_in')) {
      $this->session->set_flashdata('warning_message', '已登录');
      redirect();
    }

    $data['title'] = '登录';
    $data['username'] = FALSE;

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('comps/header', $data);
      $this->load->view('users/login');
      $this->load->view('comps/footer');
    } else {
      // Get username
      $username = $this->input->post('username');
      // Get and encrypt the password
      $password = $this->hash($this->input->post('password'));

      //Login user
      $user_id = $this->User_m->login($username, $password);

      if ($user_id) {
        // Create session
        $show_name = $this->User_m->login2($user_id);
        $user_data = array(
            'user_id' => $user_id,
            'showname' => $show_name,
            'logged_in' => TRUE
        );

        $this->session->set_userdata($user_data);

        // Set message
        $this->session->set_flashdata('success_message', '登录成功');

        redirect(str_replace('-', '/', $uri));
      } else {
        // Set message
        $this->session->set_flashdata('login_failed', '用户名或密码错误，忘记用户名或密码<a href="mailto:andrew.xia.mb@gmail.com?Subject=忘记《记账本》用户名和密码">给管理员发邮件</a>');

        $data['username'] = $username;
        $this->load->view('comps/header', $data);
        $this->load->view('users/login');
        $this->load->view('comps/footer');
      }
    }
  }

  /*
   * Logging user out
   */

  public function logout() {
    // Unset user data
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('showname');
    $this->session->unset_userdata('logged_in');

    $this->session->set_flashdata('alert_message', '退出成功');

    redirect();
  }

  // 用户列表
  public function index() {
    // 查看是否登录
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_flashdata('warning_message', '请先登录');
      redirect('users/login/users');
    }

    $data['users'] = $this->User_m->get_users();
    $data['title'] = '管理-用户';

    $this->load->view('comps/header', $data);
    $this->load->view('users/index');
    $this->load->view('comps/footer');
  }

  public function view($user_id = FALSE) {

    $amount_users = $this->User_m->amount_users();

    // 查看是否登录
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_flashdata('warning_message', '请先登录');
      redirect('users/login/users-view-' . $user_id);
    }

    if ($user_id === FALSE) {
      $this->session->set_flashdata('warning_message', '未指定用户');
      redirect('users');
    }

    if ($user_id < 3 || $user_id > $amount_users) {
      $this->session->set_flashdata('warning_message', '用户不存在');
      redirect('users');
    }

    $data['user'] = $this->User_m->get_users($user_id);

    $data['title_icon'] = 'user.png';
    $data['title'] = '管理-用户';

    $this->load->view('comps/header', $data);
    $this->load->view('users/view');
    $this->load->view('comps/footer');
  }

  /*
   * function to hash a string
   */

  public function hash($string) {
    return hash('sha512', $string . config_item('encryption_key'));
  }

}
