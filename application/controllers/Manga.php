<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//ログインチェック
		$this->loginflag = 0;
		//メニューの表示
		$this->set['menuflag'] = true;

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
	/*******************
	 * 漫画詳細
	 */
	public function detail($id){
		$this->___setView("detail");
	}
	/*******************
	 * 漫画viewer
	 */
	public function viewer($id){
		$this->set[ 'loginflag' ] = $this->loginflag;

		$this->load->view('elements/viewer/header');
		$this->load->view('manga/viewer');
		$this->load->view('elements/viewer/footer');
		
	}
	/*********
	 * view
	 */
	private function ___setView($view){

		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->load->view('elements/header');
		$this->load->view('manga/'.$view,$this->set);
		$this->load->view('elements/footer');
	}


}
