<?php

/**
 * 用于用户的登录和登出
 *
 * @author AndrewXia
 */
class Users extends CI_Controller {

  // 用户登录
  public function login($uri = '') {
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

  /*
   * function to hash a string
   */

  public function hash($string) {
    return hash('sha512', $string . config_item('encryption_key'));
  }

}
