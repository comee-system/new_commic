<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creater extends CI_Controller {
	//------------
	//コンストラクタ
	public function __construct()
	{
		parent::__construct();
		
		//ログインチェック
		$this->loginflag = 0;
		//メニューの表示
		$this->set['menuflag'] = false;

	}
	//--------------------------
	// クリエーター画面
	//-------------
	public function index($id)
	{
		$this->id = $id;
		$this->setView("index");
		
	}
	
	
	//ビューファイル表示
	private function setView($view="index"){

		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->set[ 'id'        ] = $this->id;
		$this->set[ 'creater'   ] = 1;
		$this->load->view('elements/header');
		$this->load->view('mypage/'.$view,$this->set);
		$this->load->view('elements/footer');
	}

	
    
}
