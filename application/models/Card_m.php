<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bank_card_m
 *
 * @author AndrewXia
 */
class Card_m extends CI_Model {
  /*
   * 用于查询银行卡
   */
  public function get_cards($BankID = FALSE, $UserID = FALSE) {
    // 选择所属银行
    if (!$BankID) {
      $this->db->where('BankID', $BankID);
    }
    
    // 选择所属用户
    if (!$UserID) {
      $this->db->where('UserID', $UserID);
    }
    
    //*** 去掉现金选项
  }
}
