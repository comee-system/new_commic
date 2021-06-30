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
		$this->set['feesetting'] = $this->config->config['feeSetting'];

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
		//作品一覧データ取得
		$comiclist = $this->Comiclist->getComicList();
		$this->set[ 'comiclist' ] = $comiclist;
		$this->set["bunner"] = $this->User->displayUserBunner();
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
		$comic = $this->Comic->getData();
		$this->set['comic'] = $comic;
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
	public function write($id=""){
		$this->set['id'] = $id;
		$comic = $this->Comic->getData($id);
		$this->set['comic'] = (!empty($comic))?$comic[0]:"";
		$this->setView("write");
	}

	/****************
	 * 連載作成
	 */
	public function write_add($id=""){
		$this->set['id'] = $id;
		$comic = $this->Comic->getData($id);
		$this->set['comic'] = (!empty($comic))?$comic[0]:"";
		if($this->Comic->write($id)){
			$this->common->resize($this->Comic->lastid,$this->userdata);
			redirect(base_url().'mypage/serial/');
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
	public function post($id = ""){
		//連載が登録されていないときはエラーメッセージを表示する		
		//連載データを取得
		$comic = $this->Comic->getData();
		$this->setPost($id);
		$this->set['comic'] = $comic;
		$this->set['id'] = $id;
		$this->setView("post");
	}
	public function conf($id=""){
		//連載データを取得
		$comic = $this->Comic->getData();
		$this->set['comic'] = $comic;
		$this->set['id'] = $id;
		
		if($this->Comiclist->editParams($id)){
			
		}else{
			
			$this->setPost($id);
			$this->setView("post");
		}
	}
	public function setPost($id){
		$comiclist[0] = [];
		$comictag = [];
		$comicimage = [];
		if($this->Comiclist->checkComicsList($id)){
			$comiclist = $this->Comiclist->getComicList($id);
			$comictag = $this->Comictag->getData($id);
			$comicimage = $this->Comiclist->getComicImage($id);
		}else{
		//	redirect(base_url().'mypage/');
		}
		$this->set['comiclist'] = $comiclist[0];
		$this->set['comictag'] = $comictag;
		$this->set['comicimage'] = $comicimage;

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
	//連載データステータス変更
	public function serialStatusAjax(){
		$this->Comic->editDataStatus();
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
