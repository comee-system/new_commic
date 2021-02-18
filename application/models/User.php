<?php

class User extends CI_Model {

    protected $table = "users";

    function __construct(){
      parent::__construct();
      $this->load->database();
      //$this->load->library('session');
      $this->load->library('email');
      $this->load->helper('path');
		}
    //ログインチェック
    function loginCheck($redirect = 0){
      $this->loginflag = 0;
      if($this->session->userdata("is_logged_in") == 1){
        $logincheck = true;
      }else{
        $logincheck = false;
      }
      
      if(!$logincheck){
        if($redirect > 0) redirect("/login");
        $this->loginflag = 0;
      }else{
        $this->loginflag = 1;
      }
      return true;
    }


    /*****************
     * ログインの実施
     */
    function login(){
      $where['email'] = $this->input->post("email");
      $where['status'] = 1;
      $where['temp'] = 0;

      $query = $this->db->get_where($this->table,$where);
      $hash = $query->row(1);

      if(!empty($hash) && password_verify($this->input->post("password"),$hash->password)){
        $set = [];
        $set = [
          "id" => $query->row(1)->id,
          "email" => $query->row(1)->email,
		      "is_logged_in" => 1
        ];
        $this->session->set_userdata($set);
				return true;
			}else{
				return false;
			}
    }

    function getData(){
      $query = $this->db->get_where($this->table,["id"=>$this->session->userdata("id")]);
      return $query->first_row();
    }
    
    //ユーザーの仮登録
    function set($uniq){
      $data = [];
      $data[ 'email'    ] = $this->input->post("email");
      $data[ 'password' ] = $this->createpassword();
      $data[ 'nickname' ] = $this->input->post("username");
      $data[ 'birth'    ] = sprintf("%04d-%02d-%02d"
                            ,$this->input->post("year")
                            ,$this->input->post("month")
                            ,$this->input->post("day")
                            );
      $data[ 'timelimit' ] = time()+$this->config->config['timelimit'];
      $data['tempkey'   ] = $uniq;

      if($this->db->insert($this->table, $data)){
        return true;
      }else{
        return false;
      }
    }

    //仮登録メール送信
    public function tempRegistUserSendMail($uniq){

      $url = site_url('/signup/registuser/');
			$to = $this->input->post("email");
			$title = "会員登録手続きのお願い";
			$body = "comeeをご利用いただきありがとうございます。

このメールは会員手続きをされたユーザ様にお送りさせていただいております。
下記URLより会員登録の完了をお願いいたします。
".$url.$uniq."

				";
				

				$this->email->initialize(array(
					'protocol' => 'smtp',
					'smtp_host' => 'smtp.gmail.com',
					'smtp_user' => 'chiba00807@gmail.com',
					'smtp_pass' => 'takahiro1234',
					'smtp_port' => 587,
					'crlf' => "\r\n",
					'newline' => "\r\n"
				));

				$this->email->from('your@example.com', 'Your Name');
				$this->email->to($to);
				$this->email->subject($title);
				$this->email->message($body);
				$this->email->send();

//				echo $this->email->print_debugger();

				log_message('debug', 'デバックメッセージ');
				log_message('debug', $body);

    }
    public function registUser($uniq){
      $query = $this->db->get_where($this->table,[
				'tempkey'=>$uniq,
				'temp'=>1,
				'timelimit > '=>time(),
				])->row();
			if(!empty($query->id)){
				$data = array(
					'temp' => 0,
				);
	
				$this->db->where('id', $query->id);
				$this->db->update($this->table, $data);
			}
			log_message('debug', "【会員登録SQL】".$this->db->last_query());

    }
    
    //誕生日の保存
    public function setBirth($birth){
      return explode("-",$birth);
    }
    /*************************
     * データ更新
     */
    public function editParams(){
      $type = $this->input->post("type");
      $validate = [];
      if($type == "email" ) $validate = $this->config->config["editvalidate"];
      if($type == "password" ) $validate[0] = $this->config->config["validate"][1];
      if($type == "nickname" || $type == "creater" ) $validate[0] = $this->config->config["validate"][2];
      if($type == "birth" ){
        $validate[0] = $this->config->config["validate"][3];
        $validate[1] = $this->config->config["validate"][4];
        $validate[2] = $this->config->config["validate"][5];
      }

      if(count($validate)) $this->form_validation->set_rules($validate);
      if(count($validate) == 0 || $this->form_validation->run()){        
        if($this->editUserData($type)){
          $this->session->set_flashdata('success','データの更新を行いました。');
        }else{
          $this->session->set_flashdata('error','データの更新に失敗しました。');
        }
      }else{
        $this->session->set_flashdata('error',validation_errors());
      }
    }
    //ユーザーデータ更新
    public function editUserData($type){
      $this->db->where('id', $this->session->userdata("id"));
      $data = [];
      if($type == "email") $data['email'] = $this->input->post("email");
      if($type == "password") $data['password'] = $this->createpassword();
      if($type == "username") $data['name'] = $this->input->post("username");
      if($type == "nickname") $data['nickname'] = $this->input->post("nickname");
      if($type == "sns") $data['sns_flag'] = $this->input->post("value");
      if($type == "age") $data['age_flag'] = $this->input->post("value");
      if($type == "birth") $data['birth'] = sprintf("%04d-%02d-%02d",
              $this->input->post("year")
              ,$this->input->post("month")
              ,$this->input->post("day")
            );
      if($type == "creater"){
        $data['nickname'] = $this->input->post("nickname");
        $data['introduce'] = $this->input->post("introduce");
      }
      //画像のアップロード
      if($type == "creater"){
        if(!$this->upload()){
          return false;
        }else{
          $data[ 'bunner' ] = $this->filename['file'];
          $data[ 'icon' ] = $this->filename['iconImage'];
        }
      }
			if($this->db->update($this->table, $data)){
        return true;
      }else{
        return false;
      }
    }
    //画像アップロード
    public function upload(){
      //クリエーター用フォルダ作成
      $this->createFolder();
      //画像保存
      $this->filename = [];
      if(!empty($_FILES)){
        foreach($_FILES as $key=>$value){
          if(!$this->saveImage($key)){
            return false;
          }else{
            //登録に成功したfile名の取得
            $filedata = $this->upload->data();
            $this->filename[$key] = $filedata['file_name'];
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
      $this->load->library('upload', $config);
      if($this->upload->do_upload($filename)){
        return true;
      }else{
        return false;
      }
    }
    public function createFolder(){
        $path = set_realpath(".".$this->config->config['imagepath']);
        $this->dir = $path.$this->session->userdata("id")."/";
        if(!file_exists($this->dir)) mkdir($this->dir,0777,true);
    }
    public function createpassword(){
      return password_hash($this->input->post("password") , PASSWORD_DEFAULT);
    }
	}

	?>
