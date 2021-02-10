<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	//------------
	//コンストラクタ
	//----------
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('html');
		$this->load->helper('form');
		
		//ログインチェック
		$this->loginflag = 0;
		//メニューの表示
		$this->set['menuflag'] = false;
		$this->set['csrf_token_name'] = $this->security->get_csrf_token_name();
    	$this->set['csrf_token_hash'] = $this->security->get_csrf_hash();

	}
	//--------------------------
	// 新規会員登録
	//-------------
	public function index()
	{
		$this->setView("index");
		
	}

	//ビューファイル表示
	private function setView($view="index"){

		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->load->view('elements/header');
		$this->load->view('signup/'.$view,$this->set);
		$this->load->view('elements/footer');
	}
	

}
