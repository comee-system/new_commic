<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <!-- 見出し -->
                <div class="alert alert-secondary w-100 mx-auto text-center p-4" role="alert">
                    アカウント設定【カード情報】
                </div>

                <!-- カード情報表示フォームの囲い -->
                <div class="shadow-lg p-3 mb-5 bg-white rounded">

                    <!-- カード情報の表示フォーム -->
                    <form method="POST" action="#">

                        <div class="row">
                            <div class="col-md-10 offset-md-1">

                                <!-- 入力を受け付けない範囲　ここから開始 -->
                                <fieldset disabled>

                                    <!-- 使用できるカードの画像一覧 -->
                                    <div class="alert alert-dark mt-3" role="alert">
                                        <img src="#" class="m-3" alt="使用できるカード一覧">
                                    </div>

                                    <!-- カード番号の表示欄 -->
                                    <!-- placeholderには既存のカード情報が入る -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="card_number">カード番号</label>
                                                <input type="text" class="form-control" id="card_number" name="card_number" aria-describedby="card_numberHelp" placeholder="0000000000000123">
                                            </div>
                                        </div>
                                        <div class="col-5 offset-1">
                                            <div class="form-group">
                                                <label for="deadline">有効期限</label><br>
                                                <input type="text" class="form-control" id="deadline" name="deadline" aria-describedby="deadlineHelp" placeholder="01/22">
                                            </div>   
                                        </div>
                                    </div>

                                    <!-- カードの名義表示欄 -->
                                    <div class="form-group">
                                        <label for="card_name">カード名義</label>
                                        <input type="text" class="form-control" id="card_name" name="card_name" aria-describedby="card_nameHelp" placeholder="KENTA&nbsp;OGURA">
                                    </div>

                                    <!-- セキュリティコード表示欄 -->
                                    <div class="form-group">
                                        <label for="security_code">セキュリティコード</label>
                                        <input type="text" class="form-control" id="security_code" name="security_code" aria-describedby="security_codeHelp" placeholder="000">
                                    </div>

                                </fieldset>


                                <!-- 1行にキャンセル・編集・削除ボタンを羅列 -->
                                <div class="row justify-content-around">

                                    <!-- キャンセル・編集ボタン -->
                                    <a class="btn btn-danger mt-3 btnflex" href="/users/settings" type="reset" role="button">キャンセル</a>
                                    <a class="btn btn-info mt-3 btnflex" href="/users/update_card_information" type="button" role="button">編集</a>

                                    <!-- 削除ボタン -->
                                    <button type="button" class="btn btn-dark mt-3 btnflex" data-toggle="modal" data-target="#card_information_delete">
                                        削除
                                    </button>

                                </div>

                                <!-- 注意書き -->
                                <p class="text-center my-3">
                                    クレジットカード情報の取り扱いについては<br>
                                    「課金情報の取り扱いの安全性について」をご覧ください。
                                </p>

                                <!-- 削除用Modal -->
                                <div class="modal fade" id="card_information_delete" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="card_information_deleteLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center px-2 mt-2">
                                                本当にこのカード情報を削除してもよろしいですか？
                                                <div class="d-flex justify-content-around">
                                                    <button type="button" class="btn btn-secondary mt-4 btnflex" data-dismiss="modal">キャンセル</button>
                                                    <a class="btn btn-primary mt-4 btnflex" href="/users/settings" type="reset" role="reset">削除</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>

                </div>
                
            </div>
        </div>
    </div>
                    