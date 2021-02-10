<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- アカウント情報の登録フォーム -->
        <div class="alert alert-secondary w-100 mx-auto text-center p-4" role="alert">アカウント情報</div>

        <!-- アカウント欄 -->
        <div class="list-group">
            <div class="list-group-item list-group-item-secondary d-flex justify-content-between">
                アカウント
            </div>

            <!-- メールアドレス -->
            <a href="/users/update_email">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    メールアドレス
                    <span>1234abcd@gmail.ne.jp　&raquo;</span>
                </div>
            </a>

            <!-- ユーザーネーム -->
            <a href="/users/update_username">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    ユーザーネーム
                    <span>リンゴ　&raquo;</span>
                </div>
            </a>

            <!-- 生年月日 -->
            <a href="/users/update_birthday">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    生年月日
                    <span>1月1日　&raquo;</span>
                </div>
            </a>

            <!-- カード情報 -->
            <a href="/users/update_card_information">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    カード情報
                    <span>**** **** **** 0123　&raquo;</span>
                </div>
            </a>

            <!-- 支払先 -->
            <a href="/users/update_bunk">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    支払先
                    <span>**** **** **** 1234　&raquo;</span>
                </div>
            </a>

            <!-- パスワード -->
            <a href="/users/change_password">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    パスワード
                    <span>1234abcd　&raquo;</span>
                </div>
            </a>

            <!-- ユーザーID -->
            <div class="list-group-item d-flex justify-content-between align-items-center">
                ユーザーID
                <span>1234abcd</span>
            </div>

            <!-- 年齢制限作品の表示 -->
            <div class="list-group-item d-flex bd-highlight mb-3 align-items-center">
                <div class="p-2 bd-highlight">
                    年齢制限作品の表示
                </div>
                <div class="p-2 bd-highlight">
                    <!-- 年齢制限作品の表示についてのButton trigger modal -->
                    <i class="far fa-question-circle" data-toggle="modal" role="button" data-target="#age_restriction"></i>
                </div>
                <div class="p-2 bd-highlight ml-auto">
                    <input type="checkbox" data-toggle="toggle" data-style="ios">
                </div>
            </div>
        </div>

        <!-- SNS連携の選択フォーム -->
        <!-- onにすると各SNSの認証画面に遷移し、offにすると連携が解除される -->
        <div class="list-group my-3">
            <div class="list-group-item list-group-item-secondary d-flex justify-content-between">
                SNS連携
            </div>
            <div class="list-group-item d-flex justify-content-between align-items-center">
                Twitter
                <input type="checkbox" data-toggle="toggle" data-style="ios">
            </div>
            <div class="list-group-item d-flex justify-content-between align-items-center">
                Facebook
                <input type="checkbox" data-toggle="toggle" data-style="ios">
            </div>
            <div class="list-group-item d-flex justify-content-between align-items-center">
                Google
                <input type="checkbox" data-toggle="toggle" data-style="ios">
            </div>
            <div class="list-group-item d-flex justify-content-between align-items-center">
                LINE
                <input type="checkbox" data-toggle="toggle" data-style="ios">
            </div>
        </div>

        <!-- 年齢制限作品の表示の説明のModal -->
        <div class="modal fade" id="age_restriction" tabindex="-1" aria-labelledby="age_restrictionLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="age_restrictionLabel">年齢制限作品の表示について</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        年齢制限のある作品は以下のような表現を含む作品を示します。(※詳細未定) 
                    </div>
                    <div class="modal-footer justify-content-around">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    </div>
                </div>
            </div>
        </div>

    </div>