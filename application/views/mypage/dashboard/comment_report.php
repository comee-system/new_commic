<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <div class="shadow-lg p-3 mb-5 bg-white rounded">

                    <!-- 通報理由入力フォーム -->
                    <form method="POST" action="#">

                        <!-- 見出し -->
                        <div class="text-center my-5">
                            <h3>通報理由</h3>
                        </div>

                        <div class="row">
                            <div class="col-sm-10 offset-sm-1">

                                <!-- 通報理由選択欄 -->
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="radio" name="reports" id="report1" value="option1" checked>
                                    <label class="form-check-label" for="report1">
                                        <h5>著作権違反</h5>
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="radio" name="reports" id="report2" value="option2">
                                    <label class="form-check-label" for="report2">
                                        <h5>誹謗中傷</h5>
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="radio" name="reports" id="report3" value="option3">
                                    <label class="form-check-label" for="report3">
                                        <h5>その他</h5>
                                    </label>
                                </div>
                                
                                <!-- 通報理由(その他)入力欄 -->
                                <div class="my-1">
                                    <textarea class="form-control is-invalid" id="report3" name="report3" placeholder="通報理由を入力してください" rows="5" required></textarea>
                                    <div class="invalid-feedback">
                                        こちらは必須項目となります
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- キャンセル・送信ボタン -->
                        <div class="row justify-content-around">
                            <a href="/creator/manga?id={id}" class="btn btn-success my-4 ml-3 btnflex" type="reset">キャンセル</a>
                            <input type="submit" class="btn btn-danger my-4 mr-3 btnflex" value="送信する">
                        </div>

                    </form>

                </div>

            </div>
        </div>
        
    </div>