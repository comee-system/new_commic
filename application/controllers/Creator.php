<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creator extends CI_Controller {

    /**
     * クリエーター情報、作品一覧、連載作品一覧表示
     *
     * @return void
     */
    public function index()
    {
        $this->load->view('elements/header');
        $this->load->view('creator/index');
        $this->load->view('elements/footer');
    }

    /**
     * 作品画面
     *
     * @return void
     */
    public function manga()
    {
        $this->load->view('elements/header');
        $this->load->view('creator/manga');
        $this->load->view('elements/footer');
    }

    /**
     * 連載画面
     *
     * @return void
     */
    public function serial()
    {
        $this->load->view('elements/header');
        $this->load->view('creator/serial');
        $this->load->view('elements/footer');
    }
}
