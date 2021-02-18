<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//ログインチェック
		$this->User->loginCheck();
		$this->loginflag = $this->User->loginflag;
		//メニューの表示
		$this->set['menuflag'] = true;
	}
	/**
	*	ログイン前トップ
	*	ログイン後トップ
	*
	*/
	public function index()
	{
		$this->___setView("index");
	}

	/*********
	 * view
	 */
	private function ___setView($view){

		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->set[ 'menu' ] = $this->loginflag;
		$this->set[ 'menu_list' ] = $this->config->config['common_menu'][ 'name' ];
		$this->load->view('elements/header');
		$this->load->view('top/'.$view,$this->set);
		$this->load->view('elements/footer');
	}
}
