<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- 見出し -->
        <div class="text-center my-5">
            <h3>ダッシュボード</h3>
        </div>

        <!-- ダッシュボードメニュー -->
        <hr>
        <div class="d-flex justify-content-around mt-3">
            <a href="/mypage/manga_views_count"><h5 class="text-center mx-1">閲覧数</h5></a>
            <h5 class="text-center mx-1">売上管理</h5>
            <a href="/mypage/transfer_history"><h5 class="text-center mx-1">振込管理</h5></a>
            <a href="/mypage/comment_list"><h5 class="text-center mx-1">コメント</h5></a>
        </div>
        <hr>

        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 offset-md-2">

                    <!-- 今月の売上 -->
                    <div class="mt-5 mb-2">
                        <h4>今月の売上</h4>
                    </div>

                    <div class="d-flex alert alert-secondary py-1 mb-1">
                        <div class="p-2 flex-fill bd-highlight"><h5 class="mt-1">総額</h5></div>
                        <div class="p-2 flex-fill bd-highlight"><h5 class="mt-1">¥1,900</h5></div>
                    </div>


                    <!-- 未振り込みの売上 -->
                    <div class="mt-5 mb-2">
                        <h4>未振り込みの売上</h4>
                    </div>

                    <div class="d-flex alert alert-secondary py-1 mb-1">
                        <div class="p-2 flex-fill bd-highlight"><h5 class="mt-1">総額</h5></div>
                        <div class="p-2 flex-fill bd-highlight"><h5 class="mt-1">¥1,900</h5></div>
                        <button type="button" class="btn btn-primary">振込</button>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="alert alert-info mx-auto mt-5" role="alert">
                        <p class="text-center my-0">
                            振り込みはXXX円以上で振込が可能です。<br>
                            振り込みは、毎月XX日までに依頼されたものを<br>
                            翌月XX日に振り込み対応を行います。
                        </p>
                    </div>

                </div>
            </div>
        </div>


        <!-- 売上金額 -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="mb-3 mx-auto">
                        <div class="mt-5 mb-3">
                            <h4>売上金額</h4>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>2020年8月</td>
                                    <td>¥1,900</td>
                                </tr>
                                <tr>
                                    <td>2020年7月</td>
                                    <td>¥1,900</td>
                                </tr>
                                <tr>
                                    <td>2020年5月</td>
                                    <td>¥1,900</td>
                                </tr>
                                <tr>
                                    <td>2020年3月</td>
                                    <td>¥1,900</td>
                                </tr>
                                <tr>
                                    <td>2020年1月</td>
                                    <td>¥1,900</td>
                                </tr>
                                <tr>
                                    <td>2020年12月</td>
                                    <td>¥1,900</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <!-- 「もっと見る」をクリックで続きを読み込み -->
                        <button type="button" class="btn alert alert-success w-100 my-3 mb-5">もっと見る</button>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>