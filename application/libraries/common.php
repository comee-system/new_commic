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





	//漫画画像アップロード
	public function uploadcomic($config,$userid){
		$this->config = $config;
		$this->userdata['id'] = $userid;
		//クリエーター用フォルダ作成
		$this->createComicFolder();
		//画像保存
		$this->filename = [];
		//var_dump($_FILES);
		$files = $_FILES['uploadFile'];		
		if(!empty($_FILES)){
			
			foreach($files['name'] as $key=>$image){
				if($image){
					$_FILES['images']['name']= $files['name'][$key];
					$_FILES['images']['type']= $files['type'][$key];
					$_FILES['images']['tmp_name']= $files['tmp_name'][$key];
					$_FILES['images']['error']= $files['error'][$key];
					$_FILES['images']['size']= $files['size'][$key];

					$config = [];
					$config['upload_path'] = $this->dirComic;
					$config['allowed_types'] = $this->config->config['allowed_types'];
					$config['max_size']	= $this->config->config['max_size'];
					$config['encrypt_name'] = true;
					$config['file_name'] = $image;
					$this->CI->load->library('upload', $config);
					//$this->CI->upload->initialize($config);
					$this->CI->upload->do_upload('images');
					
					if(!$this->CI->upload->data()){
							
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
	public function saveComicImage($filename){

		$config['upload_path'] = $this->dirComic;
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
	public function createComicFolder(){
		$path = set_realpath(".".$this->config->config['imagepath']);
		$this->dirComic = $path.$this->userdata["id"]."/comic/";
		if(!file_exists($this->dirComic)) mkdir($this->dirComic,0777,true);
	}


    




	//画像リサイズ
	public function resize($id,$userdata){

		$query = $this->CI->db->get_where("comics",[
			'id'=>$id,
		])->row();
		//ヘッダとアナウンス
		$array = [
			$query->head_image,
			$query->announce_image
		];

		foreach($array as $value){
			$config = [];
			if($value){
				//画像のリサイズ
				$config['image_library'] = 'gd2';
				$human = "assets/creater/".$userdata->id."/".$value;
				$human2 = "assets/creater/".$userdata->id."/min_".$value;
				//$imagesize = getimagesize($human);
				$config['source_image'] = $human;
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = TRUE;
				//$config['width'] = 175;
				$config['height'] = 80;
				$config['new_image'] = $human2;
				$this->CI->load->library('image_lib', $config);
				$this->CI->image_lib->initialize($config);
				$this->CI->image_lib->resize();
				$this->CI->image_lib->clear();
			}
		}
	}


}