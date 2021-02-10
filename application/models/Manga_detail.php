<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manga_detail extends CI_Model {

    function __construct(){
      parent::__construct();
      $this->load->model("Manga_detail");
      $this->load->database();
      $this->load->library('session');
    }




    /**********************
     * 画像データテーブルの登録
     * type:詳細画面から利用：detail
     */
    public  function __setImageData($lastid,$type = ""){
      //登録の前にデータの削除を行う
      $where = [];
      $where[ 'manga_detail_id' ] = $lastid;


      if(!$this->db->delete('manga_detail_image',$where)){
        return false;
      }

      $mangaDetail = $this->input->post("mangaDetail");
      if(isset($mangaDetail) && count($mangaDetail)){
        $i=1;
        foreach($mangaDetail as $key=>$value){
          
          $size = filesize("./".$value);
          
          $file = basename($value);
          $data = [];
          $data[ 'manga_detail_id' ] = $lastid;
          $data[ 'filename' ] = $file;
          $data[ 'image_size' ] = $size;
          $data[ 'number' ] = $i;
          
          $data[ 'regist_ts' ] = date("Y-m-d H:i:s");
          $flg = $this->db->insert('manga_detail_image', $data);
          $i++;
          if(!$flg){
            return false;
          }

        }


        //削除用のデータ取得
      
        $this->db->select('id,filename');
        $query = $this->db->get_where('manga_detail_image', $where);
        $deletelist = $query->result();
        $delete = [];
        foreach($deletelist as $value){
          $delete[] = $value->filename;
        }

        //余分ファイルの削除
        //現在のファイルと削除ファイルの比較を行い、
        //余分なものを削除する
        $glob = glob(D_IMAGE_LISTS.$lastid."/*");
        foreach($glob as $key=>$value){
          if(
            !preg_match("/".D_S."/",$value) &&
            !preg_match("/".D_XS."/",$value) 
            ){
              $basename = basename($value);
              if(!in_array($basename,$delete,true) ){
                $delfile = D_IMAGE_LISTS.$lastid."/".$basename;
                unlink($delfile);
                $delfile = D_IMAGE_LISTS.$lastid."/".D_S.$basename;
                unlink($delfile);
                $delfile = D_IMAGE_LISTS.$lastid."/".D_XS.$basename;
                unlink($delfile);
              }

          }

        }

      }
      return true;
      
    }
    public function ___getMangaDetail($id = 0){

      if($id < 1){
        return array();
      }
      $where = array(
        'manga_detail_id'=>$id
      );
      $this->db->order_by('number');
      $query = $this->db->get_where("manga_detail_image",$where);
      $result = $query->result();
      return $result;
    }

    /**************************
     * 漫画データ取得
     */
    public function __getMangaData($id){
      $where = array(
          'id' => $id
					,'status' => 1
      );
      $query = $this->db->get_where("manga_detail",$where);
      $result = $query->result();

      return $result;
    }
        /*******************
     * 漫画ステータス変更
     */
    public function __editMangaStatus($id){

      $where = [];
      $where[ 'id' ] = $id;
      $data['status'] = 0;
      $flg = $this->db->update('manga_detail', $data,$where);
      return $flg;
    }


      

  }