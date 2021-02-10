<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {

    /**
     * 支援画面
     *
     * @return void
     */
    public function support()
    {
        $this->load->view('elements/header');
        $this->load->view('purchase/support');
        $this->load->view('elements/footer');
    }

    /**
     * 記事購入画面
     *
     * @return void
     */
    public function article()
    {
        $this->load->view('elements/header');
        $this->load->view('purchase/article');
        $this->load->view('elements/footer');
    }

    
    /**
     * 連載買い切り画面
     * @return void
     */
    public function outright()
    {
        $this->load->view('elements/header');
        $this->load->view('purchase/outright');
        $this->load->view('elements/footer');
    }
    
    /**
     * 決済確認画面
     *
     * @return void
     */
    public function payment_confirm()
    {
        $this->load->view('elements/header');
        $this->load->view('purchase/payment_confirm');
        $this->load->view('elements/footer');
    }

    /**
     * 購入完了画面
     *
     * @return void
     */
    public function payment_complete()
    {
        $this->load->view('elements/header');
        $this->load->view('purchase/payment_complete');
        $this->load->view('elements/footer');
    }

    /**
     * 月額会員登録
     *
     * @return void
     */
    public function monthly_subscription()
    {
        $this->load->view('elements/header');
        $this->load->view('purchase/monthly_subscription');
        $this->load->view('elements/footer');
    }
}
