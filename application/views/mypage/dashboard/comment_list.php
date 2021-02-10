<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- 見出し -->
        <div class="d-flex justify-content-center my-5">
            <h3>ダッシュボード</h3>
        </div>

        <!-- ダッシュボードメニュー -->
        <hr>
        <div class="d-flex justify-content-around mt-3">
            <a href="/mypage/manga_views_count"><h5 class="text-center mx-1">閲覧数</h5></a>
            <a href="/mypage/sales_data"><h5 class="text-center mx-1">売上管理</h5></a>
            <a href="/mypage/transfer_history"><h5 class="text-center mx-1">振込管理</h5></a>
            <h5 class="text-center mx-1">コメント</h5>
        </div>
        <hr>

        <!-- 集計期間表示欄(xlより小さい画面でのみ表示) -->
        <div class="mt-3">
            <div class="d-block d-xl-none alert alert-success w-100 text-center" role="alert">
                <p>集計期間:</p>
                <p>XXXX/XX/XX～XXXX/XX/XX</p>
            </div>
        </div>

        <!-- 集計期間入力欄(すべての画面で表示) -->
        <div class="container">
            <div class="row">

                <div class="col-xl-2 col-3 my-4 px-2">
                    <button type="button" class="btn btn-success text-nowrap pull_btn">全期間</button>
                </div>
                <div class="col-xl-2 col-3 my-4 px-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle pull_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            月
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item">2020年8月</a>
                            <a class="dropdown-item">2020年7月</a>
                            <a class="dropdown-item">2020年6月</a>
                            <a class="dropdown-item">2020年5月</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-3 my-4 px-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle pull_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            7日間
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item">8/13～8/19</a>
                            <a class="dropdown-item">8/6～8/12</a>
                            <a class="dropdown-item">7/30～8/5</a>
                            <a class="dropdown-item">7/23～7/29</a>
                            <a class="dropdown-item">7/16～7/22</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-3 my-4 px-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle pull_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            今日
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item">今日</a>
                            <a class="dropdown-item">昨日</a>
                            <a class="dropdown-item">8/17</a>
                            <a class="dropdown-item">8/16</a>
                            <a class="dropdown-item">8/15</a>
                            <a class="dropdown-item">8/14</a>
                            <a class="dropdown-item">8/13</a>
                            <a class="dropdown-item">8/12</a>
                        </div>
                    </div>
                </div>

                <!-- 集計期間表示欄(xlサイズ以上の画面でのみ表示) -->
                <div class="col-xl-4">
                    <div class="d-none d-xl-block alert alert-success text-center" role="alert">
                        <p>集計期間:</p>
                        <p>XXXX/XX/XX～XXXX/XX/XX</p>
                    </div>
                </div>

            </div>
        </div>


        <!-- コメント -->
        <h4 class="text-center font-weight-bold p-3">コメント</h4>
        <div class="list-group">

            <!-- 1人目のコメント -->
            <div class="card mb-3 list-group-item">
                <div class="card-body">
                    <div class="row">
                        <!-- アイコン画像 -->
                        <div class="d-flex justify-content-start pl-3">
                            <a href="/creator?id={id}"><img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="card-img img-thumbnail rounded-circle w-50 my-auto " alt="icon_image"></a>
                        </div>

                        <div class="row col-md pt-4">    
                            <!-- ユーザーネーム -->
                            <div class="col-sm-7">
                                <a href="/creator?id={id}" class="text-dark"><h5 class="card-text font-weight-bold p-2">ユーザーネーム</h5></a>
                            </div>
                            <!-- 日付表示(例) -->
                            <div class="col-sm py-2 px-4">
                                <?php $day = new DateTime();
                                echo $day->format('Y/m/d'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- コメントの内容を表示 -->
                    <div class="row p-1 mt-2">
                        <div class="col-md d-flex align-items-start flex-column bd-highlight mb-3"> 
                            <p class="card-text text-muted">素晴らしい作品でした！特に○○が××するシーンではとても感動しました！これからも応援しています！素晴らしい作品でした！特に○○が××するシーンではとても感動しました！これからも応援しています！</p>
                        </div>
                    </div>                    
                        
                    <!-- 通報ボタン -->
                    <a href="/mypage/comment_report"><button type="button" class="btn btn-outline-danger">通報する</button></a>      
                </div>
            </div>


             <!-- 2人目のコメント -->
             <div class="card mb-3 list-group-item">
                <div class="card-body">
                    <div class="row">
                        <!-- アイコン画像 -->
                        <div class="d-flex justify-content-start pl-3">
                            <a href="/creator?id={id}"><img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="card-img img-thumbnail rounded-circle w-50 my-auto " alt="icon_image"></a>
                        </div>

                        <div class="row col-md pt-4">    
                            <!-- ユーザーネーム -->
                            <div class="col-sm-7">
                                <a href="/creator?id={id}" class="text-dark"><h5 class="card-text font-weight-bold p-2">ユーザーネーム</h5></a>
                            </div>
                            <!-- 日付表示(例) -->
                            <div class="col-sm py-2 px-4">
                                <?php $day = new DateTime();
                                echo $day->format('Y/m/d'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- コメントの内容を表示 -->
                    <div class="row p-1 mt-2">
                        <div class="col-md d-flex align-items-start flex-column bd-highlight mb-3"> 
                            <p class="card-text text-muted">素晴らしい作品でした！特に○○が××するシーンではとても感動しました！これからも応援しています！素晴らしい作品でした！特に○○が××するシーンではとても感動しました！これからも応援しています！</p>
                        </div>
                    </div>                    
                        
                    <!-- 通報ボタン -->
                    <a href="/mypage/comment_report"><button type="button" class="btn btn-outline-danger">通報する</button></a>  
                </div>
            </div>

            <!-- 3人目のコメント -->
            <div class="card mb-3 list-group-item">
                <div class="card-body">
                    <div class="row">
                        <!-- アイコン画像 -->
                        <div class="d-flex justify-content-start pl-3">
                            <a href="/creator?id={id}"><img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="card-img img-thumbnail rounded-circle w-50 my-auto " alt="icon_image"></a>
                        </div>

                        <div class="row col-md pt-4">    
                            <!-- ユーザーネーム -->
                            <div class="col-sm-7">
                                <a href="/creator?id={id}" class="text-dark"><h5 class="card-text font-weight-bold p-2">ユーザーネーム</h5></a>
                            </div>
                            <!-- 日付表示(例) -->
                            <div class="col-sm py-2 px-4">
                                <?php $day = new DateTime();
                                echo $day->format('Y/m/d'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- コメントの内容を表示 -->
                    <div class="row p-1 mt-2">
                        <div class="col-md d-flex align-items-start flex-column bd-highlight mb-3"> 
                            <p class="card-text text-muted">素晴らしい作品でした！特に○○が××するシーンではとても感動しました！これからも応援しています！素晴らしい作品でした！特に○○が××するシーンではとても感動しました！これからも応援しています！</p>
                        </div>
                    </div>                    
                        
                    <!-- 通報ボタン -->
                    <a href="/mypage/comment_report"><button type="button" class="btn btn-outline-danger">通報する</button></a>      
                </div>
            </div>


        <!-- 「もっと見る」をクリックで続きを読み込み -->
        <button type="button" class="btn alert alert-success mb-5">もっと見る</button>

        </div>
    </div>
