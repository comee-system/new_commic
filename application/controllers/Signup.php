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
	public function login_validation(){
		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "メール", "required|trim|valid_email"
		,[
			"required"=>"メールアドレスは必須です。"
			,"valid_email"=>"メールアドレスの形式に誤りがあります。"
		
		]);	
		$this->form_validation->set_rules("password", "パスワード", "required|trim|min_length[8]|callback__alpha_numeric_symbol"
		,[
			"required"=>"パスワードは必須です。"
			,"min_length"=>"パスワードは8文字以上で入力してください。"
			
		]);	

		$this->form_validation->set_rules("username", "ユーザーネーム", "required|trim"
		,[
			"required"=>"ユーザーネームは必須です。"
		]);	

		$this->form_validation->set_rules("year", "生年月日", "required|trim|callback__setYear"
		,[
			"required"=>"生年月日は必須です。"
		]);	
		$this->form_validation->set_rules("month", "生年月日", "required|trim|callback__setMonth"
		,[
			"required"=>"生年月日は必須です。"
		]);	
		$this->form_validation->set_rules("day", "生年月日", "required|trim|callback__setDay"
		,[
			"required"=>"生年月日は必須です。"
		]);	
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run()){	//バリデーションエラーがなかった場合の処理

			/*
			echo "OK";
			
			echo password_hash($this->input->post("password") , PASSWORD_DEFAULT);
			//認証サンプル
			echo "<br />";
			if(password_verify($this->input->post("password"),password_hash($this->input->post("password") , PASSWORD_DEFAULT))){
				echo "認証OK";
			}else{
				echo "NG";
			}
			exit();
			if ($this->user_model->set_user()){
				
			}
			*/
			redirect("/signup");
		}else{							//バリデーションエラーがあった場合の処理

			echo "NG";
			$this->setView("index");
		}
	}
	//半角英数字チェック
	public function _alpha_numeric_symbol($str){
		if (preg_match("/^[a-zA-Z0-9]+$/",$str)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_alpha_numeric_symbol', '%s [' . $str . ']は半角英数記号で入力してください。');
			return FALSE;
		}
	}
	//生年月日
	public function _setYear($year){$this->year = $year;}
	public function _setMonth($month){$this->month = $month;}
	public function _setDay($day){
		$year = $this->year;
		$month = $this->month;
		if( !empty($year) && checkdate( $month, $day, $year ) ){
			return TRUE;	
		}else{
			$this->form_validation->set_message('_setDay', '生年月日に誤りがあります。');
			return FALSE;
		}
		return false;
	}


	//ビューファイル表示
	private function setView($view="index"){

		$this->set[ 'loginflag' ] = $this->loginflag;
		$this->load->view('elements/header');
		$this->load->view('signup/'.$view,$this->set);
		$this->load->view('elements/footer');
	}
	

}
