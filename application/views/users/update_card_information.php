<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <!-- 見出し -->
                <div class="alert alert-secondary w-100 mx-auto text-center p-4" role="alert">
                    アカウント設定【カード情報】
                </div>

                <!-- カード情報入力フォームの囲い -->
                <div class="shadow-lg p-3 mb-5 bg-white rounded">

                    <!-- カード情報の入力フォーム -->
                    <form method="POST" action="#">

                        <div class="row">
                            <div class="col-md-10 offset-md-1">

                                <!-- 使用できるカードの画像一覧 -->
                                <div class="alert alert-dark" role="alert">
                                    <img src="#" class="m-3" alt="使用できるカード一覧">
                                </div>

                                <!-- カード番号の入力欄 -->
                                <div class="form-group">
                                    <label for="card_number">カード番号</label>
                                    <input type="text" class="form-control" id="card_number" name="card_number" aria-describedby="card_numberHelp" placeholder="例) 0000 1111 2222 3333">
                                </div>
                                
                                <!-- カードの有効期限入力欄 -->
                                <div class="form-group">
                                    <label for="deadline">有効期限</label><br>
                                    <select class="form-control custom-select w-25" title="有効期限(月)" name="deadline_month" autocomplete="deadline_month" aria-describedby="deadline_monthHelp">
                                        <option selected value="">--</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    　/　
                                    <select class="custom-select w-25" title="有効期限(年)" name="deadline_year" autocomplete="deadline_year" aria-describedby="deadline_yearHelp">
                                        <option selected value="">--</option>
                                        <option value="2020">20</option>
                                        <option value="2021">21</option>
                                        <option value="2022">22</option>
                                        <option value="2023">23</option>
                                        <option value="2024">24</option>
                                        <option value="2025">25</option>
                                        <option value="2026">26</option>
                                        <option value="2027">27</option>
                                        <option value="2028">28</option>
                                        <option value="2029">29</option>
                                        <option value="2030">30</option>
                                        <option value="2031">31</option>
                                    </select>
                                </div>

                                <!-- カードの名義入力欄 -->
                                <div class="form-group">
                                    <label for="card_name">カード名義</label>
                                    <input type="text" class="form-control" id="card_name" name="card_name" aria-describedby="card_nameHelp" placeholder="例) SATOU TAROU">
                                </div>
        
                                <!-- セキュリティコード入力欄 -->
                                <div class="form-group">
                                    <label for="security_code">セキュリティコード</label>
                                    <input type="text" class="form-control" id="security_code" name="security_code" aria-describedby="security_codeHelp" placeholder="例) 000">
                                </div>

                                <!-- キャンセル・確定ボタン -->
                                <div class="row justify-content-between">
                                    <a class="btn btn-danger mt-3 ml-3 btnflex" href="/users/settings" type="reset">キャンセル</a>
                                    <a class="btn btn-success mt-3 mr-3 btnflex" href="/users/settings" type="submit">確定</a>
                                </div>
                    
                                <!-- 注意書き -->
                                <p class="text-center pt-3">
                                    クレジットカード情報の取り扱いについては<br>
                                    「課金情報の取り扱いの安全性について」をご覧ください。
                                </p> 
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>