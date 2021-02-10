<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">

    <!-- 通知枠 -->
    <div class="shadow-lg mb-5 bg-white rounded">
        <h3 class="text-center text-dark pt-4">通知</h3>
        <div class="d-flex flex-column bd-highlight">

            　<!-- 通知例(Like、複数人の場合) -->
            <div class="bg-light position-relative border">
                <div class="media ml-3">
                    <div class="row col-sm">
                        <div class="col-md-6 my-auto d-flex justify-content-center">
                                <a href="#"><img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="img-thumbnail rounded-circle mr-3" width="100" height="100"></a><a href="#"><img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="mr-3 img-thumbnail rounded-circle" width="100" height="100"></a><a href="#"><img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="mr-3 img-thumbnail rounded-circle" width="100" height="100"></a>
                        </div>
                        <div class="media-body">
                            <h5 class="py-4 d-flex align-items-center justify-content-center text-dark font-weight-bold">○○さんと他ｘ人がXXXにLikeしました！</h5>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="pb-3 bg-white"></div>

            <!-- 通知例(投稿) -->
            <div class="bg-light position-relative border">
                <div class="media">
                    <div class="media-body my-auto d-flex justify-content-center">
                        <img src="/assets/image/5/announce/49/icon.png" class="img-thumbnail rounded-circle" width="100" height="100">
                    </div>
                    <div class="media-body">
                        <h5 class="py-4 d-flex justify-content-center text-dark font-weight-bold text-nowrap">○○さんがXXXを投稿しました！</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="pb-3 bg-white"></div>

            <!-- 通知例(支援) -->
            <div class="bg-light position-relative border">
                <div class="media">
                    <div class="media-body my-auto d-flex justify-content-center">
                        <img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="img-thumbnail rounded-circle" width="100" height="100">
                    </div>
                    <div class="media-body">
                        <h5 class="py-4 d-flex justify-content-center text-dark font-weight-bold text-nowrap">○○さんがあなたを支援しました！</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="pb-3 bg-white"></div>

            <!-- 通知例(購入) -->
            <div class="bg-light position-relative border">
                <div class="media">
                    <div class="media-body my-auto d-flex justify-content-center">
                        <img src="/assets/image/5/announce/49/icon.png" class="img-thumbnail rounded-circle" width="100" height="100">
                    </div>
                    <div class="media-body">
                        <h5 class="py-4 d-flex justify-content-center text-dark font-weight-bold text-nowrap">○○さんがXXXを購入しました！</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="pb-3 bg-white"></div>

            <!-- 通知例・案2(有料記事の購入―スマホ版だと縦表示に変更)
            <div class="bg-light position-relative">
                <div class="media">
                    <div class="row media-body col-md">
                        <div class="col-md-6 my-auto d-flex justify-content-center">
                                <img src="/assets/image/5/announce/49/icon.png" class="img-thumbnail rounded-circle" width="100" height="100">
                        </div>
                    <div class="media-body">
                        <h5 class="py-5 d-flex justify-content-center text-dark font-weight-bold">○○さんがXXXを購入しました！</h5>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="pb-3 bg-white"></div> -->
            
        </div>

        <!-- 以前の通知を表示（スクロールで読み込む・未実装） -->
        <div class="alert alert-success text-center">
            <h5>以前の通知を表示する</h5>
        </div>

    </div>
</div>
