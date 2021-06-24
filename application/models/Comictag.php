<?php

class Comictag extends CI_Model {

    function __construct(){
      parent::__construct();
      $this->table = "comictags";
      $this->load->database();
      $this->load->library('session');
      $this->error = [];
    }
    //取得
    public function getData($id=""){
      $where = [];
      $where['status'] = 1;
      $where['comiclist_id'] = $id;
      $query = $this->db->get_where($this->table,$where)->result();
      return $query;
    }    
    
  }