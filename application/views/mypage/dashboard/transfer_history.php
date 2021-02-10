<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container px-1">

        <!-- 見出し -->
        <div class="text-center my-5">
            <h3>ダッシュボード</h3>
        </div>

        <!-- ダッシュボードメニュー -->
        <hr>
        <div class="d-flex justify-content-around mt-3">
            <a href="/mypage/manga_views_count"><h5 class="text-center mx-1">閲覧数</h5></a>
            <a href="/mypage/sales_data"><h5 class="text-center mx-1">売上管理</h5></a>
            <h5 class="text-center mx-1">振込管理</h5>
            <a href="/mypage/comment_list"><h5 class="text-center mx-1">コメント</h5></a>
        </div>
        <hr>

        <!-- 振込履歴の見出しと説明 -->
        <div class="text-center my-5">
            <h3>振込履歴</h3>
            <p>『準備中』は振込日の翌営業日に最新に更新されます</p>
        </div>


        <!-- 振込履歴一覧表 -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 px-0">

                    <table class="table text-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">振込依頼日</th>
                                <th scope="col">振込日(予定日)</th>
                                <th scope="col">金額</th>
                                <th scope="col">状況</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020/08/01</td>
                                <td>2020/08/31(予定)</td>
                                <td>1,980円</td>
                                <td>準備中</td>
                            </tr>
                            <tr>
                                <td>2020/06/24</td>
                                <td>2020/08/31</td>
                                <td>580円</td>
                                <td>完了</td>
                            </tr>
                            <tr>
                                <td>2020/02/27</td>
                                <td>2020/04/30</td>
                                <td>320円</td>
                                <td>完了</td>
                            </tr>
                            <tr>
                                <td>2019/12/01</td>
                                <td>2019/12/31</td>
                                <td>160円</td>
                                <td>完了</td>
                            </tr>
                            <tr>
                                <td>2019/03/20</td>
                                <td>2019/04/30</td>
                                <td>1,980円</td>
                                <td>完了</td>
                            </tr>
                            <tr>
                                <td>2018/01/01</td>
                                <td>2020/02/28</td>
                                <td>2,980円</td>
                                <td>完了</td>
                            </tr>    
                        </tbody>
                    </table>

                    <!-- 「もっと見る」をクリックで続きを読み込み -->
                    <button type="button" class="btn alert alert-success w-100 my-3 mb-5">もっと見る</button>

                </div>
            </div>
        </div>

    </div>