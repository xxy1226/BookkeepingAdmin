<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_m
 *
 * @author AndrewXia
 */
class User_m extends CI_Model {

// function to log user in
  public function login($username, $password) {
// Validate
    $this->db->where('UserName', $username);
    $this->db->where('Password', $password);

    $result = $this->db->get('users');

    if ($result->num_rows() == 1) {
      return $result->row(0)->UserID;
    } else {
      return FALSE;
    }
  }

// function to log user in
  public function login2($user_id) {
// Validate
    $this->db->where('UserID', $user_id);

    $result = $this->db->get('users');

    return $result->row(0)->ShowName;
  }

  // 搜索用户
  public function get_users($user_id = FALSE) {
    if ($user_id === FALSE) {
      $this->db->order_by('UserID');
      return $this->db->get('users')->result_array();
    }

    return $this->db->get_where('users', array('UserID' => $user_id))->row_array();
  }

  public function amount_users() {
    return $this->db->get('users')->num_rows();
  }
}
