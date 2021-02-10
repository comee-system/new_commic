<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">
    <!-- 作品一覧 -->
    <div class="d-block alert alert-success">
        <h3 class="text-dark p-2 px-4">作品一覧</h3>   

        <div class="row d-md-flex">
            <!-- 作品数 -->
            <div class="d-md-flex col-sm text-nowrap font-weight-bold m-2"><h5>作品数:XXX本</h5></div>
            <!-- 公開ステータス -->
            <div class="d-md-flex col-sm text-nowrap justify-content-center">     
                <div class="d-md-flex flex-column justify-content-center">
                    <div class="row d-md-flex flex-column">
                        <div class="dropdown my-1">
                        <a class="btn btn-success dropdown-toggle ncss" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            公開ステータス
                        </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">すべて</a>
                                <a class="dropdown-item" href="#">公開中</a>
                                <a class="dropdown-item" href="#">下書き</a>
                                <a class="dropdown-item" href="#">予約投稿</a>
                            </div>
                        </div>
                        <!-- <label for="status" class="text-left mt-2">公開ステータス</label>
                        <select title="status" name="status" id="status" class="border-secondary" autocomplete="" aria-describedby="">
                            <option hidden selected value="00">--</option>
                            <option value="01">すべて</option>
                            <a href="#"><option value="02">公開中</option></a>
                            <option value="03">下書き</option>
                            <option value="04">予約投稿</option>
                        </select> -->
                    </div>
                </div>
            </div>
            <!-- 連載 -->
            <div class="d-md-flex col-sm text-nowrap justify-content-center">
                <div class="d-md-flex flex-column justify-content-center">
                    <div class="row d-md-flex flex-column">
                        <div class="dropdown my-1">
                        <a class="btn btn-success dropdown-toggle ncss" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            連載
                        </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">連載①</a>
                                <a class="dropdown-item" href="#">連載②</a>
                                <a class="dropdown-item" href="#">連載③</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 有料/無料 -->
            <div class="d-md-flex col-sm text-nowrap justify-content-center">
                <div class="d-md-flex flex-column justify-content-center">
                    <div class="row d-md-flex flex-column">
                       <div class="dropdown my-1">
                        <a class="btn btn-success dropdown-toggle ncss" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            有料/無料
                        </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">有料</a>
                                <a class="dropdown-item" href="#">無料</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 期間 -->
            <div class="d-md-flex col-sm text-nowrap justify-content-center">
                <div class="d-md-flex flex-column justify-content-center">
                    <div class="row d-md-flex flex-column">
                       <div class="dropdown my-1">
                        <a class="btn btn-success dropdown-toggle ncss" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            期間
                        </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">すべて</a>
                                <a class="dropdown-item" href="#">xxxx年xx月</a>
                                <a class="dropdown-item" href="#">xxxx年xx月</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- 作品1 -->
    <div class="row d-flex justify-content-around mt-3 bg-light border">
        <!-- 作品タイトル・ステータス・日付の表示 -->
        <div class="d-flex flex-column justify-content-center">
            <h5 class="p-2">作品タイトル</h5>
            <h5 class="p-2">ステータス</h5>
            <h5 class="p-2">日付</h5>
        </div>
        <!-- リサイズされた表紙 -->
        <div class="">
            <img src="/assets/image/5/detail/17/thum/5f7191ae805b1.jpg" class="img-thumnail" alt="image1" width="150">
        </div>
        <!-- ・・・ （編集用ボタン）-->
        <div class="d-flex align-self-center my-1">
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm">・・・</button>

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <a class="mx-4 p-2 mt-2 text-dark" href="/manga/edit?id={id}">編集する</a>
                        <a class="mx-4 p-2 text-dark" href="#">下書きに変更する</a>
                        <div class="dropdown-divider"></div>
                        <a class="mx-4 p-2 mb-2 text-danger" href="#">削除する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 作品2 -->
    <div class="row d-flex justify-content-around mt-3 bg-light border">
        <!-- 作品タイトル・ステータス・日付の表示 -->
        <div class="d-flex flex-column justify-content-center">
            <h5 class="p-2">作品タイトル</h5>
            <h5 class="p-2">ステータス</h5>
            <h5 class="p-2">日付</h5>
        </div>
        <!-- リサイズされた表紙 -->
        <div class="">
            <img src="/assets/image/5/detail/18/lists/5fa4eba8aaa1b.jpg" class="img-thumnail" alt="image2" width="150">
        </div>
        <!-- ・・・ （編集用ボタン）-->
        <div class="d-flex align-self-center my-1">
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm">・・・</button>

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <a class="mx-4 p-2 mt-2 text-dark" href="/manga/edit?id={id}">編集する</a>
                        <a class="mx-4 p-2 text-dark" href="#">下書きに変更する</a>
                        <div class="dropdown-divider"></div>
                        <a class="mx-4 p-2 mb-2 text-danger" href="#">削除する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- 作品3 -->
   <div class="row d-flex justify-content-around mt-3 bg-light border">
        <!-- 作品タイトル・ステータス・日付の表示 -->
        <div class="d-flex flex-column justify-content-center">
            <h5 class="p-2">作品タイトル</h5>
            <h5 class="p-2">ステータス</h5>
            <h5 class="p-2">日付</h5>
        </div>
        <!-- リサイズされた表紙 -->
        <div class="">
            <img src="/assets/image/5/detail/18/lists/s_5fa4eba8a7e4a.jpg" class="img-thumnail" alt="image3" width="150">
        </div>
        <!-- ・・・ （編集用ボタン）-->
        <div class="d-flex align-self-center my-1">
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm">・・・</button>

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <a class="mx-4 p-2 mt-2 text-dark" href="/manga/edit?id={id}">編集する</a>
                        <a class="mx-4 p-2 text-dark" href="#">下書きに変更する</a>
                        <div class="dropdown-divider"></div>
                        <a class="mx-4 p-2 mt-2 text-danger" href="#">削除する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5"></div>

</div>
