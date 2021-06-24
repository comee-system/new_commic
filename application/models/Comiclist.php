<?php

class Comiclist extends CI_Model {

    function __construct(){
      parent::__construct();
      $this->table = "comiclists";
      $this->comictags = "comictags";
      $this->comicimages = "comicimages";
      $this->view_comics = "view_comics";
      $this->view_comics_cover = "view_comics_cover";
      $this->load->database();
      $this->load->library('session');
      $this->error = [];
    }
    public function editParams($id = ""){
      $validate = $this->config->config["comiclistvalidate"];
      $this->form_validation->set_rules($validate);
      if($this->form_validation->run()){
        $this->db->trans_start();
        $data['comic_id'] = $this->input->post("comic_id");
        $data['title'   ] = $this->input->post("title");
        $data['kana'   ] = $this->input->post("kana");
        $data['caption'   ] = $this->input->post("caption");
        $data['age'   ] = $this->input->post("age");
        $data['read'   ] = $this->input->post("read");
        if($id > 0){
          $where['id']=$id;
          $this->db->update($this->table,$data,$where);
          $this->lastid = $id;
        }else{
          $this->db->insert($this->table,$data);
          $this->lastid = $this->db->insert_id();
        }
       
        //タグの登録
        if($this->setTag($this->lastid)){
          //画像登録
          $this->setImage($this->lastid);
        }else{
          $this->db->trans_rollback();
        }
        $this->session->set_flashdata('success','連載データの更新に成功しました。');
        $this->db->trans_complete();
      }else{
        $this->db->trans_rollback();
        $this->session->set_flashdata('error','連載データの更新に失敗行いました。');
        return false;
      }
    }
    public function setTag($comiclist_id){
      $where[ 'comiclist_id' ] = $comiclist_id;
      $data['status'] = 0;
      $this->db->update($this->comictags,$data,$where);
      $tag = $this->input->post("tag");
      if(!empty($tag)){
        foreach($tag as $key=>$value){
          $set = [];
          $set['comiclist_id'] = $comiclist_id;
          $set['name'] = $value;
          if(!$this->db->insert($this->comictags,$set)){
            return false;
          }
        }
      }
      return true;
    }
    public function setImage($comiclist_id){
      
     //var_dump($_REQUEST,$_FILES);
      $this->common->uploadcomic($this->config,$this->session->userdata('id'));
      $cover = $this->input->post("cover");
      if(!empty($this->common->filename)){
        //$num = count($this->input->post("imageSort"));
        //登録されている画像の数
        $where = [];
        $where['comiclist_id'] = $comiclist_id;
        $imagecount = $this->db->select('count(*) as count')->get_where($this->comicimages,$where)->row();
        $num = $imagecount->count;
        foreach($this->common->filename as $key=>$value){
          $set = [];
          $set['comiclist_id'] = $comiclist_id;
          $set['filename'] = $value;
          $set['number'] = $num;
          $set['cover'] = ($cover == $key)?1:0;
          $this->db->insert($this->comicimages,$set);
          $num++;
        }
      }

      if($cover){
        //表紙の指定
        //画像が選択されているときは上記if文で指定される
        //変更するidの取得
        $where = [];
        $set=[];
        $where[ 'comiclist_id' ] = $comiclist_id;
        $set['cover'] = 0;
        $this->db->update($this->comicimages,$set,$where);
        $where[ 'number' ] = $cover;
        $set['cover'] = 1;
        $this->db->update($this->comicimages,$set,$where);
      }
      
      //画像並び順の指定
      $where = [];
      $where['comiclist_id'] = $comiclist_id;
      $query = $this->db->get_where($this->comicimages,$where)->result();
      $list = [];
      if(count($query)){
        foreach($query as $key=>$value){
          $list[$value->number] = $value;
        }
      }

      $no=0;
      foreach($this->input->post("imageSort") as $key=>$value){
        //変更するidの取得
        $where = [];
        $set=[];
        $id = $list[$key]->id;
        $where[ 'id' ] = $id;
        $set['number'] = $no;
        $this->db->update($this->comicimages,$set,$where);
        $no++;
      }
      
      return true;
    }
    //作品一覧
    public function getComicList($id=""){
      $where = [];
      $where['uid'] = $this->session->userdata('id');
      if($id) $where['comiclist_id'] = $id;
      $query = $this->db->get_where($this->view_comics_cover,$where)->result();
      return $query;
    }
    //画像データ取得
    public function getComicImage($id){
      $where = [];
      $where[ 'status' ] = 1;
      if($id) $where['comiclist_id'] = $id;
      $query = $this->db->order_by('number','ASC')->get_where($this->comicimages,$where)->result();
      return $query;
    }
    //選択している作品が自分のものか確認
    public function checkComicsList($id){
      $where = [];
      $where['uid'] = $this->session->userdata('id');
      $where['comiclist_id'] = $id;
      $query = $this->db->get_where($this->view_comics,$where)->result();
      if(count($query) > 0 ){
        return true;
      }else{
        return false;
      }
    }
    //本一覧取得
    public function getComicListToComicid($comic_id){
      $where = [];
      $where['comic_id'] = $comic_id;
      $data = $this->db->get_where($this->view_comics_cover,$where)->result();
      return $data;
    }


    //作品一覧
    public function getDataList(){
      $where = [];
      $comics = $this->db->join('users', 'view_comics_cover.uid = users.id')->get_where($this->view_comics_cover,$where)->result();
      //足りない分の空配列を追加
      $arr = [];
      if(count($comics)%3 == 1){
        $arr[] = [];
        $arr[] = [];
      }
      if(count($comics)%3 == 2){
        $arr[] = [];
      }
      $comicsdata = array_merge($comics,$arr);
      return $comicsdata;
    }
    
  }