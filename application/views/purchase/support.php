<div class="main-contents container">

    <!-- モーダルを直接ブラウザ上に出力する方法が分からなかったので、中継の役割としてアイコンを置かせていただきました -->
    <i class="far fa-question-circle" data-toggle="modal" role="button" data-target="#supportModal"></i>
    アイコンを押すとモーダルが表示されます。
    <div class="modal" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supportModalLabel">クリエイターを支援する</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">         
                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                        <!-- 入力フォーム -->
                        <form method="POST" action="#">
                            <!-- 支援金額を選択 -->
                            <div class="row d-flex justify-content-around">
                                <div class="btn btn-group-toggle" data-toggle="buttons">

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>100円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>500円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>1000円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>3000円</label>
                                    <!-- "任意"を押すと金額入力に変更する動きは、topmenuの検索バーを参考に後で作る -->
                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>任意(金額を入力)</label>

                                    <!-- <button class="btn btn-outline-success mt-1" data-toggle="button" aria-pressed="false" autocomplete="off">1000円</button>
                                    <button class="btn btn-outline-success mt-1" data-toggle="button" aria-pressed="false" autocomplete="off">3000円</button>
                                    <button class="btn btn-outline-success mt-1" data-toggle="button" aria-pressed="false" autocomplete="off">任意(金額を入力)</button> -->
                                </div>
                            </div>
                            <!-- メッセージを入力 -->
                            <div class="form-row text-left justify-content-center my-5">
                                <div class="col-sm-10">
                                    <h5 class="text-dark">メッセージ<small>（絵文字使用可）</small></h5>
                                    <div class="form-group">
                                        <textarea rows="7" id="textarea1" class="form-control" placeholder="メッセージを入力してください" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- 送信/キャンセル -->
                            <div class="text-center d-flex justify-content-center my-5">
                                <button type="submit" class="btn btn-success w-25 text-center mr-3 ">支援する</button>
                                <button type="button" class="btn btn-light w-25 border border-dark text-center ml-3" data-dismiss="modal">キャンセル</button></a>
                            </div>
                        </form>
                    </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
</div>
