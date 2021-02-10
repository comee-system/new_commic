<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <div class="shadow-lg p-3 mb-5 bg-white rounded">

                    <!-- 見出し -->
                    <div class="text-center my-5">
                        <h3>購入内容の確認</h3>
                    </div>

                    <hr>

                    <!-- コンテンツを中央寄せ -->
                    <div class="row">
                        <div class="col-10 offset-1">

                            <!-- 商品名 -->
                            <div class="text-left mt-3">
                                <h5>商品名</h5>
                                <h6>XXXXXXXXXXXXXX</h6>
                            </div>

                            <hr>

                            <!-- 金額 -->
                            <div class="text-left">
                                <h5>金額</h5>
                                <h6>XXX円</h6>
                            </div>

                            <hr>

                            <!-- 決済方法 -->
                            <div class="text-left">
                                <h5>決済方法</h5>

                                <!-- クレジットカードが設定されている場合 -->
                                <p>クレジットカード払い</p>
                                <!-- クレジットカードが未設定の場合 -->
                                <!-- <a href="/users/update_card_information" class="text-decoration-none">クレジットカードが設定されていません</a> -->
                                <!-- クレジットカードのエラーが発生した場合 -->
                                <!-- <a href="/users/update_card_information" class="text-decoration-none text-info">クレジットカードの変更</a> -->
                            </div>

                        </div>
                    </div>

                    <!-- キャンセル・送信ボタン -->
                    <div class="row justify-content-around mt-5 mb-3">
                        <a class="btn btn-danger mt-3 btnflex" href="/creator/manga?id={id}" type="button">キャンセル</a>
                        <a class="btn btn-success mt-3 btnflex" href="/purchase/payment_complete" type="button">確定</a>
                    </div>

                </div>
            </div>
        </div>
    </div>