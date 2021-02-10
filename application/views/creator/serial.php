<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- 連載情報 -->
        <div class="card w-100">
            <img src="/assets/image/5/detail/16/thum/5f6ffef48c677.jpg" class="card-img-top" alt="ヘッダー画像">
            <div class="card-body">
                <h4 class="card-title text-center">連載タイトルXXXXXXXXXXXXXXXXXXXXX</h4>
                        <div class="row card-text">
                            <div class="col-md-5 mt-3 px-0">
                                <div class="d-flex bd-highlight mb-3">
                                    <div class="pl-4 py-2 bd-highlight">
                                        <a href="/creator?id={id}"><img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle" alt="アイコン"></a>
                                    </div>
                                    <div class="bd-highlight pl-2 mt-5 ml-3">クリエイター名</div>
                                </div>
                            </div>
                            <div class="col-md-7 px-2">
                                <p>連載の説明XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                                    <div class="row my-3">
                                        <div class="col-5 pl-3 pr-0">
                                            <a href="/mypage/following_list"><p>フォロー：XXXX</p></a>
                                            <a href="/mypage/follower_list"><p>フォロワー：XXXX</p></a>
                                        </div>
                                        <div class="col-7 pr-1 pl-1 mt-3">
                                            <!-- <button type="submit" class="btn btn-primary ml-5" role="submit">フォロー</button> -->
                                            <!-- <a href="/purchase/article" class="ml-3">連載をすべて購入する<span class="text-info">&nbsp;¥2,980</span></a> -->
                                            <a href="/purchase/monthly_subscription">月額会員に登録する<span class="text-info">&nbsp;¥500/月</span></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
            </div>
        </div>


        <!-- 支援ボタン -->
        <div class="alert alert-success my-4" role="alert">
            <h4 class="alert-heading text-center">あなたの応援が作品を描く支えになります。</h4>
            <div class="text-center">
                <button type="button" class="btn btn-success btn-lg mt-2" data-toggle="modal" data-target="#supportModal">支援する</button>
            </div>
        </div>


        <!-- 連載作品一覧 -->
        <div class="border my-3">

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第3話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">作品名</a></h4>
                        <h5 class="mt-1">2020/12/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第2話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">作品名</a></h4>
                        <h5 class="mt-1">2020/11/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第1話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/10/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>

        </div>

        <!-- 「もっと見る」をクリックで連載作品の続きを読み込み -->
        <button type="button" class="btn alert alert-success w-100 mb-3">もっと見る</button>

        <!-- 支援用Modal -->
        <div class="modal" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="supportModalLabel">クリエイターを支援する</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- 入力フォーム -->
                    <form method="POST" action="#">

                        <div class="modal-body">
                            <!-- 支援金額を選択 -->
                            <div class="row d-flex justify-content-around">
                                <div class="btn btn-group-toggle" data-toggle="buttons">

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>100円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>500円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>1000円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>3000円</label>
                                    <!-- "任意"を押すと金額入力に変更する動きは、topmenuの検索バーを参考に後で作る -->
                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>任意(金額を入力)</label>
                                </div>
                            </div>
                            <!-- メッセージを入力 -->
                            <div class="form-row text-left justify-content-center my-3">
                                <div class="col-sm-10">
                                    <h5 class="text-dark">メッセージ<small>（絵文字使用可）</small></h5>
                                    <div class="form-group">
                                        <textarea rows="7" id="textarea1" class="form-control" placeholder="メッセージを入力してください" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-around">
                            <!-- 送信/キャンセル -->
                            <button type="button" class="btn btn-danger border border-dark text-center ml-3" data-dismiss="modal">キャンセル</button></a>
                            <button type="submit" class="btn btn-success text-center mr-3">支援する</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    
    </div>