<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">
    <!-- 見出し -->
    <div class="alert alert-secondary w-100 mx-auto text-center p-4" role="alert">アカウント設定【メールアドレスの変更】
    </div>
    <!-- メールアドレス入力フォーム -->
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <form method="POST" action="#">
            <div class="text-center my-5">
                <div class="form-row text-left justify-content-center ">
                    <label class="col-sm-8 col-sm-offset-2"> 新しいメールアドレス</label>
                    <div class="col-sm-8">
                        <p> 
                            <input type="email" name="email" autocomplete="email" class="form-control " placeholder="メールアドレスを入力してください。" required />
                        </p>
                    </div>       
                </div>
            </div>

            <!-- 設定保存 -->
            <div class="row justify-content-around pb-2 mb-4">
                <a href="/users/settings"><button type="button" class="btn btn-danger btnflex ml-3">キャンセル</button></a>
                <input type="submit" value="保存" formaction="/users/settings" class="btn btn-success btnflex mr-3">
            </div>          
        </form>
    </div>
</div>
