<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- ユーザーがLikeボタンを押した場合は「Likeした作品」の見出しを表示し、
            購入した作品ボタンを押した場合は「購入した作品」の見出しを表示する -->
        <h3 class="text-center my-3">Likeした作品</h3>
        <!-- <h3 class="text-center my-3">購入した作品</h3> -->

        <!-- likeボタンと購入ボタン -->
        <div class="row">
            <div class="col-4 offset-1 text-center">
                <button type="button" class="btn alert alert-danger w-100 text-dark mt-1">
                        <h3>L&nbsp;i&nbsp;k&nbsp;e</h3>
                </button>
            </div>
            <div class="col-4 offset-2 text-center">
                <button type="button" class="btn alert alert-info w-100 text-dark mt-1">
                    <h3>購&nbsp;入</h3>
                </button>
            </div>
        </div>

        <!-- 作品一覧 -->
        <div class="border my-3">

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <a href="/creator/manga?id={id}"><h3 class="text-dark text-left">第4話：XXXXXXXXXXXXXXX</h3></a>
                        <a href="/creator?id={id}"><h5 class="text-dark mt-3">クリエイター名</h5></a>
                        <a href="/creator/serial?id={id}"><h4 class="text-dark mt-1">作品名</h4></a>
                        <h5 class="mt-1">2020/12/31 9:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">50</i></h4>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <a href="/creator/manga?id={id}"><h3 class="text-dark text-left">第3話：XXXXXXXXXXXXXXX</h4></a>
                        <a href="/creator?id={id}"><h5 class="text-dark mt-3">クリエイター名</h5></a>
                        <a href="/creator/serial?id={id}"><h4 class="text-dark mt-1">作品名</h4></a>
                        <h5 class="mt-1">2020/11/30 10:00</h5>
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
                        <a href="/creator/manga?id={id}"><h3 class="text-dark text-left">第2話：XXXXXXXXXXXXXXX</h4></a>
                        <a href="/creator?id={id}"><h5 class="text-dark mt-3">クリエイター名</h5></a>
                        <a href="/creator/serial?id={id}"><h4 class="text-dark mt-1">作品名</h4></a>
                        <h5 class="mt-1">2020/10/31 10:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">125</i></h4>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <a href="/creator/manga?id={id}"><h3 class="text-dark text-left">第1話：XXXXXXXXXXXXXXX</h4></a>
                        <a href="/creator?id={id}"><h5 class="text-dark mt-3">クリエイター名</h5></a>
                        <a href="/creator/serial?id={id}"><h4 class="text-dark mt-1">地縛少年花子くん</h4></a>
                        <h5 class="mt-1">2020/9/30 10:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">150</i></h4>
                    </div>
                </div>
            </div>

        </div>
                
    </div>