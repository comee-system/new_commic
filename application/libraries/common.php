<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class common  {
	public function __construct() {
		$this->CI =& get_instance();
		
	}

   
	//画像アップロード
	public function upload($config,$userid){
		$this->config = $config;
		$this->userdata['id'] = $userid;
		//クリエーター用フォルダ作成
		$this->createFolder();
		//画像保存
		$this->filename = [];
		if(!empty($_FILES)){
			foreach($_FILES as $key=>$value){
				if($value['name']){
					if(!$this->saveImage($key)){
							
					}else{
						//登録に成功したfile名の取得
						$filedata = $this->CI->upload->data();
						$this->filename[$key] = $filedata['file_name'];
					}
				}
			}
		}
		return true;
	}
	public function saveImage($filename){
		$config['upload_path'] = $this->dir;
		$config['allowed_types'] = $this->config->config['allowed_types'];
		$config['max_size']	= $this->config->config['max_size'];
		$config['encrypt_name'] = true;
		$this->CI->load->library('upload', $config);
		
		if($this->CI->upload->do_upload($filename)){
			return true;
		}else{
			return false;
		}
	}
	public function createFolder(){

		$path = set_realpath(".".$this->config->config['imagepath']);
		$this->dir = $path.$this->userdata["id"]."/";
		if(!file_exists($this->dir)) mkdir($this->dir,0777,true);
	}
    
	


}