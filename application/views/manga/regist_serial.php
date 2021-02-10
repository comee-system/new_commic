<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">

                <!-- 入力フォーム -->
                <form method="POST" action="#">

                    <!-- 大見出し -->
                    <div class="d-flex justify-content-center mt-3">
                        <h3>連載情報</h3>
                    </div>

        
                    <!-- ヘッダー画像選択欄 見出し -->
                    <h6 class="mb-2">ヘッダー画像</h6>

                    <!-- ヘッダー画像 -->
                    <div class="card bg-dark text-white mx-auto d-block">
                        <img src="/assets/image/5/detail/15/thum/s_5f6f40fe94cf7.jpg" class="card-img" alt="image_phote">
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


                    <!-- 連載タイトル入力欄 -->
                    <div class="form-group mt-5 my-2">
                        <label for="card_name"><h6 class="mb-0">連載タイトル</h6></label>
                        <input type="text" class="form-control" id="card_name" name="card_name">
                    </div>
        

                    <!-- 連載の説明入力欄 -->
                    <div class="form-group mt-3">
                        <label for="exampleFormControlTextarea1"><h6 class="mb-0">連載の説明文</h6></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <!-- 1行にキャンセル・編集・削除ボタンを羅列 -->
                    <h6 class="mt-3 mb-2">販売設定</h6>
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-danger btnflex" type="reset">無料</button>
                        <button type="button" class="btn btn-info btnflex" type="button">有料買い切り</button>
                        <button type="button" class="btn btn-success btnflex" type="button">有料月額</button>
                    </div>


                    <!-- 販売価格入力欄 -->
                    <div class="form-group mt-4">
                        <div class="row d-flex justify-content-start mt-3">
                            <label for="price"><h6 class="pt-3 ml-3">販売価格：</h6></label>
                            <input type="text" class="form-control w-25 mt-2" id="price">
                            <h6 class="pt-3 ml-2">円</h6>
                        </div>
                    </div>


                    <!-- 告知画像選択欄 -->
                    <h6 class="mt-4">告知画像(任意)</h6>
                    <div class="card bg-dark text-white mx-auto d-block">
                        <img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg" class="card-img" alt="image_phote">
                            <div class="card-img-overlay">

                                <div class="row">

                                    <!-- 画像選択用ボタン➀ -->
                                    <div class="col-5 offset-1 text-center">
                                        <i class="fas fa-camera fa-3x" style="color: #fff;" data-toggle="modal" data-target="#imageSelect"></i>
                                    </div>

                                    <!-- 画像削除用ボタン -->
                                    <div class="col-5 text-center">
                                        <i class="far fa-window-close fa-3x" data-toggle="modal" data-target="#imageDelete"></i>
                                    </div>

                                </div>                                
                            </div>
                    </div>

                    <!-- 告知文言入力欄(任意) -->
                    <div class="form-group mt-4">
                        <label for="card_name"><h6 class="mb-0">告知文言(任意)</h6></label>
                        <input type="text" class="form-control" id="card_name" name="card_name">
                    </div>


                    <!-- 公開非公開 -->
                    <div class="d-flex justify-content-start mt-4">
                        <h6 class="pt-2 mr-5">公開/非公開</h6>
                        <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                    </div>


                    <!-- 1行にキャンセル・編集・削除ボタンを羅列 -->
                    <div class="row justify-content-between my-5">
                        <a class="btn btn-danger ml-5 btnflex" href="/manga/serial_list" type="reset">キャンセル</a>
                        <a class="btn btn-info mr-5 btnflex" href="/manga/serial_list" type="submit">登録する</a>
                    </div>


                </form>
                

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

                <!-- 画像削除用モーダル -->
                <div class="modal fade" id="imageDelete" data-keyboard="false" tabindex="-1" aria-labelledby="imageDeleteLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                本当にこの画像を削除してもよろしいですか？
                            </div>
                            <div class="modal-footer d-flex justify-content-around">
                                <button type="sumbit" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                                <button type="sumbit" class="btn btn-danger" data-dismiss="modal">削除する</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>