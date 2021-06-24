<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//ログインチェック
		$this->User->loginCheck();
		$this->loginflag = $this->User->loginflag;			
		//メニューの表示
		$this->set['menuflag'] = true;
		$this->view_comics_cover = "view_comics_cover";
		$this->load->model('Comicimage');
		$this->Comicimage = new Comicimage();

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
		$where = [];
		$where['comiclist_id'] = $id;
		$detail = $this->db->get_where($this->view_comics_cover,$where)->row(1);
		if(empty($detail->uid)){
			//ユーザー情報が取得できないためエラーページの表示
			redirect('/error/');
			exit();
		}
		$user = $this->User->getData($detail->uid);
		$tag = $this->Comictag->getData($detail->comiclist_id);
		//一覧
		$comiclist = $this->Comiclist->getComicListToComicid($detail->comic_id);
		//バナー
		$bunner = "/assets/creater/21/".$detail->head_image;

		$this->set[ 'detail'    ] = $detail;
		$this->set[ 'user'      ] = $user;
		$this->set[ 'tag'       ] = $tag;
		$this->set[ 'comiclist' ] = $comiclist;
		$this->set[ 'bunner' ] = $bunner;
		$this->___setView("detail");
	}
	
	/*******************
	 * 漫画viewer
	 */
	public function viewer($id){
		$where = [];
		$where['comiclist_id'] = $id;
		$detail = $this->db->get_where($this->view_comics_cover,$where)->row(1);
		$user = $this->User->getData($detail->uid);
		$this->set[ 'user'   ] = $user;
		$this->set[ 'detail' ] = $detail;
		$this->set['id'      ]=$id;
		$this->set[ 'loginflag' ] = $this->loginflag;
		$comicimages = $this->Comicimage->getViewData($id);
		$this->set['images'] = $comicimages;
		//漫画の一覧データ
		$this->set['comics'] = [];
		if(count($comicimages)){
			foreach($comicimages as $key=>$value){
				$this->set['comics'][$value->number] = $this->config->config['imagepath']."/".$value->uid."/comic/".$value->filename; 
			}
		}
		$this->load->view('elements/viewer/header');
		$this->load->view('manga/viewer',$this->set);
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
