<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <div class="shadow-lg p-3 mb-5 bg-white rounded my-5">
                    <h2 class="text-center my-5 font-weight-bold">退会</h2>
                    <h6 class="text-center">このページから退会ができます。</h6>
                    <h6 class="text-center">退会すると、登録作品も削除され、</h6>
                    <h6 class="text-center">購入した商品も閲覧できなくなります。</h6>

                    <!-- 退会理由入力欄 -->
                    <form method="POST" action="#">

                        <div class="form-row text-left justify-content-center my-5">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea rows="7" id="textarea1" class="form-control" placeholder="退会理由を教えてください" ></textarea>
                                </div>
                            </div>
                        </div>
                    

                        <div class="text-center my-5">
                            <a href="/top/index" class="btn btn-primary btnflex">退会する</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>