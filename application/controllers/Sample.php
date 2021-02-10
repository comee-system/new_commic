<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

    /**
     * テスト用
     *
     * @return void
     */
    public function index()
    {
        $this->load->view('elements/header');
        $this->load->view('sample/index');
        $this->load->view('elements/footer');
    }

}