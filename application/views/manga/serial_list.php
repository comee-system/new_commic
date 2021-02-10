<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        
        <!-- 見出し -->
        <h1 class="text-center main-text">連載</h1>

        <!-- 連載一覧を表示 -->
        <div class="row row-cols-1 row-cols-md-2 mt-5">

            <!-- 新規の連載作成画面へ遷移するボタン -->
            <!-- 本来であればクリエイターが選んだ画像を既定のサイズに加工して貼り付けるため、画像及びカードの表示サイズはすべて同じになる -->
            <div class="col mb-4">
                <a class="btn btn-outline-secondary w-100 h-100 align-middle" href="/manga/regist_serial" type="button">
                    <h4 class="my-5 py-5">
                        新規の連載を作る
                    </h4>
                </a>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <img src="/assets/image/5/detail/17/thum/5f718e44dc9b1.jpg" class="card-img-top" alt="serial">
                        <div class="card-img-overlay text-right">
                            <a href="/manga/update_serial?id={id}" tabindex="-1">
                                <i class="fas fa-cog fa-4x" style="color: white;"></i>
                            </a>
                        </div>
                    <div class="card-body">
                        <h4 class="card-title">連載タイトル</h5>
                        <h6 class="card-text">投稿本数 : XX</h6>
                        <h6 class="card-text">公開or非公開</h6>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <img src="/assets/image/5/detail/18/lists/s2_5fa4eba8aa1a8.jpg" class="card-img-top" alt="serial">
                    <div class="card-img-overlay text-right">
                        <a href="/manga/update_serial?id={id}" tabindex="-1">
                            <i class="fas fa-cog fa-4x" style="color: white;"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">連載タイトル</h5>
                        <h6 class="card-text">投稿本数 : XX</h6>
                        <h6 class="card-text">公開or非公開</h6>
                    </div>
                </div>
            </div>
            
            <div class="col mb-4">
                <div class="card">
                    <img src="/assets/image/5/detail/17/thum/5f718e44dc9b1.jpg" class="card-img-top" alt="serial">
                    <div class="card-img-overlay text-right">
                        <a href="/manga/update_serial?id={id}" tabindex="-1">
                            <i class="fas fa-cog fa-4x" style="color: white;"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">連載タイトル</h5>
                        <h6 class="card-text">投稿本数 : XX</h6>
                        <h6 class="card-text">公開or非公開</h6>
                    </div>
                </div>
            </div>
            
        </div>
　　</div>