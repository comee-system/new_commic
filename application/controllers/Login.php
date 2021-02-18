<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//ログインチェック
		$this->loginflag = 0;
		//メニューの表示
		$this->set['menuflag'] = false;
		$this->set['csrf_token_name'] = $this->security->get_csrf_token_name();
    	$this->set['csrf_token_hash'] = $this->security->get_csrf_hash();
	}
	/**
	*	ログイン前トップ
	*	ログイン後トップ
	*
	*/
	public function index($id=0)
	{
		$this->___setView("index");
	}
	//ログイン
	public function login_validation(){
		
		if ($this->input->method() == 'post')
		{
    		if($this->User->login()){
				redirect("/mypage");
			}else{
				$this->session->set_flashdata('message', 'ログインに失敗しました');
			}
		}
		$this->session->set_flashdata('message', 'ログインに失敗しました');
		$this->___setView("index");
	}

	/*********
	 * view
	 */
	private function ___setView($view){
		$this->set['csrf_token_name'] = $this->security->get_csrf_token_name();
		$this->set['csrf_token_hash'] = $this->security->get_csrf_hash();
		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->load->view('elements/header');
		$this->load->view('login/'.$view,$this->set);
		$this->load->view('elements/footer');
	}


}
