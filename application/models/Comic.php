<?php

class Comic extends CI_Model {

    function __construct(){
      parent::__construct();
      $this->table = "comics";
      $this->load->database();
      $this->load->library('session');
      $this->error = [];
    }
    //取得
    public function getData($id=""){
      $where = [];
      $where['uid'] = $this->session->userdata('id');
      $where['status'] = 1;
      if($id) $where['id'] = $id;
      $query = $this->db->get_where($this->table,$where)->result();
      return $query;
    }
    //ステータス変更
    public function editDataStatus(){
      $data[ 'open_flag' ] = $this->input->post("open_flag");
      $where['id'] = $this->input->post("id");
      $this->db->update($this->table,$data,$where);
    }
    //書き込み
    public function write($id){
      
      $validate = $this->config->config["comicvalidate"];
      $this->form_validation->set_rules($validate);
      if($this->form_validation->run()){
        $data = [];
        //fileアップロード
        if(!$this->common->upload($this->config,$this->session->userdata('id'))){
          return false;
        }else{
          if(!empty($this->common->filename['headImage'])) $data[ 'head_Image' ] = $this->common->filename['headImage'];
          if(!empty($this->common->filename['announceImage'])) $data[ 'announce_Image' ] = $this->common->filename['announceImage'];
        
        }
        
        
        $data['uid'] = $this->session->userdata('id');
        $data['title'] = $this->input->post("title");
        $data['sale_type'] = $this->input->post("sale_type");
        $data['sale_price'] = $this->input->post("sale_price");
        $data['explain'] = $this->input->post("explain");
        $data['announce'] = $this->input->post("announce");
        $data['open_flag'] = ($this->input->post("open_flag") == "on")?1:0;
        if($id > 0){
          $where['id']=$id;
          $this->db->update($this->table,$data,$where);
          $this->lastid = $id;
        }else{
          $this->db->insert($this->table,$data);
          $this->lastid = $this->db->insert_id();
        }
        
        $this->session->set_flashdata('success','連載データの更新を行いました。');
        return true;
      }else{
        return false;
      }
      
    }
    
    
  }