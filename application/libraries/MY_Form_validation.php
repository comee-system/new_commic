<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

	public function __construct() {
		parent::__construct();
		
        $this->year="";
        $this->month="";
        $this->day="";
	}

	//自身のメールアドレスを変更する
	public function _checkEmailMyself($str){
		$query = $this->CI->db
			->get_where('users',[
				"id !="=>$this->CI->session->userdata("id")
				,'email'=>$str
				])
			->first_row();
		
		if(empty($query)){
			return true;
		}
		return false;
	}
   
    //半角英数字チェック
	public function _alpha_numeric_symbol($str){
		if (preg_match("/^[a-zA-Z0-9]+$/",$str)) {
			return TRUE;
		} else {
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
		//	$this->form_validation->set_message('_setDay', '生年月日に誤りがあります。');
			return FALSE;
		}
		return false;
	}


}