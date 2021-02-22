<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {
	//------------
	//コンストラクタ
	public function __construct()
	{
		parent::__construct();
		$this->config->load('validate');
		$this->load->library("form_validation");
		$this->load->library("my_form_validation");
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->library('session');
		//ログインチェック
		$this->User->loginCheck(1);
		$this->loginflag = $this->User->loginflag;
		//メニューの表示
		$this->set['menuflag'] = false;
		//ユーザー情報取得
		$this->userdata = $this->User->getData();
		$this->set["user"] = $this->userdata;
		$this->set['pageType'] = "";

	}
	//----------------------
	//ログアウト
	//----------------------
	public function logout(){
		$this->session->sess_destroy();
		redirect ("/login");
	}
	//--------------------------
	// マイページトップ
	//-------------
	public function index()
	{
		
		$this->setView("index");
		
	}
	/********************
	 * アカウント設定
	 */
	public function account(){
		//生年月日
		$this->set['birth'] = $this->User->setBirth($this->userdata->birth);
		$this->set["bunner"] = $this->User->displayUserBunner();
		$this->set["icon"] = $this->User->displayUserIcon();
		$this->setView("account");
	}
	/********************
	 * クリエーター設定
	 */
	public function creater(){
		$this->set["bunner"] = $this->User->displayUserBunner();
		$this->set["icon"] = $this->User->displayUserIcon();
		
		$this->setView("creater");
	}

	/************************
	 * 連載一覧
	 */
	public function serial(){
		$this->setView("serial");
	}
	/**************
	 * ダッシュボード
	 */
	public function dashboards(){
		$this->setView("dashboards");
	}
	/*********************
	 * 連載をつくる
	 */
	public function write(){
		$this->set['feesetting'] = $this->config->config['feeSetting'];
		$this->setView("write");
	}
	/****************
	 * 連載作成
	 */
	public function write_add(){
		if($this->Comic->write()){
			redirect(base_url().'mypage/write/'.$this->Comic->lastid);
		}else{
			$this->setView("write");
		}
	}

	/**********************
	 * 連載編集
	 */
	public function edit(){
		$this->setView("edit");
	}
	/**********************
	 * フォロー一覧
	 */
	public function follow(){
		$this->setView("follow");
	}
	/********************
	 * 投稿する
	 */
	public function post(){

		$this->setView("post");
	}
	public function conf(){

		echo "OK";
	}
	/**********************
	 * ユーザ情報編集
	 * クリエーター情報編集
	 */
	public function editParams($type = ""){
		$this->User->editParams();
		if($type == "creater"){
			redirect(base_url().'mypage/creater/');
		}else{
			redirect(base_url().'mypage/account/');
		}
	}


	public function editParamAjax(){
		$this->User->editParams();
		exit();
	}
	//ビューファイル表示
	private function setView($view="index"){

		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->load->view('elements/header');
		$this->load->view('mypage/'.$view,$this->set);
		$this->load->view('elements/footer');
	}

}
