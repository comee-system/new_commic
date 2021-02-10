<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // 拡張コントローラ：ログイン認証チェックを行い、未ログインならばログイン画面へ遷移させる
    class MY_Controller extends CI_Controller {
        public function __construct() {
            parent::__construct();

            //URLヘルパーロード
            $this->load->helper('url');
            $this->load->library('session');
            $config = array(
                'sess_match_ip' => TRUE,
                'sess_expiration' => 60000,
            );
            $this->load->library('session', $config);
            
            
            // 認証済みでない
            if ($this->session->userdata('login') != 'on') {
                //ログイン画面に移動
                redirect(base_url().'Auth/login/');
            }
            
        }

        
    }