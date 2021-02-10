<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    /**
     * 新規会員登録
     *
     * @return void
     */
    public function regist_user()
    {
        $this->load->view('elements/header');
        $this->load->view('users/regist_user');
        $this->load->view('elements/footer');
    }

    /**
     * ログイン
     *
     * @return void
     */
    public function login()
    {
        $this->load->view('elements/header');
        $this->load->view('users/login');
        $this->load->view('elements/footer');
    }

    /**
     * ログアウト
     *
     * @return void
     */
    public function logout()
    {

    }

    /**
     * パスワードを忘れた場合の再設定ページ(メールアドレス入力画面)
     * 
     * @return void
     */
    public function reset_password()
    {
        $this->load->view('elements/header');
        $this->load->view('users/reset_password');
        $this->load->view('elements/footer');
    }

    /**
     * パスワードを忘れた場合の再設定ページ(新パスワード登録画面)
     * 
     * @return void
     */
    public function reset_password_regist()
    {
        $this->load->view('elements/header');
        $this->load->view('users/reset_password_regist');
        $this->load->view('elements/footer');
    }
    
    /**
     * 退会ページ
     *
     * @return void
     */
    public function unsubscribe()
    {
        $this->load->view('elements/header');
        $this->load->view('users/unsubscribe');
        $this->load->view('elements/footer');
    }

    /**
     * アカウント情報表示、年齢制限設定変更、SNS連携設定ページ
     *
     * @return void
     */
    public function settings()
    {
        $this->load->view('elements/header');
		$this->load->view('users/settings');
		$this->load->view('elements/footer');
    }
    
    /**
     * ユーザー名の変更ページ
     *
     * @return void
     */
    public function update_username()
    {
        $this->load->view('elements/header');
		$this->load->view('users/update_username');
		$this->load->view('elements/footer');
    }

    /**
     * メールアドレスの変更ページ
     *
     * @return void
     */
    public function update_email()
    {
        $this->load->view('elements/header');
		$this->load->view('users/update_email');
		$this->load->view('elements/footer');
    }

    /**
     * 生年月日の登録、変更ページ
     *
     * @return void
     */
    public function update_birthday()
    {
        $this->load->view('elements/header');
		$this->load->view('users/update_birthday');
		$this->load->view('elements/footer');
    }

    /**
     * パスワードの変更ページ
     *
     * @return void
     */
    public function change_password()
    {
        $this->load->view('elements/header');
		$this->load->view('users/change_password');
		$this->load->view('elements/footer');
    }

    /**
     * カード情報登録、更新
     */
    public function update_card_information()
    {
        $this->load->view('elements/header');
		$this->load->view('users/update_card_information');
		$this->load->view('elements/footer');
    }

    /**
     * カード情報表示
     *
     * @return void
     */
    public function view_card_information()
    {
        $this->load->view('elements/header');
		$this->load->view('users/view_card_information');
		$this->load->view('elements/footer');
    }

    /**
     * 支払い先登録・更新
     *
     * @return void
     */
    public function update_bunk()
    {
        $this->load->view('elements/header');
		$this->load->view('users/update_bunk');
		$this->load->view('elements/footer');
    }
    
    /**
     * 未ログイン時に会員限定機能をリクエストした際に表示するページ
     *
     * @return void
     */
    public function permission_error()
    {
        $this->load->view('elements/header');
		$this->load->view('users/permission_error');
		$this->load->view('elements/footer');
    }
}
