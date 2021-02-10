<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <div class="shadow-lg p-3 mb-5 bg-white rounded">

                    <!-- 見出し -->
                    <div class="text-center my-5">
                        <h3 class="text-info">XXXXXXXXX</h3>
                        <h4>の購入を完了しました！</h4>
                    </div>

                    <!-- クリエイターアイコン -->
                    <div class="text-center mt-3">
                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle rounded" alt="クリエイターアイコン">
                    </div>

                    <!-- 金額 -->
                    <div class="text-center my-3">
                        <h5>金額：XXX円</h5>
                    </div>

                    <!-- クリエイターによって設定されているメッセージ -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2 px-0">
                                <div class="alert alert-info my-3 py-3" role="alert">
                                    <p>購入ありがとうございます！<br>
                                        とてもうれしい気持ちになります。これからも更新を頑張りますのでよろしくお願いします(^^)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- このポップアップを閉じるボタン -->
                    <div class="text-center my-3">
                        <a href="/creator/manga?id={id}" type="button" class="btn btn-primary mt-3 btnflex">閉じる</a>
                    </div>

                </div>
            </div>
        </div>
    </div>