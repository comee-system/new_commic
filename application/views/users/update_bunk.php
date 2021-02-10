<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <!-- 見出し -->
                <div class="alert alert-secondary w-100 mx-auto text-center p-4" role="alert">
                    アカウント設定【お支払先】
                </div>

                <div class="shadow-lg p-3 mb-5 bg-white rounded">

                    <!-- カード情報の登録フォーム -->
                    <form method="POST" action="#">

                        <div class="row">
                            <div class="col-md-10 offset-md-1">

                                <!-- 個人or法人 選択欄 -->
                                <div class="mb-3">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="individual" name="indiOrCorp" class="custom-control-input">
                                        <label class="custom-control-label" for="individual">個人</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="corporation" name="indiOrCorp" class="custom-control-input">
                                        <label class="custom-control-label" for="corporation">法人</label>
                                    </div>
                                </div>

                                <!-- 姓・名(全角)入力欄 -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="last_name">姓(全角)</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="山田">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="first_name">名(全角)</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="太郎">
                                    </div>
                                </div>

                                <!-- せい・めい(全角)入力欄 -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="last_name_kana">せい(全角)</label>
                                        <input type="text" class="form-control" id="last_name_kana" name="last_name_kana" placeholder="やまだ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="first_name_kana">めい(全角)</label>
                                        <input type="text" class="form-control" id="first_name_kana" name="first_name_kana" placeholder="たろう">
                                    </div>
                                </div>

                                <!-- 郵便番号(ハイフンなし半角数字)入力欄 -->
                                <div class="form-group">
                                    <label for="postal_code">郵便番号(ハイフンなし半角数字)</label>
                                    <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="例) 0001111">
                                </div>

                                <!-- 住所(全角)入力欄 -->
                                <div class="form-group">
                                    <label for="address">住所(全角)</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="例) 東京都港区北青山3-1-2">
                                </div>

                                <!-- 電話番号(ハイフンなし半角数字)入力欄 -->
                                <div class="form-group">
                                    <label for="phone_number">電話番号(ハイフンなし半角数字)</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="例) 00011112222">
                                </div>

                                <!-- 銀行名入力欄 -->
                                <div class="form-group">
                                    <label for="bank_name">銀行名</label>
                                        <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="頭文字を入力後、候補リストから選択してください">
                                </div>

                                <!-- 銀行コード入力欄 -->
                                <div class="form-group">
                                    <label for="bank_code">銀行コード(半角)</label>
                                        <input type="text" class="form-control" id="bank_code" name="bank_code" placeholder="自動で入力されます">
                                </div>

                                <!-- 支店名入力欄 -->
                                <div class="form-group">
                                    <label for="branch_name">支店名(ゆうちょ銀行の場合はこちらを参照してください)</label>
                                        <input type="text" class="form-control" id="branch_name" name="branch_name" placeholder="頭文字を入力後、候補リストから選択してください">
                                </div>

                                <!-- 支店コード入力欄 -->
                                <div class="form-group">
                                    <label for="branch_code">支店コード(半角)</label>
                                        <input type="text" class="form-control" id="branch_code" name="branch_name" placeholder="自動で入力されます">
                                </div>

                                <!-- 口座番号(7桁)(半角６桁の場合は先頭に0)入力欄 -->
                                <div class="form-group">
                                    <label for="account_number">口座番号(7桁)(半角6桁の場合は先頭に0)</label>
                                        <input type="text" class="form-control" id="account_number" name="account_number" placeholder="例) 0000000">
                                </div>
                                
                                <!-- 口座種別選択欄 -->
                                <div class="mb-3">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="account_type1" name="account_type" class="custom-control-input">
                                        <label class="custom-control-label" for="account_type1">普通</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="account_type2" name="account_type" class="custom-control-input">
                                        <label class="custom-control-label" for="account_type2">当座</label>
                                    </div>
                                </div>

                                <!-- 口座名義カナ入力欄 -->
                                <div class="form-group">
                                    <label for="account_holder">口座名義カナ</label>
                                        <input type="text" class="form-control" id="account_holder" name="account_holder" placeholder="例) ヤマダタロウ">
                                </div>

                                <!-- 注意書き -->
                                <p class="main-text">
                                    ※&nbsp;&nbsp;個人の場合は、姓と名の間に1文字分の全角スペースを空けてください。<br>
                                    ※&nbsp;&nbsp;法人の場合は、カ）などの法人略語をご使用ください。
                                </p>

                                <!-- キャンセル・確定ボタン -->
                                <div class="row justify-content-between">
                                    <a class="btn btn-danger mt-3 ml-3 btnflex" href="/users/settings" type="reset">キャンセル</a>
                                    <a class="btn btn-success mt-3 mr-3 btnflex" href="/users/settings" type="submit">保存</a>
                                </div>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>