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
		$this->load->model("User");
		$this->config->load('validate');
		$this->load->helper('url');
		
		$this->load->library("form_validation");
		$this->load->library("my_form_validation");
		$this->user = new User();
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
	/*********************
	 * 登録処理
	 */
	public function login_validation(){
		$this->form_validation->set_rules($this->config->config["validate"]);
		
		if($this->form_validation->run()){	//バリデーションエラーがなかった場合の処理
			//ユーザー情報仮登録
			$uniq = uniqid("un_").time();
			if (!$this->User->set($uniq)){
				$this->session->set_flashdata('users', 'データの登録に失敗しました。');
				redirect("/signup");
			}else{
				
				//仮登録メール送信
				$this->User->tempRegistUserSendMail($uniq);

				redirect(site_url('/signup/regist/'));
			}
		}else{							//バリデーションエラーがあった場合の処理
			$this->setView("index");
		}
	}
	/********
	 * 仮登録完了
	 */
	public function regist(){
		$this->setView("regist");
	}
	/******
	 * 登録完了
	 */
	public function registuser($uqid){
		if($uqid){
			$this->User->registUser($uqid);
			$this->setView("registuser");
		}else{
			redirect(site_url('/'));
		}
	}

	//ビューファイル表示
	private function setView($view="index"){

		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->load->view('elements/header');
		$this->load->view('signup/'.$view,$this->set);
		$this->load->view('elements/footer');
	}
	

}
