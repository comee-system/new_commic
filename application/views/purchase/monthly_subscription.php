<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <div class="shadow-lg py-3 px-2 mb-5 bg-white rounded">

                    <!-- 見出し -->
                    <div class="text-center my-5">
                        <h3>月額会員登録</h3>
                    </div>

                    <hr>

                    <!-- コンテンツを中央寄せ -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1 px-1">

                                <!-- 商品名 -->
                                <div class="text-left mt-3">
                                    <h5>月額会員：<span class="text-info">XXXX(連載名)</span></h5>
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
                                    <!-- <h6>クレジットカード払い</h6> -->
                                    <!-- クレジットカードが未設定の場合 -->
                                    <!-- <a href="/users/update_card_information" class="text-decoration-none"><h6>クレジットカードが設定されていません</h6></a> -->
                                    <!-- クレジットカードのエラーが発生した場合 -->
                                    <a href="/users/update_card_information" class="text-decoration-none text-info"><h6>クレジットカードの変更</h6></a>
                                </div>

                                <!-- 注意事項 -->
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="alert alert-secondary mt-4 mb-3 px-1" role="alert">
                                            <i class="fas fa-exclamation-triangle">&nbsp;即日に課金されます。</i><br>
                                            <i class="fas fa-exclamation-triangle">&nbsp;登録日の翌月同日に月額が引き落とされます。</i>
                                            <i class="fas fa-exclamation-triangle">&nbsp;1月1日等の場合は2月28日に課金されます。</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- キャンセル・送信ボタン -->
                    <div class="row justify-content-around my-3">
                        <a class="btn btn-danger mt-3 btnflex" href="/creator/manga?id={id}" type="button">キャンセル</a>
                        <a class="btn btn-success mt-3 btnflex" href="/purchase/payment_complete" type="button">確定</a>
                    </div>

                </div>
            </div>
        </div>
    </div>