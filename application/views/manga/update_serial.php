<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- 編集情報入力フォーム -->
                <form method="POST" action="#">

                    <!-- 大見出し -->
                    <div class="d-flex justify-content-center mt-3">
                        <h3 class="main-text mr-5 pt-2">連載情報</h3>
                        <a class="btn btn-info btn-lg" href="/manga/serial_list" type="button">
                            <h5 class="pt-1">連載を見る</h5>
                        </a>
                    </div>


                    <!-- ヘッダー画像選択欄 -->
                    <h6 class="mt-4">ヘッダー画像</h6>
                    <div class="card bg-dark text-white mx-auto　d-block">
                        <img src="/assets/image/5/detail/15/thum/s_5f6f40fe94cf7.jpg" class="card-img" alt="ヘッダー画像">
                            <div class="card-img-overlay">
                                <div class="row">

                                    <!-- 画像選択用ボタン➀ -->
                                    <div class="col-5 offset-1 text-center">
                                        <i class="fas fa-camera fa-3x" style="color: #fff;" data-toggle="modal" data-target="#imageSelect"></i>
                                    </div>

                                    <!-- 画像削除用ボタン➀ -->
                                    <div class="col-5 text-center">
                                        <i class="far fa-window-close fa-3x" data-toggle="modal" data-target="#imageDelete"></i>
                                    </div>

                                </div>   
                            </div>
                    </div>

            
                    <!-- 連載タイトル表示欄 -->
                    <h6 class="mt-5">連載タイトル&nbsp;&nbsp;:&nbsp;&nbsp;XXXXXXXXXXX</h6>
                    
                    <!-- 連載の説明表示欄 -->
                    <div class="mt-5">
                        <h6>連載の説明文</h6>
                        <h6 class="text-break">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h6>
                    </div>
                    

                    <!-- Button trigger modal -->
                    <h6 class="mt-5" data-toggle="modal" data-target="#followers">
                        フォロワー数&nbsp;&nbsp;:&nbsp;&nbsp;<span class="text-info">XX</span>
                    </h6>


                    <!-- 販売価格表示欄 -->
                    <h6 class="mt-5">販売価格&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;XX円</h6>


                    <!-- 作成日表示欄 -->
                    <h6 class="mt-5">作成日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;XXXX年&nbsp;&nbsp;XX月&nbsp;&nbsp;XX日</h6>

                    <!-- 告知画像選択欄 -->
                    <h6 class="mt-5">告知画像(任意)</h6>
                    <div class="card bg-dark text-white mx-auto d-block">
                        <img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg" class="card-img" alt="image_phote">
                            <div class="card-img-overlay">

                                <div class="row">

                                    <!-- 画像選択用ボタン➀ -->
                                    <div class="col-5 offset-1 text-center">
                                        <i class="fas fa-camera fa-3x" style="color: #fff;" data-toggle="modal" data-target="#imageSelect"></i>
                                    </div>

                                    <!-- 画像削除用ボタン➁ -->
                                    <div class="col-5 text-center">
                                        <i class="far fa-window-close fa-3x" data-toggle="modal" data-target="#imageDelete"></i>
                                    </div>

                                </div>                                
                            </div>
                    </div>

                    <!-- 告知文言入力欄(任意) -->
                    <div class="form-group mt-5">
                        <label for="card_name"><h6 class="mb-0">告知文言(任意)</h6></label>
                        <input type="text" class="form-control" id="card_name" name="card_name" placeholder="新作を投稿しました！等　既述の告知文言を表示しておく">
                    </div>

                    <!-- 公開非公開 -->
                    <div class="d-flex justify-content-start mt-4">
                        <h6 class="pt-2 mr-5">公開/非公開</h6>
                        <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                    </div>

                    <!-- 1行にキャンセル・編集・削除ボタンを羅列 -->
                    <div class="row justify-content-around mt-5 mb-3">
                        <a class="btn btn-danger btnflex" href="/manga/serial_list" type="reset">キャンセル</a>
                        <a class="btn btn-info btnflex" href="/manga/serial_list" type="button">変更する</a>
                        <a class="btn btn-secondary btnflex" href="/manga/serial_list" type="reset">削除</a>
                    </div>

                </form>
                <!-- 編集情報入力フォーム終了 -->

                <!-- 画像選択用Modal -->
                <div class="modal fade" id="imageSelect" data-keyboard="false" tabindex="-1" aria-labelledby="imageSelectLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center" id="imageSelect">
                                <form method="POST" action="#">
                                    <div class="form-group">
                                        <label for="formControlRange"><img src="/assets/image/5/detail/16/thum/s_5f6ffef48c677.jpg" class="w-100" alt="select_image"></label>
                                        <div class="row mt-3">
                                            <div class="col-2 mt-4 mx-0">
                                                <i class="far fa-image fa-lg"></i>
                                            </div>
                                            <div class="col-8 pl-0 mx-0 mt-2">
                                                <input type="range" class="form-control-range w-100 mt-3" id="formControlRange">
                                            </div>
                                            <div class="col-2 px-0 mt-2">
                                                <i class="far fa-image fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer d-flex justify-content-around">
                                <button type="reset" class="btn btn-danger btnflex" data-dismiss="modal">キャンセル</button>
                                <button type="submit" class="btn btn-success btnflex" data-dismiss="modal">保存する</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- 画像削除用Modal -->
                <div class="modal fade" id="imageDelete" data-keyboard="false" tabindex="-1" aria-labelledby="imageDeleteLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center" id="imageDelete">
                                本当にこの画像を削除してもよろしいですか？
                            </div>
                            <div class="modal-footer d-flex justify-content-around">
                                <button type="sumbit" class="btn btn-secondary btnflex" data-dismiss="modal">キャンセル</button>
                                <button type="reset" class="btn btn-danger btnflex" data-dismiss="modal">削除する</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Followers Modal -->
                <div class="modal fade" id="followers" tabindex="-1" aria-labelledby="followersLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">

                            <!-- Modalヘッダー -->
                            <div class="modal-header">
                                <h5 class="modal-title" id="followers">フォロワー一覧</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <!-- Modalボディ -->
                            <div class="modal-body">

                                <!-- フォロワー1 -->
                                <div class="media position-relative shadow my-2">
                                    <a href="/mypage/edit_creator_profile">
                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle py-3 px-4" alt="follower_icon">
                                    </a>
                                    <div class="media-body">
                                        <div class="row my-2">
                                            <div class="col-sm-8 offset-sm-2">
                                                <a href="/mypage/edit_creator_profile"><h5 class="text-dark">クリエイター名</h5></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">ユーザーid</h6></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">プロフィール・・・</h6></a>
                                                <button type="button" class="btn btn-primary btn-sm active">フォロー中</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- フォロワー2 -->
                                <div class="media position-relative shadow my-2">
                                    <a href="/mypage/edit_creator_profile">
                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle py-3 px-4" alt="follower_icon">
                                    </a>
                                    <div class="media-body">
                                        <div class="row my-2">
                                            <div class="col-sm-8 offset-sm-2">
                                                <a href="/mypage/edit_creator_profile"><h5 class="text-dark">クリエイター名</h5></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">ユーザーid</h6></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">プロフィール・・・</h6></a>
                                                <button type="button" class="btn btn-primary btn-sm active">フォロー中</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- フォロワー3 -->
                                <div class="media position-relative shadow my-2">
                                    <a href="/mypage/edit_creator_profile">
                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle py-3 px-4" alt="follower_icon">
                                    </a>
                                    <div class="media-body">
                                        <div class="row my-2">
                                            <div class="col-sm-8 offset-sm-2">
                                                <a href="/mypage/edit_creator_profile"><h5 class="text-dark">クリエイター名</h5></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">ユーザーid</h6></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">プロフィール・・・</h6></a>
                                                <button type="button" class="btn btn-primary btn-sm active">フォロー中</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- フォロワー4 -->
                                <div class="media position-relative shadow my-2">
                                    <a href="/mypage/edit_creator_profile">
                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle py-3 px-4" alt="follower_icon">
                                    </a>
                                    <div class="media-body">
                                        <div class="row my-2">
                                            <div class="col-sm-8 offset-sm-2">
                                                <a href="/mypage/edit_creator_profile"><h5 class="text-dark">クリエイター名</h5></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">ユーザーid</h6></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">プロフィール・・・</h6></a>
                                                <button type="button" class="btn btn-primary btn-sm active">フォロー中</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- フォロワー5 -->
                                <div class="media position-relative shadow my-2">
                                    <a href="/mypage/edit_creator_profile">
                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle py-3 px-4" alt="follower_icon">
                                    </a>
                                    <div class="media-body">
                                        <div class="row my-2">
                                            <div class="col-sm-8 offset-sm-2">
                                                <a href="/mypage/edit_creator_profile"><h5 class="text-dark">クリエイター名</h5></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">ユーザーid</h6></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">プロフィール・・・</h6></a>
                                                <button type="button" class="btn btn-primary btn-sm active">フォロー中</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- フォロワー6 -->
                                <div class="media position-relative shadow my-2">
                                    <a href="/mypage/edit_creator_profile">
                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle py-3 px-4" alt="follower_icon">
                                    </a>
                                    <div class="media-body">
                                        <div class="row my-2">
                                            <div class="col-sm-8 offset-sm-2">
                                                <a href="/mypage/edit_creator_profile"><h5 class="text-dark">クリエイター名</h5></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">ユーザーid</h6></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">プロフィール・・・</h6></a>
                                                <button type="button" class="btn btn-primary btn-sm active">フォロー中</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- フォロワー7 -->
                                <div class="media position-relative shadow my-2">
                                    <a href="/mypage/edit_creator_profile">
                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle py-3 px-4" alt="follower_icon">
                                    </a>
                                    <div class="media-body">
                                        <div class="row my-2">
                                            <div class="col-sm-8 offset-sm-2">
                                                <a href="/mypage/edit_creator_profile"><h5 class="text-dark">クリエイター名</h5></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">ユーザーid</h6></a>
                                                <a href="/mypage/edit_creator_profile"><h6 class="text-dark">プロフィール・・・</h6></a>
                                                <button type="button" class="btn btn-primary btn-sm active">フォロー中</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>