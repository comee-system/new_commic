<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    /**
     * 検索に合致した作品一覧
     * 「作品タイトル」「連載タイトル」「ユーザネーム」「キャプション」「タグ」で一致・部分一致検索する
     *
     * @return void
     */
    public function index()
    {
        $this->load->view('elements/header');
        $this->load->view('search/index');
        $this->load->view('elements/footer');
    }
}
