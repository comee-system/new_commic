<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <div class="shadow-lg p-3 mb-5 bg-white rounded my-5">
                    
                    <img src="/assets/image/5/detail/16/thum/m_5f6ffef48c677.jpg" class="mt-3 mx-auto d-block" width="100%" alt="error_image">
                    <h3 class="text-center my-5 font-weight-bolder">会員登録をお願いします。</h3>

                    <!-- XXXの欄はJavaScriptで入力内容が変化する -->
                    <h5 class="text-center my-4">XXX&nbsp;は、<br>
                        会員登録をするとご利用いただけます。
                    </h5>

                    <!-- 会員登録・ログイン・キャンセルボタン -->
                    <div class="row justify-content-around my-5">
                        <div>
                            <a href="/users/regist_user" class="btn btn-success btnflex">会員登録</a>
                        </div>
                        <div>
                            <a href="/users/login" class="btn btn-primary btnflex">ログイン</a>
                        </div>
                        <div>
                            <a href="/top/index" class="btn btn-danger btnflex">キャンセル</a>
                        </div>
                    </div>
                
                </div>

            </div>
        </div>

    </div>